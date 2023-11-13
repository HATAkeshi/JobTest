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
        Schema::create('alquiler_andamios', function (Blueprint $table) {
            $table->id();
            //añadimos los campos del formulario
            $table->string('Nro_de_Comprobante', 50);
            $table->date('Fecha');
            $table->string('Nombre_de_persona_Anticipo', 30);
            $table->string('Nombre_de_persona_Pago_Total',10);
            $table->string('Modulo',10);
            $table->string('Plataforma', 10);
            $table->string('Retraso_de_Entrega', 50);
            $table->integer('Ingreso');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alquiler_andamios');
    }
};
