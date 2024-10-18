<?php

namespace App\Mail;

use App\Models\Career;
use App\Models\GeneralSetting;
use App\Models\JobSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendApplicantMail extends Mailable
{
    use Queueable, SerializesModels;
    public $job;
    public $submission;
    public $settings;

    /**
     * Create a new message instance.
     */
    public function __construct(Career $job,JobSubmission $submission)
    {
        $this->job = $job;
        $this->submission = $submission;
        $this->settings = GeneralSetting::find(1);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->settings->sender_email,$this->settings->name),
            subject: $this->settings->name.'- We have received your application',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.notify_applicant_mail',
            with: [
                'applicant' => $this->submission->name,
                'job' => $this->job->title,
                'web'=>$this->settings
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
