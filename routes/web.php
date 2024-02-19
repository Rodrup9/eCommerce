<?php

use App\Http\Controllers\CatalogoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


Route::controller(HomeController::class)->group(function(){
    Route::get('/home', 'index');
});

Route::controller(CatalogoController::class)->group(function(){
    Route::get('/catalogo/{filter?}', 'index');
});

Route::controller(ShoppingCartController::class)->group(function(){
    Route::get('/shoppingCart', 'index');
});
