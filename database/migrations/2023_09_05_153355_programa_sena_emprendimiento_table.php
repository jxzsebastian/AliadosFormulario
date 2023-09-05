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
        Schema::create('programa_sena_emprendimiento', function (Blueprint $table) {

            $table->id();
            $table->string('emprendimiento_servicios')->nullable();
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
