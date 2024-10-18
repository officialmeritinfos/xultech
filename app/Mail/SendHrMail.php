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

class SendHrMail extends Mailable
{
    use Queueable, SerializesModels;
    public Career $job;
    public JobSubmission $submission;
    public $web;
    /**
     * Create a new message instance.
     */
    public function __construct(Career $job, JobSubmission $submission)
    {
        $this->job = $job;
        $this->submission = $submission;
        $this->web = GeneralSetting::find(1);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->web->sender_email, $this->web->name),
            subject: 'New Job Application Received: '.$this->job->title,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.notify_hr_mail',
            with: [
                'job' => $this->job,
                'submission' => $this->submission,
                'web' => $this->web,
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
