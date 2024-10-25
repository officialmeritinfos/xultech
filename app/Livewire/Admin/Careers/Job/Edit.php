<?php

namespace App\Livewire\Admin\Careers\Job;

use App\Models\Career;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Edit extends Component
{
    use LivewireAlert;

    public $job;
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
    public $status=false;

    public function mount(Career $job)
    {
        $this->job = $job;
        $career = Career::find($this->job->id);
        $this->title = $this->job->title;
        $this->description = $this->job->description;
        $this->requirement = $this->job->requirements;
        $this->responsibilities = $career->responsibilities;
        $this->slug = $career->slug;
        $this->location = $career->location;
        $this->employmentType = $career->employment_type;
        $this->experienceLevel = $career->experience_level;
        $this->department = $career->department;
        $this->salaryRange = $career->salary_range;
        $this->status = $career->is_active;
    }

    public function render()
    {
        return view('livewire.admin.careers.job.edit');
    }
    public function publish()
    {
        $user = Auth::user();
        $this->validate([
            'title' => ['required','string','max:255'],
            'description' => ['required','string'],
            'requirement' => ['required','string'],
            'slug' => ['required','string',Rule::unique('careers','slug')->ignore($this->job->id)],
            'responsibilities' => ['required','string'],
            'location' => ['required','string'],
            'employmentType' => ['required','string'],
            'experienceLevel' => ['required','string'],
            'department' => ['required','string'],
            'salaryRange' => ['required','string'],
            'status'=>['nullable','boolean'],
        ]);
        DB::beginTransaction();
        try {
            $job = Career::where('id',$this->job->id)->update([
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
                'is_active' => $this->status,
            ]);

            if ($job){
                $this->alert('success', '', [
                    'position' => 'top-end',
                    'timer' => 5000,
                    'toast' => true,
                    'text' => 'Vacancy successfully updaated',
                    'width' => '400',
                ]);
                DB::commit();

                return $this->redirect(route('admin.job.index'));
            }
            $this->alert('error', '', [
                'position' => 'top-end',
                'timer' => 5000,
                'toast' => true,
                'text' => 'We could not update your vacancy at the moment',
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
        $count = Career::where('slug', 'LIKE', "{$slug}%")->where('id',"!=", $this->job->id)->count();
        return $count ? "{$slug}-" . ($count + 1) : $slug;
    }
}
