<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //check that user is logged-in first
        if (auth()->check()) {
            if ((auth()->user()->role == 'admin' || auth()->user()->role == 'superadmin') && auth()->user()->is_admin) {
                return $next($request);
            }else{
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return to_route('login')->with('error', 'You are not authorized to access this page.');
            }
        }
        return to_route('login')->with('error', 'You are not authorized to access this page.');
    }
}
