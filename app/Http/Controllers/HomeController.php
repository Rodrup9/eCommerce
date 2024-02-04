<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('moduloInicio.home', [
            'nameView' => 'Home'
        ]);
    }

    function catalogo(){
        return view('moduloInicio.catalogo', [
            'nameView' => 'Catalogo'
        ]);
    }
}
