<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminRoleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and has the 'admin' role
        if ($request->user() && $request->user()->role === 'admin') {
            return $next($request);
        }


        // If the user is not an admin, you may redirect them or return a response as needed
        return redirect()->route('home')->with('error', 'You do not have permission to access this page.');
    }
}
