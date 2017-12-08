<?php

namespace App\Http\Controllers;

use App\Solicitud;
use App\SubCategory;
use App\User;
use Illuminate\Http\Request;

use app\Assign;
use App\Gerenica;
use App\Category;
use App\Service;
use App\Dbrequest;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;


class SolicitudController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request)

        {
            //BUSCARDOR
            $searchText=trim($request->get('searchText'));
            $solicitudes = Dbrequest::where('subcategory','LIKE','%'.$searchText.'%')
                ->where('estado',1)
                ->where('user_id',Auth::id())
                ->where('condicion',3)
                ->orderBy('created_at','desc')
                ->Paginate(4);


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
            //dd($completos);
            $complit=Dbrequest::where('user_id',Auth::id())->where('estado', 1)->where('condicion','<>',3)->orderBy('updated_at','asc')->get();
            ///CONTEO INDIVIDUAL /////////////////////////////////////////////////////

            //SOLITUDES EN PROCESO
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

            ////////////////////////////////////////////////////////////////////////////////////////////////////
            return view('solicitudes.index')->with(compact('categories','sucursales','services','areas',
                'solicitudes','c_solicitudes','c_pendientes','c_rechazados','c_completo', 'ultimo_pendiente','completos','complit','searchText',
                'c_en_proceso','m_solicitudes','sumar_condicion','c_vencidos')
            );
        }
    }


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
       // dd($request);
        //'ubicacion', 'servicio', 'area','prioridad','category','subcategory','type','description','estado','user','condicion'
        $solicitud= new Dbrequest();
        $solicitud->ubicacion=$request->get('ubicacion');
        $solicitud->servicio=$request->get('servicio');
        $solicitud->area=$request->get('area');
        $solicitud->prioridad=$request->get('prioridad');
        $solicitud->category=$request->get('category');
        $solicitud->subcategory=$request->get('subcategory');
        $solicitud->type=$request->get('type');
        $solicitud->description=$request->get('description');
        $solicitud->condicion=$request->get('condicion');
        $solicitud->user_id=Auth::id();

        //DETERMINAR LA ASIGNACION
        $serv=$request->get('servicio');
        $cat=$request->get('category');
        $sub=$request->get('subcategory');
        $t=$request->get('type');
       // $ubic=$request->get('ubicacion');

        // QUERY DE ASIGNACION
              $assing=DB::table('assigns')
                   ->select('support_id')
                   ->where('category',$cat)
                  ->where('type',$t)
                  ->first();
               foreach ( $assing as $as){
                   $solicitud->assign=$as;
               }

        //PRIORIDAD DE LA ASIGNACION
        $ahora=Carbon::now();
        $prio=$request->get('prioridad');

        if($prio=='Normal'){
            $solicitud->fecha_compromiso=$ahora->addHours(24);
        }elseif ($prio=='Alta'){
            $solicitud->fecha_compromiso=$ahora->addHours(4);
        }else{
            $solicitud->fecha_compromiso=$ahora->addHours(72);
        }


        if ($request->imagen != null) {
            $extension = $request->file('imagen')->getClientOriginalExtension();
            $numero_randon=rand ( 10000 , 99999 );
            $fecha=Carbon::now()->toDateString();
            $file_name = $numero_randon.$fecha. '.' . $extension;
            //Aqui redimensiono la imagen
                 $img = Image::make($request->file('imagen'));

               // ->resize(128,115)
                $img->save('img/solicitudes/'.$img.$file_name);

            $solicitud->imagen = $file_name;

            $solicitud->save();

            //Aqui envio la notificacion del cambio realizado.
            $notification = array(
                'message' => 'Solicutud completada exitosamente',
                'alert-type' => 'create_solicitud'
            );
            //Session::flash('guardar', 'My message');
            //session()->flash('notification',$notification);
            return redirect('/solicitud')->with($notification);

        } else {
            //De lo contrario realiza los siguien | Esto permite guardar sin tener que cambiar la imagen actual.
            $solicitud->save();

            //Aqui envio la notificacion del cambio realizado.
            $notification = array(
                'message' => 'Solicutud completada exitosamente',
                'alert-type' => 'create_solicitud'
            );
            //Session::flash('guardar', 'My message');
            //session()->flash('notification',$notification);
            return redirect('/solicitud')->with($notification);
        }
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
        $solicitud=Dbrequest::find($id);

        $complit=Dbrequest::where('user_id',Auth::id())->where('estado', 1)->where('condicion','<>',3)->orderBy('updated_at','asc')->get();

        //SUCURSALES
        $sucursales=Gerenica::where('estado',1)->where('tipo',1)->get();
        //TIPO DE SERVICIO
        $services=Service::where('estado',1)->get();

        //TIPO DE AREA
        $areas=Gerenica::where('estado',1)->where('tipo',3)->get();

        $c_solicitudes=Dbrequest::where('user_id',Auth::id())->where('estado',1)->count();

        //CATEGORIA
        $categories=Category::all();

        return view('solicitudes.edit')->with(compact('complit','solicitud','sucursales','services','areas','categories'));
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
        // dd($request);
        //'ubicacion', 'servicio', 'area','prioridad','category','subcategory','type','description','estado','user','condicion'
        $solicitud= Dbrequest::findorFail($id);
        $solicitud->ubicacion=$request->get('ubicacion');
        $solicitud->servicio=$request->get('servicio');
        $solicitud->area=$request->get('area');
        $solicitud->prioridad=$request->get('prioridad');
        $solicitud->category=$request->get('category');
        $solicitud->subcategory=$request->get('subcategory');
        $solicitud->type=$request->get('type');
        $solicitud->description=$request->get('description');
        $solicitud->condicion=$request->get('condicion');
        $solicitud->user_id=Auth::id();

        // dd($solicitud->service);

        if ($request->imagen != null) {
            $extension = $request->file('imagen')->getClientOriginalExtension();
            $numero_randon=rand ( 10000 , 99999 );
            $fecha=Carbon::now()->toDateString();
            $file_name = $numero_randon.$fecha. '.' . $extension;
            //Aqui redimensiono la imagen
            $img = Image::make($request->file('imagen'));

            // ->resize(128,115)
            $img->save('img/solicitudes/'.$img.$file_name);

            $solicitud->imagen = $file_name;

            $solicitud->save();

            //Aqui envio la notificacion del cambio realizado.
            $notification = array(
                'message' => 'Solicutud actualizada exitosamente',
                'alert-type' => 'update_solicitud'
            );
            //session()->flash('notification',$notification);
            return redirect('/solicitud')->with($notification);

        }
            //De lo contrario realiza los siguien | Esto permite guardar sin tener que cambiar la imagen actual.
            $solicitud->save();

            $notification = array(
                'message' => 'Solicutud actualizada exitosamente',
                'alert-type' => 'update_solicitud'
            );
            //session()->flash('notification',$notification);
        return redirect('/solicitud')->with($notification);


    }
    public function destroy($id)
    {

        $solicitud=Dbrequest::findorFail($id);

        $solicitud->delete();

        //Aqui envio la notificacion del cambio realizado.
        $notification = array(
            'message' => 'Solicutud eliminada exitosamente',
            'alert-type' => 'delete_solicitud'
        );
        //session()->flash('notification',$notification);
        return redirect('/solicitud')->with($notification);

       // Return redirect()->route('solicitud.index');
    }

    //API DE SERVICIOS///////////////////////////////////////////////////////////////////////////
    public function byCategory($id){
        return Category::where('service_id',$id)->where('estado',1)-> get();
    }
    public function bySubCategory($id){
        return SubCategory::where('category_id',$id)->where('estado',1)-> get();
    }


}
