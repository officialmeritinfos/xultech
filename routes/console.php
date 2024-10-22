<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

//Schedule::command('location:update')->everyMinute();
Schedule::command('queue:retry all')->everyMinute();
Schedule::command('queue:work --stop-when-empty')->everyMinute();
