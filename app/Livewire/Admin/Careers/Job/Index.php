<?php

namespace App\Livewire\Admin\Careers\Job;

use App\Models\Career;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination,LivewireAlert;
    #[Url]
    public $show=15;
    #[Url]
    public $search="";

    protected $listeners = [
        'renderPage' => 'render',
        'deleteConfirmed'
    ];

    public function render()
    {
        $jobs = Career::query()
            ->when($this->search, function ($query) {
                $query->where(function ($query) {
                    $query->where('title', 'like', '%' . $this->search . '%')
                        ->orWhere('description', 'like', '%' . $this->search . '%')
                        ->orWhere('created_at', 'like', '%' . $this->search . '%')
                        ->orWhere('department', 'like', '%' . $this->search . '%');
                });
            })->with('jobSubmissions')
            ->latest()
            ->paginate($this->show);
        return view('livewire.admin.careers.job.index',[
            'jobs' => $jobs
        ]);
    }
    //delete post
    public function deleteJob($id)
    {
        try {
            $post = Career::where([
                'id' => $id
            ])->first();

            //check if vacancy has submissions
            if ($post->jobSubmissions()->count() > 0) {
                $this->alert('error', '', [
                    'position' => 'top-end',
                    'timer' => 5000,
                    'toast' => true,
                    'text' => 'This Vacancy has received applications. Delete them first.',
                    'width' => '400',
                ]);
                return;
            }

            //open a dialog to confirm action
            $this->alert('warning', '', [
                'text' => 'Do you want to delete ' . $post->title,
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
            Log::info('An error occurred while trying to delete a job');
            $this->alert('error', '', [
                'position' => 'top-end',
                'timer' => 5000,
                'toast' => true,
                'text' => 'An error occurred',
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
            $post = Career::where([
                'id' => $id
            ])->first();

            if ($post) {
                $post->delete();
            }
        }

        $this->dispatch('renderAds');
    }
}
