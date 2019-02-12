<?php

namespace App\Http\Middleware;

use Closure;

class BajaPorMantenimiento
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
        //return redirect("/down");
        return $next($request);
    }
}
