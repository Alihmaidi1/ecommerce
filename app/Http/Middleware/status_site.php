<?php

namespace App\Http\Middleware;

use App\Models\setting;
use Closure;
use Illuminate\Http\Request;

class status_site
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
        if(setting::find(1)->status!="open"){

            return redirect("/closed");

        }
        return $next($request);
    }
}
