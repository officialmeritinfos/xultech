<?php

namespace App\Livewire\Auth;

use App\Mail\EmailVerificationMail;
use App\Mail\WelcomeMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class EmailVerification extends Component
{
    use LivewireAlert;

    public $code;

    //resend verification code
    public function resend()
    {
        //fetch email from session
        $email = session('email');
        // Send the verification email
        $user = User::where('email', $email)->first();
        Mail::to($email)->queue(new EmailVerificationMail($user));

    }
    //submit to verify email
    public function verifyEmail(Request $request)
    {
        $this->validate([
            'code'=>['required','numeric','digits:6'],
        ]);
        DB::beginTransaction();
        try {
            if ($request->session()->has('showEmailVerificationForm')) {
                //fetch email from session
                $email = session('email');
                // Send the verification email
                $user = User::where('email', $email)->first();
                //fetch code
                $verification = \App\Models\EmailVerification::where('user_id', $user->id)->orderBy('id','desc')->first();
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
                if (!Hash::check($this->code, $verification->verification_token)) {
                    $this->alert('error', '', [
                        'position' => 'top-end',
                        'timer' => 5000,
                        'toast' => true,
                        'text' => 'Invalid verification token.',
                        'width' => '400',
                    ]);
                    return;
                }
                $user->markEmailAsVerified();
                $user->save();
                // Delete the verification token after successful verification
                \App\Models\EmailVerification::where('user_id', $user->id)->delete();
                //welcome mail
                Mail::to($user->email)->queue(new WelcomeMail($user));

                $this->reset('code');
                $this->alert('success', '', [
                    'position' => 'top-end',
                    'timer' => 5000,
                    'toast' => true,
                    'text' => 'Your email has been successfully verified.',
                    'width' => '400',
                ]);
                DB::commit();
                $this->dispatch('emailVerified',url:route('login'));
                $request->session()->flush();
                return;
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
        return view('livewire.auth.email-verification');
    }
}
