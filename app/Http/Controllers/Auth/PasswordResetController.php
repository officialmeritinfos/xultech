<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class PasswordResetController extends Controller
{
    //landing page
    public function landingPage()
    {
        $web = GeneralSetting::first();
        return view('auth.recover_password')->with([
            'web' => $web,
            'pageName'=>'Recover your '.$web->name.' Account',
            'siteName'=>$web->name
        ]);
    }
}
