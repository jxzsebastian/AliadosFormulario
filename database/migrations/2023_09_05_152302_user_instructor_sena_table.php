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
        Schema::create('emprendedor_instructor_sena', function (Blueprint $table) {

            $table->id();
            $table->string('centro_formacion_actual_instructor')->nullable();
            $table->string('parte_sennova')->nullable();
            $table->string('participacion_sennova')->nullable();
            $table->string('sennova_semillero_investigacion')->nullable();
            $table->string('nombre_semillero')->nullable();
            $table->string('semillero_cantidad_integrantes')->nullable();
            $table->string('semillero_tema_trabajo')->nullable();
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
