<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
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
Route::get('/enviarEmail', [WebController::class, 'enviarEmail']);
Route::get('/propiedades', [WebController::class, 'propiedades']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
