<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\GeneralSetting;
use App\Models\Team;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    //about page
    public function aboutUsPage()
    {
        $web = GeneralSetting::first();
        return view('home.company.about')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName'=>'About Us',
            ]);
    }
    //our team page
    public function ourTeamPage()
    {
        $web = GeneralSetting::first();
        return view('home.company.team')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName'=>'Our Team',
                'teams'=>Team::where('is_active',1)->get()
            ]);
    }
    //career page
    public function careerPage()
    {
        $web = GeneralSetting::first();
        return view('home.company.career')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName'=>'Work with '.$web->name,
                'jobs'  =>Career::where('is_active',1)->get()
            ]);
    }
    //career page
    public function careerDetail($slug)
    {
        $web = GeneralSetting::first();
        $career = Career::where([
            'slug' => $slug,
            'is_active' => 1,
        ])->firstOrFail();

        return view('home.company.career_detail')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName'=>$career->title,
                'job'=>$career
            ]);
    }
    //contact page
    public function contactPage()
    {

    }

}
