<?php

namespace App\Http\Controllers;

use App\Dbrequest;
use App\SubCategory;
use Illuminate\Http\Request;
use App\Category;
use App\Gerenica;
use App\Service;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sucursales=Gerenica::where('estado',1)
            ->where('tipo',1)
            ->get();
        $categories=Category::all();

        return view('home')->with(compact('categories','sucursales','notification','complit'));
    }

    public function show()
    {

        $sucursales=Gerenica::where('estado',1)
            ->where('tipo',1)
            ->get();
        $services=Service::where('estado',1)->get();

        $categories=Category::all();
        return view('solicitudes.index')->with(compact('categories','sucursales','services'));
    }
    public function store(Request $request){

    }

    // AP REQUEST
    public function byCategory($id){
        return Category::where('service_id',$id)->get();
    }
    public function bySubCategory($id){
        return SubCategory::where('category_id',$id)->get();
    }


}
