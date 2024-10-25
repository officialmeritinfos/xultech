<?php

namespace App\Http\Controllers\Admin\Careers;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    //landing page
    public function landingPage($jobId)
    {
        $user = Auth::user();
        $web = GeneralSetting::first();

        $job = Career::where('id',$jobId)->first();

        return view('dashboards.admin.careers.applications')
            ->with([
                'user' => $user,
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => $job->title.' Applications',
                'job'=>$job,
            ]);
    }
}
