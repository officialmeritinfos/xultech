<?php

namespace App\Livewire\Auth;

use App\Mail\EmailVerificationMail;
use App\Mail\LoginMail;
use App\Mail\PasswordChangedMail;
use App\Mail\PasswordResetMail;
use App\Models\PasswordResetToken;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Validate;
use Livewire\Component;

class RecoverAccount extends Component
{
    use  LivewireAlert;
    public $showPasswordResetForm = false;
    public $showVerificationForm = false;
    #[Validate]
    public $login;
    public $code;
    public $password;
    public $password_confirmation;

    public function mount(Request $request)
    {

        if ($request->session()->has('showPasswordResetForm')) {
            $this->showPasswordResetForm = true;
            $this->showVerificationForm = false;
        }
        if ($request->session()->has('showVerificationForm')) {
            $this->showPasswordResetForm = false;
            $this->showVerificationForm = true;
        }
    }
    public function rules(){
        $input = $this->login;
        // Default rules
        $rules = [
            'login' => 'required',
        ];
        // Determine if the input is an email or username
        if (filter_var($input, FILTER_VALIDATE_EMAIL)) {
            $rules['login'] = 'required|email|exists:users,email';
        } else {
            $rules['login'] = 'required|alpha_dash|exists:users,username';
        }
        return $rules;
    }
    //submit recover password
    public function submitPasswordRecovery(Request $request)
    {
        $this->validate();
        DB::beginTransaction();
        try {
            $user = filter_var($this->login, FILTER_VALIDATE_EMAIL)
                ? User::where('email', $this->login)->first()
                : User::where('username', $this->login)->first();

            if (!$user->is_active){
                $this->alert('warning', '', [
                    'position' => 'top-end',
                    'timer' => 5000,
                    'toast' => true,
                    'text' => 'Your account is locked. Unlock it first.',
                    'width' => '400',
                ]);
                return;
            }
            Mail::to($user->email)->queue(new PasswordResetMail($user));
            $this->reset(['login']);
            $this->showVerificationForm = true;
            $this->showPasswordResetForm=false;
            $request->session()->put([
                'showVerificationForm'=>true,
                'email' =>$user->email
            ]);
            DB::commit();
            $this->dispatch('codeSent',url:route('forgotten-password'));

            $this->alert('success', '', [
                'position' => 'top-end',
                'timer' => 5000,
                'toast' => true,
                'text' => 'Please check your email to verify your account.',
                'width' => '400',
            ]);
            return;

        }catch (\Exception $e){
            DB::rollBack();
            logger($e->getMessage());
        }
    }

    //resend verification code
    public function resend()
    {
        //fetch email from session
        $email = session('email');
        // Send the verification email
        $user = User::where('email', $email)->first();
        Mail::to($email)->queue(new PasswordResetMail($user));

    }

    public function verifyPaswwordResetToken(Request $request)
    {
        $this->validate([
            'code'=>['required','numeric','digits:6'],
        ]);
        DB::beginTransaction();
        try {
            //fetch email from session
            $email = session('email');
            // Send the verification email
            $user = User::where('email', $email)->first();
            //fetch code
            $verification = \App\Models\PasswordResetToken::where('email', $user->email)->orderBy('id','desc')->first();
            if (empty($verification)) {
                $this->alert('error', '', [
                    'position' => 'top-end',
                    'timer' => 5000,
                    'toast' => true,
                    'text' => 'No action is needed on your account.',
                    'width' => '400',
                ]);
                return;
            }
            // Check if the token has expired
            if (Carbon::now()->greaterThan($verification->expires_at)) {
                $this->alert('error', '', [
                    'position' => 'top-end',
                    'timer' => 5000,
                    'toast' => true,
                    'text' => 'Verification token has expired.',
                    'width' => '400',
                ]);
                return;
            }
            // Check if the provided token matches the hashed token
            if (!Hash::check($this->code, $verification->token)) {
                $this->alert('error', '', [
                    'position' => 'top-end',
                    'timer' => 5000,
                    'toast' => true,
                    'text' => 'Invalid verification token.',
                    'width' => '400',
                ]);
                return;
            }
            $this->reset(['code']);
            $this->showVerificationForm = false;
            $this->showPasswordResetForm=true;
            $request->session()->remove('showVerificationForm');
            $request->session()->put([
                'showPasswordResetForm'=>true,
                'email' =>$user->email
            ]);
            PasswordResetToken::where('email',$user->email)->delete();

            DB::commit();

            $this->alert('success', '', [
                'position' => 'top-end',
                'timer' => 5000,
                'toast' => true,
                'text' => 'Proceed to change your password',
                'width' => '400',
            ]);
            return;


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
    //change password
    public function changePassword(Request $request)
    {
        $this->validate([
            'password'=>['required','min:8','confirmed'],
            'password_confirmation'=>['required','min:8'],
        ]);
        DB::beginTransaction();
        try {
            //fetch email from session
            $email = session('email');
            // Send the verification email
            $user = User::where('email', $email)->first();
            if (!$user->is_active) {
                $this->alert('error', '', [
                    'position' => 'top-end',
                    'timer' => 5000,
                    'toast' => true,
                    'text' => 'Your account is locked. Unlock it first.',
                    'width' => '400',
                ]);
                return;
            }
            //update user password
            $user->update([
                'password' => bcrypt($this->password),
                'password_changed_at' => Carbon::now()->setTimezone($user->timezone)->toDateTimeString(),
            ]);
            Mail::to($user->email)->queue(new PasswordChangedMail($user));
            logUserActivity( $user,'Password Changed',$request->ip());
            Auth::logoutOtherDevices($request->password);
            Auth::logoutCurrentDevice();
            $request->session()->flush();
            DB::commit();
            $this->alert('success', '', [
                'position' => 'top-end',
                'timer' => 5000,
                'toast' => true,
                'text' => 'Password Successfully changed. Redirecting',
                'width' => '400',
            ]);
            $this->dispatch('passwordChanged',url:route('login'));
            return;
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
        return view('livewire.auth.recover-account');
    }
}
