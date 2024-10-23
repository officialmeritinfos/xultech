<?php

namespace App\Livewire\Auth;

use App\Mail\EmailVerificationMail;
use App\Mail\LoginMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    use LivewireAlert;

    #[Validate]
    public $login;
    #[Validate]
    public $password;
    public $remember;

    public $showLoginForm = true;
    public $showEmailVerificationForm = false;
    public $showTwoFactorForm = false;

    public function mount(Request $request)
    {

        if ($request->session()->has('showTwoFactorForm')) {
            $this->showTwoFactorForm = true;
            $this->showEmailVerificationForm = false;
            $this->showLoginForm = false;
        }
        if ($request->session()->has('showEmailVerificationForm')) {
            $this->showTwoFactorForm = false;
            $this->showEmailVerificationForm = true;
            $this->showLoginForm = false;
        }
    }

    public function rules()
    {
        $input = $this->login;
        // Default rules
        $rules = [
            'login' => 'required',
            'password' => 'required',
        ];
        // Determine if the input is an email or username
        if (filter_var($input, FILTER_VALIDATE_EMAIL)) {
            $rules['login'] = 'required|email|exists:users,email';
        } else {
            $rules['login'] = 'required|alpha_dash|exists:users,username';
        }
        return $rules;
    }

    //process login submission
    public function submit(Request $request)
    {
        $this->validate();

        try {
            // Authenticate based on input type
            $credentials = filter_var($this->login, FILTER_VALIDATE_EMAIL)
                ? ['email' => $this->login, 'password' => $this->password]
                : ['username' => $this->login, 'password' => $this->password];

            if (Auth::once($credentials)) {
                $user = filter_var($this->login, FILTER_VALIDATE_EMAIL)
                    ? User::where('email', $this->login)->first()
                    : User::where('username', $this->login)->first();

                if (!$user->is_active){
                    $this->alert('warning', '', [
                        'position' => 'top-end',
                        'timer' => 5000,
                        'toast' => true,
                        'text' => 'Your account is locked',
                        'width' => '400',
                    ]);
                    return;
                }
                if (!$user->hasVerifiedEmail()){
                    $request->session()->put([
                        'showEmailVerificationForm' => true,
                        'email' => $user->email,
                    ]);
                    Mail::to($user->email)->queue(new EmailVerificationMail($user));
                    $this->alert('info', '', [
                        'position' => 'top-end',
                        'timer' => 5000,
                        'toast' => true,
                        'text' => 'Please verify your email first.',
                        'width' => '400',
                    ]);
                    return redirect(route('login'));
                }
                if ($user->hasTwoFactorEnabled()){
                    $request->session()->put([
                        'showTwoFactorForm' => true,
                        'email' => $user->email,
                    ]);
                    $this->alert('info', '', [
                        'position' => 'top-end',
                        'timer' => 5000,
                        'toast' => true,
                        'text' => 'Please authenticate this login',
                        'width' => '400',
                    ]);
                    session()->put('remember',$this->remember);
                    return redirect(route('login'));
                }else{
                    Mail::to($user->email)->queue(new LoginMail($user,['ipAddress'=>$request->ip()]));
                    logUserActivity( $user,'Logged in',$request->ip());
                    Auth::login($user,$this->remember);
                    $this->alert('success', '', [
                        'position' => 'top-end',
                        'timer' => 5000,
                        'toast' => true,
                        'text' => 'Authentication successful. Redirecting ....',
                        'width' => '400',
                    ]);
                    $this->dispatch('loginSuccessful',url:redirectToDashboard($user));
                    return;
                }
            }
            $this->alert('error', '', [
                'position' => 'top-end',
                'timer' => 5000,
                'toast' => true,
                'text' => 'Your credentials do not match our records.',
                'width' => '400',
            ]);
            return;
        }catch (\Exception $exception){
            logger($exception->getMessage());
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
        return view('livewire.auth.login',[
            'siteName'=>config('app.name')
        ]);
    }
}
