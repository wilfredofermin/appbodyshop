<?php

namespace App\Http\Controllers;

use App\Dbrequest;
use Illuminate\Http\Request;
use App\Gerenica;
use App\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complit=Dbrequest::where('user_id',Auth::id())->where('estado', 1)->where('condicion',1)->orderBy('created_at','desc')->get();
        $sucursales=Gerenica::where ('tipo',1)->where('estado',1)->get();//SUCURSALES
        $areas=Gerenica::where ('tipo',3)->where('estado',1)->get();//AREAS
        $services=Service::where('estado',1)->get();

        //Session::flash('bienvenido','');
        return view('home')->with(compact('sucursales','services','areas','complit'));
    }


}

