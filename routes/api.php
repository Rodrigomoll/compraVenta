<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DetalleCompraController;
use App\Http\Controllers\DetallesVentaController;
use App\Http\Controllers\FacturasCompraController;
use App\Http\Controllers\FacturasVentaController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedoresController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('clientes', [ClientesController::class, 'index']);
Route::post('clientes', [ClientesController::class, 'store']);
Route::put('clientes/{id}', [ClientesController::class, 'update']);
Route::delete('clientes/{id}', [ClientesController::class, 'destroy']);


Route::get('productos', [ProductosController::class, 'index']);
Route::post('productos', [ProductosController::class, 'store']);
Route::put('productos/{id}', [ProductosController::class, 'update']);
Route::delete('productos/{id}', [ProductosController::class, 'destroy']);

Route::get('proveedores', [ProveedoresController::class, 'index']);
Route::post('proveedores', [ProveedoresController::class, 'store']);
Route::put('proveedores/{id}', [ProveedoresController::class, 'update']);
Route::delete('proveedores/{id}', [ProveedoresController::class, 'destroy']);

Route::get('detalleCompra', [DetalleCompraController::class, 'index']);
Route::post('detalleCompra', [DetalleCompraController::class, 'store']);
Route::put('detalleCompra/{id}', [DetalleCompraController::class, 'update']);
Route::delete('detalleCompra/{id}', [DetalleCompraController::class, 'destroy']);

Route::get('facturaCompra', [FacturasCompraController::class, 'index']);
Route::post('facturaCompra', [FacturasCompraController::class, 'store']);
Route::put('facturaCompra/{id}', [FacturasCompraController::class, 'update']);
Route::delete('facturaCompra/{id}', [FacturasCompraController::class, 'destroy']);

Route::get('detalleVenta', [DetallesVentaController::class, 'index']);
Route::post('detalleVenta', [DetallesVentaController::class, 'store']);
Route::put('detalleVenta/{id}', [DetallesVentaController::class, 'update']);
Route::delete('detalleVenta/{id}', [DetallesVentaController::class, 'destroy']);

Route::get('facturaVenta', [FacturasVentaController::class, 'index']);
Route::post('facturaVenta', [FacturasVentaController::class, 'store']);
Route::put('facturaVenta/{id}', [FacturasVentaController::class, 'update']);
Route::delete('facturaVenta/{id}', [FacturasVentaController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
