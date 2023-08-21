<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Platillo extends Model
{
    protected $table = 'platillos'; // Nombre de la tabla en la base de datos

    // Relación uno a muchos con Factura
    public function facturas()
    {
        return $this->hasMany(Factura::class);
    }
}
