<?php

namespace App\Livewire\Company;

use App\Mail\SendApplicantMail;
use App\Mail\SendHrMail;
use App\Models\Career;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class JobSubmission extends Component
{
    use WithFileUploads,LivewireAlert;
    public $job;
    #[Validate]
    public $name;
    #[Validate]
    public $email;
    #[Validate]
    public $phone;
    #[Validate]
    public $coverLetter;
    #[Validate]
    public $resume;
    public $captcha = null;

    public function rules()
    {
        return [
            'coverLetter'=>['required','string'],
            'email'=>['required','email'],
            'captcha' => ['nullableg'],
            'name'=>['required','string'],
            'phone'=>['required','string'],
            'resume'=>['required','mimes:pdf,doc,docx','max:3100'],
        ];
    }

    public function mount(Career $job){
        $this->job = $job;
    }
    //process form submission
    public function processSubmission(Request $request)
    {
        $this->validate();
        DB::beginTransaction();
        try {
            $job = $this->job;
            $web = GeneralSetting::first();
            //let us upload the file
            if ($this->resume){
                $link = googleUpload($this->resume);
                $resume = $link['link'];
            }

            $application = \App\Models\JobSubmission::create([
                'career_id' => $job->id,'name'=>$this->name,
                'email'=>$this->email, 'phone'=>$this->phone,
                'cover_letter'=>$this->coverLetter,
                'resume'=>$resume, 'status'=>'pending'
            ]);
            if (!empty($application)){
                //send the mail notification
                Mail::to($this->email)->send(new SendApplicantMail($this->job, $application));
                Mail::to($web->hr_email)->send(new SendHrMail($this->job, $application));
                DB::commit();
                $this->alert('success', '', [
                    'position' => 'top-end',
                    'timer' => 5000,
                    'toast' => true,
                    'text' => 'Your application has been submitted successfully',
                    'width' => '400',
                ]);
                $this->reset([
                    'coverLetter','resume','captcha','name','phone','email'
                ]);
                return;
            }
        }catch (\Exception $exception){
            DB::rollBack();
            Log::info('Error while submitting job application: '.$exception->getMessage().', file '.$exception->getFile().' line '.$exception->getLine());

            $this->alert('error', '', [
                'position' => 'top-end',
                'timer' => 5000,
                'toast' => true,
                'text' => 'An error occurred. No worries, we are working on it.',
                'width' => '400',
            ]);
        }
    }
    public function render()
    {
        return view('livewire.company.job-submission');
    }

    public function updatedCaptcha($token)
    {
        $response = Http::post(
            'https://www.google.com/recaptcha/api/siteverify?secret='.
            config('app.recaptcha_secret').
            '&response='.$token
        );

        $success = $response->json()['success'];

        if (! $success) {
            throw ValidationException::withMessages([
                'captcha' => __('Google thinks, you are a bot, please refresh and try again!'),
            ]);
        } else {
            $this->captcha = true;
        }
    }
}
