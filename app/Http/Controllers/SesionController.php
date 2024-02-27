<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesionController extends Controller
{
    public function index() {
        return view('sesion.login', ['nameView' => 'Login']);
    }

    public function login() {

    }

    public function register() {
        return view('sesion.register', ['nameView' => 'Register']);
    }

    public function check() {
        
    }

    public function recuperacion() {
        return view('sesion.recuperar', ['nameView' => 'Recuperación de cuenta']);
    }

    public function reestablecer() {
        return view('reestablecer', ['nameView' => 'Reestablecer contraseña']);
    }
}
