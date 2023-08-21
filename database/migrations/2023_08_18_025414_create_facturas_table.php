<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_Factura');
            $table->unsignedBigInteger('cliente_id'); // Columna para la clave externa
            $table->unsignedBigInteger('platillo_id'); // Columna para la clave externa
            $table->timestamps();

            // Definir relaciones con las tablas clientes y platillos
            $table->foreign('cliente_id')->references('id')->on('clientes')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('platillo_id')->references('id')->on('platillos')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};

