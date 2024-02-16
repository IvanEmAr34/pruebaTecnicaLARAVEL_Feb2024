<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

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

Route::controller(ProductoController::class)
    ->group(function () {
        Route::get("/",  'lista')->name('home');;
        Route::get("productos",  'lista')->name('productos.index');;
        
        Route::get("productos/nuevo",  'productoFormulario')->name('productos.nuevo');
        Route::post("productos",'nuevoProducto')->name("productos.nuevoProducto");

        Route::get("productos/{producto}",  'producto')->name('productos.show');
        Route::get("productos/{producto}/edit",  'edit')->name('productos.edit');
        Route::put("productos/{producto}",  'update')->name('productos.editarProducto');
    });
