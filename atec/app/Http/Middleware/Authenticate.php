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
    protected function redirectTo($request)
    {
        
        if (! $request->expectsJson()) {
            switch (request()->segment(2)) {
                case 'admin': return route('admin.login'); break;
                case 'customer': return route('login'); break;
                default:  return abort('404'); break;
            }
            
        }
    }
}