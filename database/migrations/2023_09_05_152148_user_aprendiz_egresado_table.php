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
        //
        Schema::create('emprendedor_aprendiz_egresado', function (Blueprint $table) {

            $table->id();
            $table->string('centro_formacion_actual_aprendiz')->nullable();
            $table->string('programa_formacion_adscrito')->nullable();
            $table->string('interes_emprendedor_es')->nullable();
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
