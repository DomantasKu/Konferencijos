<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated and has an admin role
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            abort(403); // Return a 403 error if not
        }

        return $next($request);
    }
}
