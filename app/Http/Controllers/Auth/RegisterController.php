<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //landing page
    public function landingPage()
    {
        $web = GeneralSetting::first();
        return view('auth.register')->with([
            'web' => $web,
            'pageName'=>'Create Account',
            'siteName'=>$web->name
        ]);
    }
}
