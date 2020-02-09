<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // dd(Auth::guard()->check());
        switch ($guard) {
            case 'doctor':
                if (Auth::guard($guard)->check()) {
                    return redirect('/patients');
                }
                break;
            case 'patient':
                if (Auth::guard($guard)->check()) {
                    return redirect('/dashboard/back');
                }
                break;
        }
        return $next($request);
    }
}
