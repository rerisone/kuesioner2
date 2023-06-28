<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KaprodiMiddleware
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
        if(Auth::check())
        {
            if(Auth::user()->role == "kaprodi")
            {
                return $next($request);
            } 
            else
                return redirect('/home')->with('message','Access Denied!!!');
        }
        else
        {
            return redirect('/login')->with('message','Silahkan Login Dulu Ya!!!');
        }

        return $next($request);
    }
}
