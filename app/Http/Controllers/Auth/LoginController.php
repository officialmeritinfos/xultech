<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function lockAccount(Request $request,$email)
    {
        if ($request->hasValidSignature()) {
            return to_route('landingPage');
        }
        $user = User::where('email',$email)->first();
        if ($user) {
            $user->is_active = false;
            $user->save();
            return to_route('login')->with('success','Account successfully locked');
        }
    }
    //logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'))->with('success','Logged out successfully');
    }
}
