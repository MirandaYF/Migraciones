<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    // Método para mostrar detalles de un cliente y sus facturas
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        $facturas = $cliente->facturas;

        return view('clientes.show', compact('cliente', 'facturas'));
    }
}

