<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
    //     $path = $request->path();
    //     if(($path=="login" || $path=="register") && $request->session()->has('user'))
    //     {
    //         return redirect('/');
    //     }
    //     else if ($path != "login" && !$request->session()->has('user') && ($path !="register" && !$request->session()->has('user')))
    //     {
    //         return redirect('/login');
    //     }
         return $next($request);
    }
}
