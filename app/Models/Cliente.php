<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes'; // Nombre de la tabla en la base de datos

    // Relación uno a muchos con Factura
    public function facturas()
    {
        return $this->hasMany(Factura::class);
    }
}