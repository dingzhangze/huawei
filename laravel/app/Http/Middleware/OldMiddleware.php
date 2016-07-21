<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class OldMiddleware
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
        if (preg_match("/^\/Home/", $_SERVER['REQUEST_URI']) && !preg_match("/^\/Home\/goodslist/", $_SERVER['REQUEST_URI']) && !Session::has("userDatas")) {
            return redirect("/login");
        } else {
                    
           
        
        
        }
        return $next($request);
    }
}
