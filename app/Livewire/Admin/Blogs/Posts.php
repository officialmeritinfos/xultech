<?php

namespace App\Livewire\Admin\Blogs;

use App\Models\Post;
use Illuminate\Support\Facades\Log;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination,LivewireAlert;

    #[Url]
    public $status="all";
    #[Url]
    public $show=15;
    #[Url]
    public $search="";
    public $title;
    public $content;
    public $featuredImage;
    public $category;
    public $slug;
    public $allowComment=false;
    public $tags;

    protected $listeners = [
        'renderAds' => 'render',
        'deleteConfirmed'
    ];

    public function render()
    {
        $posts = Post::query()
            ->when($this->status !== "all", function ($query) {
                $query->where('status', $this->status);
            })
            ->when($this->search, function ($query) {
                $query->where(function ($query) {
                    $query->where('title', 'like', '%' . $this->search . '%')
                        ->orWhere('content', 'like', '%' . $this->search . '%')
                        ->orWhere('created_at', 'like', '%' . $this->search . '%')
                        ->orWhere('category', 'like', '%' . $this->search . '%');
                });
            })
            ->latest()
            ->paginate($this->show);

        return view('livewire.admin.blogs.posts', [
            'posts' => $posts,
        ]);
    }
    //delete post
    public function deletePost($id)
    {
        try {
            $post = Post::where([
                'id' => $id
            ])->first();

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
            $post = Post::where([
                'id' => $id
            ])->first();

            if ($post) {
                $post->delete();
            }
        }

        $this->dispatch('renderAds');
    }
}
