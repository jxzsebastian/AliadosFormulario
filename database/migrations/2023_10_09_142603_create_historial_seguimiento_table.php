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
        Schema::create('historiales_seguimientos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('remision_id');
            $table->foreign('remision_id')->references('id')->on('remisiones');
            $table->longText('notas');
            $table->longText('seguimiento');
            $table->longText('programa_sena_actual');
            $table->string('estado')->default('Remitido');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_seguimiento');
    }
};
