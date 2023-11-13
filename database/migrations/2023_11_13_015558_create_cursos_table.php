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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            //datos del formulario de Cursos
            $table->string('Nro_de_Comprobante',30);
            $table->date('Fecha');
            $table->string('Nombre_de_persona_Anticipo', 50);
            $table->string('Nombre_de_persona_pago_total', 30);
            $table->string('Detalle_de_curso', 50);
            $table->integer('Ingreso');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
