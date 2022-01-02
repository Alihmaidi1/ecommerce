<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next=null,$guard=null)
    {
        if(Auth::guard($guard)->check()){
            return $next($request);

        }else{

            return redirect("admin/login");
        }
    }
}
