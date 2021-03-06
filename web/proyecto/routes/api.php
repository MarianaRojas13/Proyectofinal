<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("productos/get",[ProductosController::class,"getProductos"]);
Route::get("datosproductos/get",[ProductosController::class,"getDatosProductos"]);
Route::post("productos/post",[ProductosController::class,"crearProductos"]);
Route::post("productos/delete",[ProductosController::class,"eliminarProducto"]);