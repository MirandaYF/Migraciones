<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    // Método para mostrar detalles de una factura y sus relaciones
    public function show($id)
    {
        $factura = Factura::with('cliente', 'platillo')->findOrFail($id);

        return view('facturas.show', compact('factura'));
    }
}

