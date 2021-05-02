<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        if(!Auth::check()){

            return  redirect()->route('login');
        }

        // admin role equal à 1

        if(Auth::users()->role == 1){

            return $next($request);
        }

        // gerant egal role à 2
        if(Auth::users()->role == 2){

           return redirect()->route('users');
        }

    }
}
