<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    // protected function redirectTo($request)
    // {
    //     if(request()->segment(1) == "admin"){
    //         return route('get.login');  
    //     }
    //     if(request()->segment(1) == "jobprovider"){
    //        return route('jobprovider.login');
    //     }
    // }
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
    protected function unauthenticated($request, array $guards)
    {
        abort(response()->json(['error' => 'Unauthenticated.'], 403));
    }
}
