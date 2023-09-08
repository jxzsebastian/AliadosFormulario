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
        Schema::create('idea', function (Blueprint $table) {

            $table->id();
            $table->string('nombre_idea')->nullable();
            $table->string('descripcion_idea')->nullable();
            $table->string('modelo_negocio')->nullable();
            $table->string('producto_servicio')->nullable();
            $table->longText('validacion_producto')->nullable();
            $table->string('idea_genera_ventas')->nullable();
            $table->string('ventas_promedio_mes')->nullable();
            $table->string('idea_cantidad_empleados_genera')->nullable();
            $table->unsignedBigInteger('emprendedor_id');
            $table->foreign('emprendedor_id')->references('id')->on('emprendedor');

            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
