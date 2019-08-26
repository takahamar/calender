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
        if (Auth::guard($guard)->check()) {
            //$auths = Auth::id();
            //return redirect('/calender/{{$auths}}');
            $auths = Auth::id();
            //return action('PostsController@index', $auths);
            return redirect()->action('PostsController@index', $auths);
        }

        return $next($request);
    }
}
