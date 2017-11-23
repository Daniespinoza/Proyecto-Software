<?php

namespace App\Http\Middleware;

use Closure;

class Exhibitor
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
       if(auth()->user()->id_rol == 4){
       return $next($request);
     }
       return redirect('home');
     }
}
