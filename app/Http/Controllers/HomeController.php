<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Check if the user is authenticated and has admin role
        if (Auth::check() && Auth::user()->hasRole('admin')) {
            return $next($request);
        }

        // Redirect to home if not admin
        return redirect('/home')->with('error', 'You do not have admin access.');
    }
}
