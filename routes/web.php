<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WebController::class, 'index'])->name('inicio');
Route::post('/', [WebController::class, 'index']);
Route::get('/listarPropiedades', [WebController::class, 'listarPropiedades']);
Route::post('/listarPropiedades', [WebController::class, 'listarPropiedades']);
Route::get('/verPropiedad/{id}', [WebController::class, 'verPropiedad']);
Route::get('/servicios', [WebController::class, 'servicios'])->name('servicios');
Route::get('/entreganos', [WebController::class, 'entreganos'])->name('entreganos');
Route::get('/nosotros', [WebController::class, 'nosotros'])->name('nosotros');
Route::get('/contacto', [WebController::class, 'contacto'])->name('contacto');
Route::post('/enviarEmail', [WebController::class, 'store'])->name('enviarEmail');
Route::post('/entreganosEmail', [WebController::class, 'entreganosEmail'])->name('entreganosEmail');
Route::get('/propiedades', [WebController::class, 'propiedades']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\AdminController::class, 'create'])->name('agregar');
Route::get('/edit/{id}', [App\Http\Controllers\AdminController::class, 'edit'])->name('edit');
Route::post('/store', [App\Http\Controllers\AdminController::class, 'store'])->name('store');
Route::delete('/delete/{id}', [App\Http\Controllers\AdminController::class, 'delete'])->name('delete');
Route::patch('/update/{id}', [App\Http\Controllers\AdminController::class, 'update'])->name('update');
Route::get('/chart', [App\Http\Controllers\AdminController::class, 'chart'])->name('chart');

//Route::resource('admin', AdminController::class); //obtiene todas las rutas del controlador