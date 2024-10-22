<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    //Frontend Pages
    Route::get('login',[LoginController::class,'landingPage'])->name('login');
    Route::get('register',[RegisterController::class,'landingPage'])->name('register');
    Route::get('forgotten-password')->name('forgotten-password');
});
