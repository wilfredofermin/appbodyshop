<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
   // protected $redirectTo = '/notification';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //REDIRECCIONAMIENTO DEL SISTEMA SEGUN SU ROL DE USUARIO
    public function redirectPath()
    {
        //IS_ADMIN -> ROL = 1
        //IS_SUPPORT -> ROL=2
        //IS_EVALUATOR -> ROL=3

        if (auth()->user()->is_admin) {
            Session::flash('bienvenido','');
            return '/home';
        }elseif(auth()->user()->is_support){
            Session::flash('bienvenido','');
            return '/peticion';
        }

        Session::flash('bienvenido','');
        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/solicitud';
    }
}
