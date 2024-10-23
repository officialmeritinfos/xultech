<?php

namespace App\Mail;

use App\Models\GeneralSetting;
use App\Models\PasswordResetToken;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Hash;

class PasswordResetMail extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $settings;

    /**
     * Create a new message instance.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->settings = GeneralSetting::first();
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->settings->sender_email,config('app.name')),
            subject: 'Password Reset Request',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        // Generate a random 6-digit numeric token
        $verificationToken = random_int(100000, 999999);
        // Hash the token
        $hashedToken = Hash::make($verificationToken);

        PasswordResetToken::create([
            'email' => $this->user->email,
            'token'=>$hashedToken,
            'expires_at'=>Carbon::now()->addMinute(60)
        ]);

        return new Content(
            view: 'emails.password_reset_mail',
            with: [
                'user' => $this->user,
                'settings' => $this->settings,
                'resetCode'=>$verificationToken
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
