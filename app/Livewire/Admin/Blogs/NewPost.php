<?php

namespace App\Livewire\Admin\Blogs;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewPost extends Component
{
    use LivewireAlert,WithFileUploads;

    public $title;
    public $content;
    public $featuredImage;
    public $category;
    public $slug;
    public $allowComment=false;
    public $tags;


    public function render()
    {
        return view('livewire.admin.blogs.new-post',[
            'categories'=>Post::groupBy('category')->get(),
        ]);
    }

    public function publish()
    {
        $user = Auth::user();
        $this->validate([
            'title' => ['required','string','max:255'],
            'content' => ['required','string'],
            'category' => ['required','string'],
            'slug' => ['required','string','unique:posts,slug'],
            'allowComment' => ['nullable','boolean'],
            'tags' => ['required','string'],
            'featuredImage' => ['required','mimes:jpg,jpeg,png,webp,gif,avif','max:2048'],
        ]);
        DB::beginTransaction();
        try {
            //let us upload the file
            if ($this->featuredImage){
                $link = googleUpload($this->featuredImage);
                $featuredImage = $link['link'];
            }

            $blog = Post::create([
                'title' => $this->title,
                'content' => $this->content,
                'slug' => $this->slug,
                'category' => $this->category,
                'allow_comments' => $this->allowComment,
                'featuredImage' => $featuredImage,
                'tags' => $this->tags,
                'status' => 'published',
                'created_by'=>$user->id,
                'published_at'=>Carbon::now(),
                'user_id' => $user->id,
            ]);

            if (!empty($blog)){
                $this->alert('success', '', [
                    'position' => 'top-end',
                    'timer' => 5000,
                    'toast' => true,
                    'text' => 'Post successfully published',
                    'width' => '400',
                ]);
                DB::commit();

                return $this->redirect(route('admin.blog'));
            }
            $this->alert('error', '', [
                'position' => 'top-end',
                'timer' => 5000,
                'toast' => true,
                'text' => 'We could not publish your post at the moment',
                'width' => '400',
            ]);
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
    // Automatically update the slug when the title is updated
    public function updatedTitle($value)
    {
        // Generate the slug from the title
        $this->slug = Str::slug($value);
        // Check if the slug already exists, and if so, make it unique
        $this->slug = $this->ensureUniqueSlug($this->slug);
    }

    // Check if the slug is unique, if not append a number to make it unique
    public function ensureUniqueSlug($slug)
    {
        $count = Post::where('slug', 'LIKE', "{$slug}%")->count();
        return $count ? "{$slug}-" . ($count + 1) : $slug;
    }
}
