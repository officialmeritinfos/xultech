<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use App\Models\UserActivity;
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

    public function markNotificationAsRead($id)
    {
        $user = Auth::user();
        $notification = UserActivity::where([
            'user_id' => $user->id,
            'id'    =>$id,
        ])->first();

        if ($notification) {
            $notification->status = true;
            $notification->save();
            return back()->with('success', 'Notification marked as read');
        }
    }

    public function markAllAsRead()
    {
        $user = Auth::user();
        UserActivity::where('user_id',$user->id)->update([
            'status' => true
        ]);

        return back()->with('success', 'All notifications marked as read');
    }

    public function allNotification()
    {
        $user = Auth::user();
        $web = GeneralSetting::first();

        return view('dashboards.admin.notifications')
            ->with([
                'user' => $user,
                'web' => $web,
                'siteName'=>$web->name,
                'pageName'=>'All Notifications',
                'notifications'=>UserActivity::where('user_id',$user->id)->orderBy('id','desc')->paginate(5)
            ]);
    }
}
