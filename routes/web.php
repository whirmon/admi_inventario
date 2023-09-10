<?php

use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ProveedoresController;
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

Route::get('/', function () {
    return view('template');
});

Route::get('/inventario',[InventarioController::class, 'index'])->name('inventario');
Route::get('/formularioInventario',[InventarioController::class, 'getForm']);
Route::post('/registrar',[InventarioController::class, 'store'])->name('registrarproducto');
Route::get('/editarInventario/{id}',[InventarioController::class, 'editar'])->name('editarInventario');





//asignando un nombre a la ruta
Route::get('/proveedor1',[ProveedoresController::class, 'index2'])->name('proveedor1');
//proveedor1 es el nombre de va a llevar la ruuta en el menu 
Route::get('formularioProveedor',[ProveedoresController::class, 'getForm2']);

Route::post('/registrarproveedor',[ProveedoresController::class, 'store2'])->name('registrarproveedor');
Route::get('/editarProveedores/{id}', [ProveedoresController::class, 'editar2'])->name('editarProveedores');
