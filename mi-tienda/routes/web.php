<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::post('/pedido', [PedidoController::class, 'procesar'])
    ->name('pedido.procesar');