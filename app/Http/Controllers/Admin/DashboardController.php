<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //landing page
    public function landingPage()
    {
        $user = Auth::user();
        $web = GeneralSetting::first();

        return view('dashboards.admin.index')
            ->with([
                'user' => $user,
                'web' => $web,
                'siteName'=>$web->name,
                'pageName'=>'Admin Dashboard'
            ]);
    }
}
