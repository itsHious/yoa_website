<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ContentSecurityPolicy
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Set the Content Security Policy header
        // $response->headers->set('Content-Security-Policy', "default-src 'self'; script-src 'self' example.com; object-src 'none';");
        $response->headers->set('X-Frame-Options', 'DENY'); // or 'SAMEORIGIN'

        return $response;
    }
}
