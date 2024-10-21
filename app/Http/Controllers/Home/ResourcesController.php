<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use App\Models\Post;
use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    //landing page
    public function index()
    {
        $web = GeneralSetting::first();

        return view('home.resources.index')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => 'Find Resources',
            ]);
    }

    //privacy policy
    public function privacyPolicy()
    {
        $web = GeneralSetting::first();

        return view('home.resources.privacy')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => 'Privacy Policy',
            ]);
    }
    //terms of service
    public function termsOfService()
    {
        $web = GeneralSetting::first();

        return view('home.resources.terms')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => 'Terms & Conditions',
            ]);
    }
    //our work process
    public function ourWorkProcess()
    {
        $web = GeneralSetting::first();

        return view('home.resources.work_process')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => 'Our Work Process',
            ]);
    }
}
