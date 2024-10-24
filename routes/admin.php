<?php

use App\Http\Controllers\Admin\Blogs\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

/* ============================ DASHBOARD ROUTE =============================*/
Route::get('dashboard',[DashboardController::class,'landingPage'])->name('dashboard');
Route::get('dashboard/activity/{id}/mark-read',[DashboardController::class,'markNotificationAsRead'])->name('markNotificationAsRead');
Route::get('dashboard/activity/mark-read',[DashboardController::class,'markAllAsRead'])->name('markAllAsRead');
Route::get('dashboard/notifications',[DashboardController::class,'allNotification'])->name('notifications');

/* ============================ BLOG ROUTE =============================*/
Route::get('posts',[BlogController::class,'landingPage'])->name('blog');
Route::get('posts/new',[BlogController::class,'newBlog'])->name('blog.new');
Route::get('posts/{id}/edit',[BlogController::class,'editBlog'])->name('blog.edit');
