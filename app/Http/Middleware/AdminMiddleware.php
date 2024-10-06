<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Patikrinkite, ar vartotojas prisijungęs ir ar jis yra administratorius
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        return redirect('/'); // Pakeiskite į norimą nukreipimo kelią
    }
}
