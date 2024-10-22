<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HotlinkProtection
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Allow these domains
        $allowedReferrers = [
            'xultechng.com',
            'www.xultechng.com',
            'google.com',
            'www.google.com',
            'bing.com',
            'www.bing.com',
            'yahoo.com',
            'www.yahoo.com',
            'localhost',
            '127.0.0.1'
        ];
        // Get the referrer header from the request
        $referrer = $request->headers->get('referer');

        // Check if the referrer is null or from allowed domains
        if ($referrer) {
            $parsedUrl = parse_url($referrer, PHP_URL_HOST);

            // If the referrer is not in the allowed list, return a forbidden response
            if (!in_array($parsedUrl, $allowedReferrers)) {
                abort(403, 'Hotlinking is not allowed.');
            }
        }

        return $next($request);
    }
}
