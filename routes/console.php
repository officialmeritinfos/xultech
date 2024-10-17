<?php

use Illuminate\Support\Facades\Artisan;

\Illuminate\Support\Facades\Schedule::command('location:update')->everyMinute();
