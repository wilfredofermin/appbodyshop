<?php

namespace App\Http\Controllers;

use App\Category;
use App\Dbrequest;
use App\Gerenica;
use App\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IncidenciasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('peticiones');
    }

    public function index(Request $request)
    {
        //SOLICITUDES
        if ($request)

        {
            //BUSCARDOR
            $searchText=trim($request->get('searchText'));
            $solicitudes = Dbrequest::where('subcategory','LIKE','%'.$searchText.'%')
                ->where('estado',1)
                ->where('user_id',Auth::id())
                //->where('condicion',3)
                ->orderBy('created_at','desc')
                ->Paginate(5);


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

            //SOLITUD ATENDIDA
            $atendidas=Dbrequest::where('user_id',Auth::id())->where('estado', 1)->where('condicion',1)->orderBy('updated_at','asc')->paginate(8);

            //SOLITUDES  EN PROCESO
           $procesos=Dbrequest::where('user_id',Auth::id())->where('estado', 1)->where('condicion',2)->orderBy('updated_at','asc')->paginate(8);

            //SOLITUDES  PENDIENTES
            $pendientes=Dbrequest::where('user_id',Auth::id())->where('estado', 1)->where('condicion',3)->orderBy('updated_at','asc')->paginate(8);


            //SOLITUDES RECHAZADAS
            $rechazadas=Dbrequest::where('user_id',Auth::id())->where('estado', 1)->where('condicion',4)->orderBy('updated_at','asc')->paginate(8);

            //SOLITUDES  VENCIDAS
            $vencidas=Dbrequest::where('user_id',Auth::id())->where('estado', 1)->where('condicion',5)->orderBy('updated_at','asc')->paginate(8);



            ///CONTEO INDIVIDUAL /////////////////////////////////////////////////////

            //SOLITUDES ATENDIDAS
            $c_completo = Dbrequest::where('user_id',Auth::id())->where('estado', 1)->where('condicion',1)->count();

            $c_en_proceso = Dbrequest::where('user_id',Auth::id())->where('estado', 1)->where('condicion',2)->count();

            //SOLITUDES PENDIENTES
            $c_pendientes = Dbrequest::where('user_id',Auth::id())->where('estado', 1)->where('condicion',3)->count();

            //SOLITUDES RECHAZADA
            $c_rechazados = Dbrequest::where('user_id',Auth::id())->where('estado', 1)->where('condicion',4)->count();

            $sumar_condicion=($c_completo)+($c_en_proceso)+($c_rechazados);

            //SOLICITUDES VENCIDAS
            $today=Carbon::today();
            $vencidos = DB::table('dbrequests')->whereDate('fecha_compromiso', $today)->where('estado',1)->get();
            //$c_vencidos = DB::table('dbrequests')->whereDate('fecha_compromiso', $today)->where('estado',1)->count();
            DB::table('dbrequests')->whereDate('fecha_compromiso', $today)->where('estado',1)->update(['condicion'=>5]);

            $c_vencidos = Dbrequest::where('user_id',Auth::id())->where('estado', 1)->where('condicion',5)->count();

            //dd($suma);

            //ULTIMA DATOS /////////////////////////////////
            //$a_ultimamodificacion=Dbrequest::where('user_id',Auth::id())->firt(1); // PRIMERO

            $ultimo_pendiente=Dbrequest::where('user_id',Auth::id())->orderBy('updated_at', 'desc')->first();

            //$fecha_compromiso=Carbon::now();
            //$fecha_compromiso->addDays(2);
            //$today=Carbon::today();

            //SUMAR TODAS LAS SOLCITUDES
            $sumar_solicitudes=$c_completo+$c_en_proceso+$c_rechazados+$c_pendientes+$c_vencidos;

            ////////////////////////////////////////////////////////////////////////////////////////////////////
            return view('incidencias.index')->with(compact('categories','sucursales','services','areas',
                    'solicitudes','c_solicitudes','c_pendientes','c_rechazados','c_completo', 'ultimo_pendiente','completos','complit','searchText',
                    'c_en_proceso','m_solicitudes','sumar_condicion','c_vencidos','sumar_solicitudes','atendidas','procesos','vencidas','rechazadas','pendientes')
            );
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
