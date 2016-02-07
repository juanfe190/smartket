<?php

namespace App\Http\Middleware;

use Closure;

class CheckApiMiddleware
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
        if(!$request->isJson()){
            return 'Acceso solo mediante json';
        }
        return $next($request);
    }
}
