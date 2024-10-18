<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
    //ui/ux design
    public function uiDesign()
    {
        $web = GeneralSetting::first();

        return view('home.solutions.ui_design')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => 'UI/UX Design',
            ]);
    }
    //web development
    public function webDevelopment()
    {
        $web = GeneralSetting::first();

        return view('home.solutions.web_dev')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => 'Web Development',
            ]);
    }
    //Mobile app development
    public function mobileDevelopment()
    {
        $web = GeneralSetting::first();

        return view('home.solutions.mobile_dev')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => 'Mobile App Development',
            ]);
    }
    //custom software
    public function customSoftware()
    {
        $web = GeneralSetting::first();

        return view('home.solutions.custom_dev')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => 'Custom Software Development',
            ]);
    }
    //e-commerce solutions
    public function ecommerceSolutions()
    {
        $web = GeneralSetting::first();

        return view('home.solutions.ecommerce')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => 'E-Commerce Solutions',
            ]);
    }
    //crm solutions
    public function crmSolutions()
    {
        $web = GeneralSetting::first();

        return view('home.solutions.crm')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => 'CRM Solutions',
            ]);
    }
    //consulting solutions
    public function consultingSolutions()
    {
        $web = GeneralSetting::first();

        return view('home.solutions.consulting')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => 'I.T Consulting Solutions',
            ]);
    }
    //business management
    public function businessManagementSolutions()
    {
        $web = GeneralSetting::first();

        return view('home.solutions.business')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => 'Business Management Solutions',
            ]);
    }
    //Inventory systems
    public function inventorySystems()
    {
        $web = GeneralSetting::first();

        return view('home.solutions.inventory')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => 'Inventory & Sales Solutions',
            ]);
    }
    //School solutions
    public function schoolSolution()
    {
        $web = GeneralSetting::first();

        return view('home.solutions.school')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => 'School Solutions',
            ]);
    }
    //booking solutions
    public function bookingSolutions()
    {
        $web = GeneralSetting::first();

        return view('home.solutions.booking')
            ->with([
                'web' => $web,
                'siteName'=>$web->name,
                'pageName' => 'Booking Systems',
            ]);
    }
}
