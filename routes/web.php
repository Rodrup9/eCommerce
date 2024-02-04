<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Route::prefix('ecommerce')->group(function(){
    Route::controller(HomeController::class)->group(function(){
        Route::get('/home', 'index');
        Route::get('/catalogo', 'catalogo');
    });
    //Agreguen aqui otos grupos para sus modulo--------------Esa es mi idea----
});
