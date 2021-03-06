<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if (Auth::check()) {
            if ((Auth::user()->level == 1)) {
                return $next($request);
            }
            if ((Auth::user()->level == 2)) {
                return redirect('/poster');
            }
            return redirect('/');
        }
        return redirect('/login');
    }
}
