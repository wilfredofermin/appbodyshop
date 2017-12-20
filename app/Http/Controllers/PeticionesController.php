<?php

namespace App\Http\Controllers;

use App\Category;
use App\Dbrequest;
use App\Gerenica;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PeticionesController extends Controller
{
    public function __construct()
    {
        $this->middleware('peticiones');
    }

    public function index(Request $request)
    {
        {
            //BUSCARDOR
            $searchText = trim($request->get('searchText'));
            $s_pendientes = Dbrequest::where('subcategory', 'LIKE', '%' . $searchText . '%')
                ->where('estado', 1)
                ->where('assign_id', Auth::id())
                ->where('condicion', 3)
                ->orderBy('created_at', 'desc')
                ->Paginate(4);

        }

        return view('peticiones.index')->with(compact('searchText','s_pendientes')
        );

    }
}
