<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    public function procesar(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'mensaje' => 'nullable'
        ]);

        $pedido = Pedido::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'mensaje' => $request->mensaje
        ]);

        return view('juegos.procesar', compact('pedido'));
    }

        public function pedidos()
    {
        $pedidos = Pedido::all();

        return view('juegos.pedidos', compact('pedidos'));
    }
}