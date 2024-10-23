<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

/* ============================ DASHBOARD ROUTE =============================*/
Route::get('dashboard',[DashboardController::class,'landingPage'])->name('dashboard');
Route::get('dashboard/activity/{id}/mark-read',[DashboardController::class,'markNotificationAsRead'])->name('markNotificationAsRead');
Route::get('dashboard/activity/mark-read',[DashboardController::class,'markAllAsRead'])->name('markAllAsRead');
Route::get('dashboard/notifications',[DashboardController::class,'allNotification'])->name('notifications');
