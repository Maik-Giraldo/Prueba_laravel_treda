<?php

use Illuminate\Support\Facades\Route;

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

//Vista principal
Route::get('/', [App\Http\Controllers\homeController::class, 'index']);

//Vista productos
Route::get('/productos', [App\Http\Controllers\productoController::class, 'index']);

//Vista tiendas
Route::get('/tiendas', [App\Http\Controllers\tiendaController::class, 'index']);
