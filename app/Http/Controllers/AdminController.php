<?php

namespace App\Http\Controllers;

use App\Category;
use App\Dbrequest;
use App\Gerenica;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index(){

            return view('administrar.index');
    }
}
