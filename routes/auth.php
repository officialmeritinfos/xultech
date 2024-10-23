<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    //Frontend Pages
    Route::get('login',[LoginController::class,'landingPage'])->name('login');
    Route::get('register',[RegisterController::class,'landingPage'])->name('register');
    Route::get('forgotten-password',[PasswordResetController::class,'landingPage'])->name('forgotten-password');

    //Lock User Account
    Route::get('lock-account/{email}/block',[LoginController::class,'lockAccount'])->name('lock-account');
});
