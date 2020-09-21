<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Checklogin
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
//        auth()->logout();
        if (Auth::user() == null){
            return redirect()->route('dang_nhap');
        }else{
            return $next($request);
        }

    }
}
