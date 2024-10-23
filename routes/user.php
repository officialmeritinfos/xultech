<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\DashboardController;

Route::get('dashboard',[DashboardController::class,'landingPage'])->name('dashboard');
