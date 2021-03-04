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
    public function handle($request, Closure $next,$guard=null)
    {
        return $next($request);
      //  dd($request);

        /*
        if(Auth::user()->usertype == 'admin'){
            return $next($request);
        }

        else if(Auth::user()->usertype == 'user'){
            return $next($request);
        }
        else{
            return route('home');
        }
        */



/*
switch($guard){
    case 'admin':
        if (Auth::guard($guard)->check()) {
            return redirect()->route('admin.dashboard');
        }
    break;

    default:
        if (Auth::guard($guard)->check()) {
            return route('customers');
        }
    break;
}
return $next($request);
*/




}

    }

