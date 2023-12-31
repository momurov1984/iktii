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

    public function handle($request, Closure $next, $guard = null, $else = null)
    {
        $route = 'pages.index';

        if($guard === 'admin')
        {
            $route = 'admin.index';
        }

        if (Auth::guard($guard)->check()) {
            return redirect()->route($route);
        }

        return $next($request);
    }
}
