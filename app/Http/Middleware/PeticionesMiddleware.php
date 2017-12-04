<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PeticionesMiddleware
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
        //IS_ADMIN -> ROL = 1
        //IS_SOPPORT -> ROL=2
        //IS_EVALUATOR -> ROL=3

        if(!Auth::check()) // VERIFICO QUE ESTE VALIDADO
            return redirect('login');
        if(Auth::user()->role>3)// SI NO TIENE EL ROLE DE ADMIN-SOPORTE-EVALUADOR PASARA A SOLICITUD
            return redirect('solicitud');

        return $next($request);

    }
}
