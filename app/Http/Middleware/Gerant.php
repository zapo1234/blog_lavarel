<?php

namespace App\Http\Middleware;

use Closure;

class Gerant
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

        // role equal à 1

        if(Auth::users()->role == 1){


        }

        // gerant
        if(Auth::users()->role == 2){
            return $next($request);
        }

    }
}
