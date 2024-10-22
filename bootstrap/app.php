<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function (){
            Route::middleware('web')
                ->prefix('auth')
                ->group(base_path('routes/auth.php'));
            Route::middleware(['web', 'auth','auth.session'])
                ->prefix('user')
                ->name('user.')
                ->group(base_path('routes/user.php'));
            Route::middleware(['web', 'auth','auth.session','isAdmin'])
                ->prefix('modacore')
                ->name('admin.')
                ->group(base_path('routes/admin.php'));
        }
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append(\App\Http\Middleware\HotlinkProtection::class);

        $middleware->alias([
            'isAdmin' => \App\Http\Middleware\EnsureIsAdmin::class,
            'check.session'=>\App\Http\Middleware\CheckSessionKeys::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
