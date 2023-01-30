<?php

namespace App\Http\Middleware;
use URL;

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
            
          $pram=  explode('/',URL::current());
          if(in_array('admin',$pram))
          {
            return route('admin.login');
          }
            return route('login');
        }
    }
}
