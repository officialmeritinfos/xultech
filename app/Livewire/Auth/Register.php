<?php

namespace App\Livewire\Auth;

use App\Mail\EmailVerificationMail;
use App\Models\EmailVerification;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use PragmaRX\Google2FA\Google2FA;

class Register extends Component
{
    use LivewireAlert;
    public $showRegisterForm=true;
    public $showEmailVerificationForm=false;

    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $username;
    public $captcha = null;

    public function mount(Request $request)
    {
        if ($request->session()->has('showEmailVerificationForm')) {
            $this->showEmailVerificationForm=true;
            $this->showRegisterForm=false;
        }

    }
    public function submitRegistration(Request $request)
    {
        $this->validate( [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'username' => ['required', 'regex:/^[a-zA-Z0-9_]+$/','not_regex:/^.+@.+$/i', 'max:255', 'unique:users,username'],
            'password_confirmation' => ['required', 'string', 'min:8'],
            'captcha' => ['nullable'],
        ],[
            'username.regex' => 'The username may only contain letters, numbers, and underscores.',
            'username.not_regex' => 'The username cannot be an email address.',
            'username.unique' => 'This username is already taken.',
        ]);
        DB::beginTransaction();
        try {
            $google2fa = new Google2FA();
            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'username' => $this->username,
                'password' => bcrypt($this->password),
                'two_factor_secret' => $google2fa->generateSecretKey(),
            ]);
            if ($user) {
                Mail::to($this->email)->queue(new EmailVerificationMail($user));
                $this->alert('success', '', [
                    'position' => 'top-end',
                    'timer' => 5000,
                    'toast' => true,
                    'text' => 'Please check your email to verify your account.',
                    'width' => '400',
                ]);
                DB::commit();
                $this->reset(['email','captcha','username','password','password_confirmation','name']);
                $this->showRegisterForm = false;
                $this->showEmailVerificationForm=true;
                $request->session()->put([
                    'showEmailVerificationForm'=>true,
                    'email' =>$user->email
                ]);
                return $this->redirect(route('register'));
            }
        }catch (\Exception $e){
            DB::rollBack();
            logger($e->getMessage());
            $this->alert('error', '', [
                'position' => 'top-end',
                'timer' => 5000,
                'toast' => true,
                'text' => 'An error occurred. No worries, we are working on it.',
                'width' => '400',
            ]);
        }

    }
    public function render()
    {
        return view('livewire.auth.register',[
            'siteName' => config('app.name'),
        ]);
    }

    public function updatedCaptcha($token)
    {
        $response = Http::post(
            'https://www.google.com/recaptcha/api/siteverify?secret='.
            config('app.recaptcha_secret').
            '&response='.$token
        );

        $success = $response->json()['success'];

        if (! $success) {
            throw ValidationException::withMessages([
                'captcha' => __('Google thinks, you are a bot, please refresh and try again!'),
            ]);
        } else {
            $this->captcha = true;
        }
    }
}
