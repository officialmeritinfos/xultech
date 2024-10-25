<?php

namespace App\Livewire\Admin\Careers;

use App\Mail\SendApplicantRejectMail;
use App\Models\Career;
use App\Models\JobSubmission;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Applications extends Component
{
    use WithPagination,LivewireAlert;
    public $job;
    #[Url]
    public $show=15;
    #[Url]
    public $search="";
    #[Url]
    public $status="all";

    public $showCoverLetter;
    public $showCoverLetterTitle;

    protected $listeners = [
        'renderPage' => 'render',
        'deleteConfirmed'
    ];

    public function mount(Career $job)
    {
        $this->job = $job;
    }


    public function render()
    {
        $submissions = JobSubmission::query()
            ->when($this->status !== "all", function ($query) {
                $query->where('status', $this->status);
            })
            ->when($this->search, function ($query) {
                $query->where(function ($query) {
                    $query->where('name', 'like', '%' . $this->search . '%')
                        ->orWhere('email', 'like', '%' . $this->search . '%')
                        ->orWhere('created_at', 'like', '%' . $this->search . '%');
                });
            })->where('career_id',$this->job->id)->latest()
            ->paginate($this->show);

        return view('livewire.admin.careers.applications',[
            'submissions' => $submissions,
        ]);
    }

    //delete post
    public function deletePost($id)
    {
        try {
            $post = JobSubmission::where([
                'id' => $id
            ])->first();

            //open a dialog to confirm action
            $this->alert('warning', '', [
                'text' => 'Do you want to delete ' . $post->name.' application for '.$post->career->title,
                'showConfirmButton' => true,
                'confirmButtonText' => 'Yes',
                'showCancelButton' => true,
                'cancelButtonText' => 'Cancel',
                'onConfirmed' => 'deleteConfirmed',
                'data' => [
                    'id' => $id
                ],
                'timer' => null
            ]);
        } catch (\Exception $exception) {
            Log::info('An error occurred while trying to delete an ad');
            $this->alert('error', '', [
                'position' => 'top-end',
                'timer' => 5000,
                'toast' => true,
                'text' => 'An error occurred while creating an ad for merchant.s',
                'width' => '400',
            ]);
            return;
        }
    }
    //delete confirmed
    public function deleteConfirmed($data)
    {
        $id = $data['id'] ?? null;

        if ($id) {
            $post = JobSubmission::where([
                'id' => $id
            ])->first();

            if ($post) {
                $post->delete();
            }
        }

        $this->dispatch('renderAds');
    }
    //fetch cover letter
    public function fetchCoverLetter($id)
    {
        $application = JobSubmission::where([
            'id' => $id
        ])->first();

        if ($application) {
            $this->dispatch('showCoverLetter',coverLetter:$application->cover_letter);
            $this->showCoverLetterTitle = $application->name.' Cover Letter';
            $this->showCoverLetter = $application->cover_letter;
            return;
        }
        $this->alert('error', '', [
            'position' => 'top-end',
            'timer' => 5000,
            'toast' => true,
            'text' => 'Job Submission not found',
            'width' => '400',
        ]);
        return;
    }

    public function accept($id)
    {
        $application = JobSubmission::where([
            'id' => $id
        ])->first();

        if ($application) {
            $application->status='accepted';
            $application->save();
            $this->alert('success', '', [
                'position' => 'top-end',
                'timer' => 5000,
                'toast' => true,
                'text' => 'Job Submission Marked as accepted',
                'width' => '400',
            ]);
            return;
        }
        $this->alert('error', '', [
            'position' => 'top-end',
            'timer' => 5000,
            'toast' => true,
            'text' => 'Job Submission not found',
            'width' => '400',
        ]);
        return;
    }

    public function reject($id)
    {
        $application = JobSubmission::where([
            'id' => $id
        ])->first();

        if ($application) {
            $career = Career::where([
                'id' => $application->career_id
            ])->first();

            $application->status='rejected';
            $application->save();


            Mail::to($application->email)->queue(new SendApplicantRejectMail($career,$application));

            $this->alert('success', '', [
                'position' => 'top-end',
                'timer' => 5000,
                'toast' => true,
                'text' => 'Job Submission Marked as rejected',
                'width' => '400',
            ]);
            return;
        }
        $this->alert('error', '', [
            'position' => 'top-end',
            'timer' => 5000,
            'toast' => true,
            'text' => 'Job Submission not found',
            'width' => '400',
        ]);
        return;
    }

    public function review($id)
    {
        $application = JobSubmission::where([
            'id' => $id
        ])->first();

        if ($application) {
            $application->status='reviewed';
            $application->save();
            $this->alert('success', '', [
                'position' => 'top-end',
                'timer' => 5000,
                'toast' => true,
                'text' => 'Job Submission Marked as reviewing',
                'width' => '400',
            ]);
            return;
        }
        $this->alert('error', '', [
            'position' => 'top-end',
            'timer' => 5000,
            'toast' => true,
            'text' => 'Job Submission not found',
            'width' => '400',
        ]);
        return;
    }
}
