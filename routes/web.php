<?php


use App\Http\Controllers\AgregarProductoController;

use App\Http\Controllers\AdminEcommerceController;

use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\VendedorController;
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
    Route::get('/home', 'index')->name('home');
    Route::get('/', 'index')->name('home');
});

Route::controller(CatalogoController::class)->group(function(){
    Route::get('/catalogo/{filter?}', 'index')->name('catalogo');
});


Route::controller(AgregarProductoController::class)->group(function(){
    Route::get("/vendedor/producto","NuevoProducto")->name("vendedor.producto");
});

Route::controller(VendedorController::class)->group(function(){
    Route::get("/vendedor/pedidos","index")->name("vendedor.pedidos");
    Route::get("/vendedor/pedidos/detalles","detalles")->name("vendedor.pedidos.detalles");

});

Route::controller(ShoppingCartController::class)->group(function(){
    Route::get('/shoppingCart', 'index')->name('homeShoppingCart');
    Route::get('/shoppingCart/confirmar', 'confirmData')->name('confirmData');
    Route::get('/shoppingCart/Historial', 'historialShopping')->name('historialShopping');
});


Route::controller(AdminEcommerceController::class)->group(function(){
    Route::get('/adminEcommerce', 'index')->name('homeAdminEcommerce');
    Route::get('/adminListaEcommerce/{lista?}', 'lista')->name('adminListaEcommerce');
    Route::get('/adminListaEcommerce/{lista?}/{data?}', 'detalles')->name('adminListDetalles');
});

