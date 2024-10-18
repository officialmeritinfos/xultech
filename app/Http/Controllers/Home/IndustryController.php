<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    //health care
    public function healthCare()
    {
        $web = GeneralSetting::first();

        return view('home.industries.healthcare')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => 'Healthcare Industry',
            ]);
    }
    //finance
    public function finance()
    {
        $web = GeneralSetting::first();

        return view('home.industries.finance')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => 'Fintech Industry',
            ]);
    }
    //retail
    public function retail()
    {
        $web = GeneralSetting::first();

        return view('home.industries.retail')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => 'Retail Industry',
            ]);
    }
    //education
    public function education()
    {
        $web = GeneralSetting::first();

        return view('home.industries.education')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => 'Education Industry',
            ]);
    }
    //real estate
    public function realEstate()
    {
        $web = GeneralSetting::first();

        return view('home.industries.real_estate')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => 'Real Estate Industry',
            ]);
    }
    //logistics
    public function logistics()
    {
        $web = GeneralSetting::first();

        return view('home.industries.logistics')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => 'Logistics Industry',
            ]);
    }
    //manufacturing
    public function manufacturing()
    {
        $web = GeneralSetting::first();

        return view('home.industries.manufacturing')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => 'Manufacturing Industry',
            ]);
    }
    //hospitality
    public function hospitality()
    {
        $web = GeneralSetting::first();

        return view('home.industries.hospitality')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => 'Hospitality Industry',
            ]);
    }
}
