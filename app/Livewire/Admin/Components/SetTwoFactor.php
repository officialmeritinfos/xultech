<?php

namespace App\Livewire\Admin\Components;

use App\Mail\TwoFactorNotificationMail;
use App\Models\GeneralSetting;
use App\Models\User;
use BaconQrCode\Renderer\Image\SvgImageBackEnd;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use PragmaRX\Google2FA\Google2FA;

class SetTwoFactor extends Component
{
    use LivewireAlert;
    public $showCodeForm = false;
    public $user;

    public $code;

    public function mount(User $user)
    {
        $this->user = $user;
    }
    //show form for code
    public function showForm()
    {
        $this->showCodeForm=true;
        $this->dispatch('keep-modal-open');
    }

    public function render()
    {
        $web = GeneralSetting::find(1);

        $google2fa = new Google2FA();

        $QR_Image = $google2fa->getQRCodeUrl(
            $web->name,
            $this->user->email,
            $this->user->two_factor_secret
        );
        $secret = $this->user->two_factor_secret;

        $renderer = new ImageRenderer(
            new RendererStyle(200, 2),
            new SvgImageBackEnd()
        );

        $writer = new Writer($renderer);
        $svg = $writer->writeString($QR_Image);

        return view('livewire.admin.components.set-two-factor',[
            'QR_Image' => $svg,
            'secretCode' => $secret,
        ]);
    }

    public function submitTwoFactor(Request $request)
    {
        $this->validate([
            'code' => 'required|numeric|digits:6',
        ]);
        DB::beginTransaction();
        try {
            $google2fa = new Google2FA();
            $valid = $google2fa->verifyKey(trim($this->user->two_factor_secret),$this->code);

            if ($valid) {
                $user = User::find($this->user->id);
                $user->setTwoFactorAttribute(true);
                $user->save();
                //send notification mail
                Mail::to($user->email)->queue(new TwoFactorNotificationMail($user));
                $this->dispatch('twoFactorSuccessful',url:redirectToDashboard($user));
                logUserActivity($user, 'Activated Two-factor Authentication', $request->ip());
                $this->showCodeForm = false;
                DB::commit();

                $this->alert('success', '', [
                    'position' => 'top-end',
                    'timer' => 5000,
                    'toast' => true,
                    'text' => 'Two-factor authentication successfully turned on!',
                    'width' => '400',
                ]);
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
            DB::rollBack();
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
}
