<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //landing page
    public function landingPage()
    {
        $web = GeneralSetting::first();
        return view('auth.login')->with([
            'web' => $web,
            'pageName'=>'Log In '.$web->name,
            'siteName'=>$web->name
        ]);
    }
}
