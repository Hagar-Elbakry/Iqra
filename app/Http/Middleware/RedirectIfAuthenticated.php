<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $guard=null)
    {
       if($guard == 'admin' && Auth::guard($guard)->check()){
           return redirect()->intended('/admin/dashboard');
       }

       if(Auth::guard($guard)->check()){
           return redirect()->intended('/home');
       }

       return $next($request);
    }


}
