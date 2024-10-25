<?php

use App\Http\Controllers\Admin\Blogs\BlogController;
use App\Http\Controllers\Admin\Careers\ApplicationController;
use App\Http\Controllers\Admin\Careers\JobController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OurProducts\OurProductController;
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
/* ============================ OUR PRODUCT ROUTE =============================*/
Route::get('our-products',[OurProductController::class,'landingPage'])->name('our-products');
Route::get('our-products/new',[OurProductController::class,'newProduct'])->name('our-products.new');
Route::get('our-products/{id}/edit',[OurProductController::class,'editProduct'])->name('our-products.edit');
/* ============================ CAREER ROUTE =============================*/
Route::get('careers/job/index',[JobController::class,'landingPage'])->name('job.index');
Route::get('careers/job/new',[JobController::class,'newJob'])->name('job.new');
Route::get('careers/job/{id}/edit',[JobController::class,'editJob'])->name('job.edit');
//Submissions
Route::get('careers/applications/index/{job?}',[ApplicationController::class,'landingPage'])->name('applications.index');
