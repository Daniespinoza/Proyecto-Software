<?php

namespace App\Http\Middleware;

use Closure;

class Secretary
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
       if(auth()->user()->id_rol == 3){
       return $next($request);
     }
       return redirect('/');
     }
}
