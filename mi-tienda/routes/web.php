<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('index');
})->name('index');

Route::post('/pedido', [PedidoController::class, 'procesar']
)->name('pedido.procesar');


Route::get('/login', [LoginController::class, 'mostrarLogin']
)->name('login');


Route::post('/login', [LoginController::class, 'login']
)->name('login.procesar');


Route::post('/logout', [LoginController::class, 'logout']
)->name('logout');

Route::get( '/pedidos', [PedidoController::class, 'pedidos']
)->middleware('auth')->name('pedidos');