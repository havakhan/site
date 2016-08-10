<?php

namespace App\Http\Middleware;

use Closure;

class MyProfileiMiddlware
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

        //var_dump( $request->getRequestUri() );die;
        if ('/users/'.\Auth::user()->name == $request->getRequestUri()) {

//        return redirect('myprofile');
        }
        return $next($request);
    }
}
