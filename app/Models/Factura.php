<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table = 'facturas'; // Nombre de la tabla en la base de datos

    // Relación muchos a uno con Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    // Relación muchos a uno con Platillo
    public function platillo()
    {
        return $this->belongsTo(Platillo::class, 'platillo_id');
    }
}