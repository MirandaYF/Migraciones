<?php

namespace App\Http\Controllers;

use App\Models\Platillo;
use Illuminate\Http\Request;

class PlatilloController extends Controller
{
    // Método para mostrar detalles de un platillo y sus facturas
    public function show($id)
    {
        $platillo = Platillo::findOrFail($id);
        $facturas = $platillo->facturas;

        return view('platillos.show', compact('platillo', 'facturas'));
    }
}

