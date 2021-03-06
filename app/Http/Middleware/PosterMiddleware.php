<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PosterMiddleware
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
            if ((Auth::user()->level == 2)) {
                if (Auth::user()->isActive) {
                    return $next($request);
                } else {
                    Auth::logout();
                    return redirect('/login')->withErrors(['email' => 'The account is blocked']);
                }
            }
            if ((Auth::user()->level == 1)) {
                return redirect('/admin');
            }
            return redirect('/');
        }
        return redirect('/login');
    }
}
