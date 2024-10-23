<?php

namespace App\Mail;

use App\Models\GeneralSetting;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class LoginMail extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $settings;
    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct(User $user, $data)
    {
        $this->user = $user;
        $this->settings = GeneralSetting::first();
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->settings->sender_email,config('app.name')),
            subject: 'Account Access Notification',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $this->user->updateLastLogin($this->data['ipAddress']);

        return new Content(
            view: 'emails.login_mail',
            with: [
                'user' => $this->user,
                'settings' => $this->settings,
                'ipAddress'=> $this->data['ipAddress'],
                'accessTime'=>date('M d, Y h:i:s A'),
                'secureUrl'=>URL::signedRoute('lock-account',['email'=>$this->user->email]),
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
