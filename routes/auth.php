<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    //Frontend Pages
    Route::get('login')->name('login');
    Route::get('register')->name('register');
    Route::get('forgotten-password')->name('forgotten-password');
});
