<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //landing page
    public function landingPage(Request $request)
    {
        $settings = GeneralSetting::first();
        $data = [
            'web' => $settings,
            'siteName' => $settings->name,
            'pageName' => 'Leading Web, Mobile, and Software Development Company in Africa',
        ];
        return view('home.home')->with($data);
    }
    //booking page
    public function bookingPage(Request $request)
    {
        $settings = GeneralSetting::first();
        $data = [
            'web' => $settings,
            'siteName' => $settings->name,
            'pageName' => 'Get Started',
        ];
        return view('home.book_us')->with($data);
    }
}
