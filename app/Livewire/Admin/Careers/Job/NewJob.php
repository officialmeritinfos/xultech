<?php

namespace App\Livewire\Admin\Careers\Job;

use App\Models\Career;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class NewJob extends Component
{
    use LivewireAlert;

    public $title;
    public $description;
    public $requirement;
    public $responsibilities;
    public $slug;
    public $location;
    public $employmentType;
    public $experienceLevel;
    public $department;
    public $salaryRange;

    public function render()
    {
        return view('livewire.admin.careers.job.new-job');
    }
    public function publish()
    {
        $user = Auth::user();
        $this->validate([
            'title' => ['required','string','max:255'],
            'description' => ['required','string'],
            'requirement' => ['required','string'],
            'slug' => ['required','string','unique:posts,slug'],
            'responsibilities' => ['required','string'],
            'location' => ['required','string'],
            'employmentType' => ['required','string'],
            'experienceLevel' => ['required','string'],
            'department' => ['required','string'],
            'salaryRange' => ['required','string'],
        ]);
        DB::beginTransaction();
        try {
            $job = Career::create([
                'title' => $this->title,
                'slug' => $this->slug,
                'responsibilities' => $this->responsibilities,
                'description' => $this->description,
                'requirements' => $this->requirement,
                'location' => $this->location,
                'employment_type' => $this->employmentType,
                'experience_level' => $this->experienceLevel,
                'department' => $this->department,
                'salary_range' => $this->salaryRange,
                'is_active' => true,
            ]);

            if ($job){
                $this->alert('success', '', [
                    'position' => 'top-end',
                    'timer' => 5000,
                    'toast' => true,
                    'text' => 'Vacancy successfully published',
                    'width' => '400',
                ]);
                DB::commit();

                return $this->redirect(route('admin.job.index'));
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
        $count = Career::where('slug', 'LIKE', "{$slug}%")->count();
        return $count ? "{$slug}-" . ($count + 1) : $slug;
    }
}
