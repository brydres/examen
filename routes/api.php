<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\VentaController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/eventos', [EventoController::class, 'index']);
Route::get('/eventos/{id}', [EventoController::class, 'indexByID']);
Route::post('/eventos/create', [EventoController::class, 'create']);
Route::put('/eventos/update/{id}', [EventoController::class, 'update']);
Route::put('/eventos/delete/{id}', [EventoController::class, 'delete']);

Route::get('/ventas', [VentaController::class, 'index']);
Route::get('/ventas/{id}', [VentaController::class, 'indexByID']);
Route::post('/ventas/create', [VentaController::class, 'create']);
Route::put('/ventas/update/{id}', [VentaController::class, 'update']);

Route::get('/compras', [CompraController::class, 'index']);
Route::get('/compras/{id}', [CompraController::class, 'indexByID']);
Route::post('/compras/create', [CompraController::class, 'create']);
Route::put('/compras/update/{id}', [CompraController::class, 'update']);

Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/clientes/{id}', [ClienteController::class, 'indexByID']);
Route::post('/clientes/create', [ClienteController::class, 'create']);
Route::put('/clientes/update/{id}', [ClienteController::class, 'update']);
Route::put('/clientes/delete/{id}', [ClienteController::class, 'delete']);

Route::get('/empleados', [EmpleadoController::class, 'index']);
Route::get('/empleados/{id}', [EmpleadoController::class, 'indexByID']);
Route::post('/empleados/create', [EmpleadoController::class, 'create']);
Route::put('/empleados/update/{id}', [EmpleadoController::class, 'update']);
Route::put('/empleados/delete/{id}', [EmpleadoController::class, 'delete']);

Route::get('/articulos', [ArticuloController::class, 'index']);
Route::get('/articulos/{id}', [ArticuloController::class, 'indexByID']);
Route::post('/articulos/create', [ArticuloController::class, 'create']);
Route::put('/articulos/update/{id}', [ArticuloController::class, 'update']);
Route::put('/articulos/delete/{id}', [ArticuloController::class, 'delete']);

Route::get('/proveedores', [ProveedorController::class, 'index']);
Route::get('/proveedores/{id}', [ProveedorController::class, 'indexByID']);
Route::post('/proveedores/create', [ProveedorController::class, 'create']);
Route::put('/proveedores/update/{id}', [ProveedorController::class, 'update']);
Route::put('/proveedores/delete/{id}', [ProveedorController::class, 'delete']);