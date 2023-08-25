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
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_emprendimiento');
            $table->string('nombre_emprendedor');
            $table->string('tipo_identificacion_emprendedor');
            $table->string('identificacion_emprendedor');
            $table->string('numero_contacto_emprendedor');
            $table->string('correo_emprendedor');
            $table->string('ocupacion_emprendedor');
            $table->string('niveles_eduacion_emprendedor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form');
    }
};
