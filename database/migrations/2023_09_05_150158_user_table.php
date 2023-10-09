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
        Schema::create('emprendedor', function (Blueprint $table) {

        $table->id();

        $table->string('nombre_emprendedor')->nullable();
        $table->string('numero_contacto_emprendedor')->nullable();
        $table->string('correo_emprendedor')->nullable();
        $table->string('tipo_identificacion_emprendedor')->nullable();
        $table->string('identificacion_emprendedor')->nullable();
        $table->string('ciudad_municipio_emprendedor')->nullable();
        $table->longText('niveles_educacion_emprendedor')->nullable();
        $table->string('ocupacion_emprendedor')->nullable();
        $table->string('tipo_usuario')->nullable();
        $table->string('programa_sena_ingreso')->nullable();
        $table->longText('necesidad_asesoria_sena')->nullable()->default('Ninguna');
        $table->timestamps();
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
