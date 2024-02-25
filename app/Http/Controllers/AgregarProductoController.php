<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AgregarProductoController extends Controller{

    public function NuevoProducto(): View{
        return view("moduloVendedores.agregarProduc",["nameView"=> "agregarProducto"]);
    }
    
}
