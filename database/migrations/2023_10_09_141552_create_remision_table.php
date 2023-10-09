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
        Schema::create('remision', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('emprendedor_id');
            $table->foreign('emprendedor_id')->references('id')->on('emprendedor');
            $table->string('estrategia_llegada')->nullable();
            $table->string('contacto_recepcion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('remision');
    }
};
