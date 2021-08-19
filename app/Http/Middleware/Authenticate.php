<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use SSO\SSO;

class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function handle(Request $request, Closure $next)
    {
        if(SSO::authenticate() == false)
        {
            return route('login');
        } else {
            return $next($request);
        }
    }
}
