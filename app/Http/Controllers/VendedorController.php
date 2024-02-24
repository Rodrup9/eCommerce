<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class VendedorController extends Controller
{
    public function index(): View{
        return view("moduloVendedores.listaPedido",['nameView' => 'Home']);
    }
}
