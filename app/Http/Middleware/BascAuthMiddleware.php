<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BascAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get credentials from .env
    $adminUser = env('ADMIN_USER');
    $adminPass = env('ADMIN_PASS');
    if ($request->getUser() !== $adminUser || $request->getPassword() !== $adminPass) {
        // This header triggers the browser's native login popup
        return response('Unauthorized', 401, [
            'WWW-Authenticate' => 'Basic realm="Admin Panel"'
        ]);
    }
        return $next($request);
    }
}
