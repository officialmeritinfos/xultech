<?php

namespace App\Http\Controllers\Admin\Careers;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    //landing page
    public function landingPage()
    {
        $user = Auth::user();
        $web = GeneralSetting::first();

        return view('dashboards.admin.careers.job.index')
            ->with([
                'user' => $user,
                'web' => $web,
                'siteName'=>$web->name,
                'pageName'=>'Career',
            ]);
    }
    //new job
    public function newJob()
    {
        $user = Auth::user();
        $web = GeneralSetting::first();

        return view('dashboards.admin.careers.job.new')
            ->with([
                'user' => $user,
                'web' => $web,
                'siteName'=>$web->name,
                'pageName'=>'Add New Vacancy',
            ]);
    }
    //edit job
    public function editJob($id)
    {
        $user = Auth::user();
        $web = GeneralSetting::first();

        $job = Career::where('id', $id)->firstOrFail();

        return view('dashboards.admin.careers.job.edit')
            ->with([
                'user' => $user,
                'web' => $web,
                'siteName'=>$web->name,
                'pageName'=>'Edit: '.$job->title,
                'job' => $job,
            ]);
    }
}
