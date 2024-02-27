<?php

use App\Http\Controllers\CatalogoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\ShoppingCartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});*/

//Rutas para el manejo de las sesiones
Route::controller(SesionController::class)->group(function() {
    Route::get('/', 'index')->name('login');
    Route::post('iniciar', 'login')->name('signin');
    Route::get('register', 'register')->name('register');
    Route::post('registro', 'check')->name('confirmar');

    Route::get('recuperacionDeCuenta', 'recuperacion')->name('recuperar');
    Route::get('reestablecerContraseña', 'reestablecer')->name('reestablecer');
});


Route::controller(HomeController::class)->group(function(){
    Route::get('/home', 'index');
});

Route::controller(CatalogoController::class)->group(function(){
    Route::get('/catalogo/{filter?}', 'index');
});

Route::controller(ShoppingCartController::class)->group(function(){
    Route::get('/shoppingCart', 'index');
});
