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
        Schema::create('programa_sena_hub_innovacion', function (Blueprint $table) {

            $table->id();
            $table->string('hub_innovacion_servicios')->nullable();
            $table->longText('linea_tecnologica_hub')->nullable();
            $table->string('conocimientos_lineas_seleccionada')->nullable();
            $table->string('necesidad_puntual_proyecto')->nullable();
            $table->string('cuenta_equipo_trabajo')->nullable();
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
