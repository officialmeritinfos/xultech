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
            'pageName' => 'Leading Web, Mobile, and Software Development Company in '.getVisitorLocation($request->ip())->countryName,
        ];
        return view('home.home')->with($data);
    }
}
