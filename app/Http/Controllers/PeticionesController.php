<?php

namespace App\Http\Controllers;

use App\Category;
use App\Dbrequest;
use App\Gerenica;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeticionesController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(Request $request)
    {
        {
            //BUSCARDOR
            $searchText = trim($request->get('searchText'));
            $solicitudes = Dbrequest::where('subcategory', 'LIKE', '%' . $searchText . '%')
                ->where('estado', 1)
                ->where('user_id', Auth::id())
                ->where('condicion', 3)
                ->orderBy('created_at', 'desc')
                ->Paginate(4);

        }

            /* Where(function($query)
             {
                 $query->where('user_id',Auth::id())
                     ->where('condicion','<>',1);

             }*/
            //->orwhere('description','LIKE','%'.$searchText.'%')

            //->orwhere('subcategory','LIKE','%'.$searchText.'%')
            //->where('user_id',Auth::id())
            //->where('condicion','<>',1)
            //->whereIn('condicion', [3, 4])
            //->orwhere('description','LIKE','%'.$searchText.'%')

            //FIN BUSCARDOR //////////////////////////////////////////////////////////////////////////////





        $m_solicitudes = Dbrequest::where('user_id',Auth::id())->where('estado',1)->get();

        //SUCURSALES
        $sucursales=Gerenica::where('estado',1)->where('tipo',1)->get();

        //TIPO DE SERVICIO
        $services=Service::where('estado',1)->get();

        //TIPO DE AREA
        $areas=Gerenica::where('estado',1)->where('tipo',3)->get();

        $c_solicitudes=Dbrequest::where('user_id',Auth::id())->where('estado',1)->count();

        //CATEGORIA
        $categories=Category::all();

        //SOLITUDES COMPLETADAS Y EN PROCESO | 1 : COMPLETADO | 2 : EN PROCESO
        $completos=Dbrequest::where('user_id',Auth::id())->where('estado', 1)->where('condicion','<>',3)->take(3)->orderBy('updated_at','asc')->get();
        $complit=Dbrequest::where('user_id',Auth::id())->where('estado', 1)->where('condicion','<>',3)->orderBy('updated_at','asc')->get();
        ///CONTEO INDIVIDUAL /////////////////////////////////////////////////////

        //SOLITUDES EN PROCESO
        $c_completo = Dbrequest::where('user_id',Auth::id())->where('estado', 1)->where('condicion',1)->count();

        $c_en_proceso = Dbrequest::where('user_id',Auth::id())->where('estado', 1)->where('condicion',2)->count();

        //SOLITUDES PENDIENTES
        $c_pendientes = Dbrequest::where('user_id',Auth::id())->where('estado', 1)->where('condicion',3)->count();

        //SOLITUDES RECHAZADA
        $c_rechazados = Dbrequest::where('user_id',Auth::id())->where('estado', 1)->where('condicion',4)->count();

        //ULTIMA DATOS /////////////////////////////////
        //$a_ultimamodificacion=Dbrequest::where('user_id',Auth::id())->firt(1); // PRIMERO

        $ultimo_pendiente=Dbrequest::where('user_id',Auth::id())->orderBy('updated_at', 'desc')->first();

        //$fecha_compromiso=Carbon::now();
        //$fecha_compromiso->addDays(2);

        //$today=Carbon::today();
            ////////////////////////////////////////////////////////////////////////////////////////////////////
        return view('peticiones.index')->with(compact('categories','sucursales','services','areas',
                'solicitudes','c_solicitudes','c_pendientes','c_rechazados','c_completo', 'ultimo_pendiente','completos','complit','searchText','c_en_proceso','m_solicitudes')
        );

    }
}
