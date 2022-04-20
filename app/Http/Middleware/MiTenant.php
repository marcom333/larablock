<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MiTenant
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
        if($request->route()->parameters()["user"]->tenant_id == auth()->user()->tenant_id ){
            return $next($request);
        }
        return redirect("403");
    }
}
