<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckSessionKeys
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Define the required session keys
        $requiredKeys = ['email'];
        // Check if any required session key is missing
        foreach ($requiredKeys as $key) {
            if (!$request->session()->has($key)) {
                // If the key is missing, invalidate the session and redirect to the login page
                $request->session()->invalidate(); // Invalidate the session
                $request->session()->regenerateToken(); // Regenerate session token to prevent CSRF attacks

                return redirect()->route('login')->with('error', 'Your session has expired. Please log in again.');
            }
        }
        return $next($request);
    }
}
