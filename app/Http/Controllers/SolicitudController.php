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
                   ->select('user_id')
                   ->where('category',$cat)
                  ->where('type',$t)
                  ->first();
               foreach ( $assing as $as){
                   $solicitud->assign_id=$as;
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
            return redirect('/incidencias')->with($notification);

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
            return redirect('/incidencias')->with($notification);
        }
    }

    public function edit($id)
    {
        $solicitud=Dbrequest::find($id);

        $b_asignado=$solicitud->assign->id; // CON ESTO OBTENGO EL ID DEL ASIGNADO

        $asignado=User::where('id',$b_asignado)->select('name')->get(); // AQUI HAGO LA CONSULTA - ESTO ME TRAE UN ARRAY DE DATOS


        //$n_asign=$asign->name;

        //dd($asignado);


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

        return view('incidencias.solicitudes.edit')->with(compact('complit','solicitud','sucursales','services','areas','categories','asignado'));
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

        //DETERMINAR LA ASIGNACION
        $serv=$request->get('servicio');
        $cat=$request->get('category');
        $sub=$request->get('subcategory');
        $t=$request->get('type');
        // $ubic=$request->get('ubicacion');

        // QUERY DE ASIGNACION
        $assing=DB::table('assigns')
            ->select('user_id')
            ->where('category',$cat)
            ->where('type',$t)
            ->first();
        foreach ( $assing as $as){
            $solicitud->assign_id=$as;
        }

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
            return redirect('/incidencias')->with($notification);

        }
            //De lo contrario realiza los siguien | Esto permite guardar sin tener que cambiar la imagen actual.
            $solicitud->save();

            $notification = array(
                'message' => 'Solicutud actualizada exitosamente',
                'alert-type' => 'update_solicitud'
            );
            //session()->flash('notification',$notification);
        return redirect('/incidencias')->with($notification);


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
        return redirect('/incidencias')->with($notification);

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
