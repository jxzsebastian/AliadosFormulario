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
        Schema::create('empresa', function (Blueprint $table) {

            $table->id();
            $table->string('tipo_empresa')->nullable();
            $table->string('tipo_persona_juridica')->nullable();
            $table->string('empresa_nit')->nullable();
            $table->string('empresa_tamaño')->nullable();
            $table->string('empresa_innovacion_desarrollo_producto')->nullable();
            $table->string('empresa_proyecto_desarrollo_avances_requiere_prototipos')->nullable();
            $table->string('nivel_proyecto_empresa')->nullable();
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
