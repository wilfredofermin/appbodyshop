<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if(!Auth::check()) // VERIFICO QUE ESTE VALIDADO
            return redirect('login');
        if(Auth::user()->role!=1)// SI NO TIENE EL ROLE DE ADMIN PASARA AL HOME-- Y COMO HOME ES MANEJADO POR EL HomeController DETERMINAR SI TIENE PERMISO O NO
            return redirect('solicitud');

        return $next($request);
    }
}
