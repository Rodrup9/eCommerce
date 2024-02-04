<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    function index($filter){
        
        return view('moduloInicio.catalogo', [
            'nameView' => 'Catalogo'
        ]);
    }
}
