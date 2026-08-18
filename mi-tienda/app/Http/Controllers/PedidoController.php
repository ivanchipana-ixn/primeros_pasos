<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function procesar(Request $request)
    {
        $nombre = $request->input('nombre');
        $correo = $request->input('correo');
        $mensaje = $request->input('mensaje');

        return view('pedido', [
            'nombre' => $nombre,
            'correo' => $correo,
            'mensaje' => $mensaje
        ]);
    }
}