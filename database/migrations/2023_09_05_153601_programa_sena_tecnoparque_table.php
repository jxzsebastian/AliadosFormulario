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
        Schema::create('programa_sena_tecnoparque', function (Blueprint $table) {

            $table->id();
            $table->string('tecnoparque_postulado')->nullable();
            $table->string('servicios_accedidos_tecnoparque')->nullable();
            $table->longText('linea_tecnica_adscribe_tecnoparque')->nullable();
            $table->longText('condiciones_cumplidas_idea')->nullable();
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
