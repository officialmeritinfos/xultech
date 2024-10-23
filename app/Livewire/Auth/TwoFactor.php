<?php

namespace App\Livewire\Auth;

use App\Mail\LoginMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use PragmaRX\Google2FA\Google2FA;

class TwoFactor extends Component
{
    use LivewireAlert;
    public $code;

    public function processTwoFactor(Request $request)
    {
        $this->validate([
            'code' => 'required|numeric|digits:6'
        ]);
        try {
            $email = $request->session()->get('email');
            $user = User::where('email', $email)->first();
            $remember = $request->session()->get('remember');
            $google2fa = new Google2FA();
            $valid = $google2fa->verifyKey(trim($user->two_factor_secret),$this->code);

            if ($valid) {
                Mail::to($user->email)->queue(new LoginMail($user, ['ipAddress' => $request->ip()]));
                logUserActivity($user, 'Logged in', $request->ip());
                Auth::login($user, $remember);

                $this->alert('success', '', [
                    'position' => 'top-end',
                    'timer' => 5000,
                    'toast' => true,
                    'text' => 'Authentication successful. Redirecting ....',
                    'width' => '400',
                ]);
                $this->dispatch('loginVerified', url: redirectToDashboard($user));
                $request->session()->remove('email');
                $request->session()->remove('remember');
                $request->session()->remove('showTwoFactorForm');
                return;
            }
            $this->alert('error', '', [
                'position' => 'top-end',
                'timer' => 5000,
                'toast' => true,
                'text' => 'Provided token has either expired or is not valid!',
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
        return view('livewire.auth.two-factor');
    }
}
