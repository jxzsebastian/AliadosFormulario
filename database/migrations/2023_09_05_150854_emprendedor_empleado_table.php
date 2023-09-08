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
        Schema::create('emprendedor_empleado', function (Blueprint $table) {

            $table->id();
            $table->string('empleado_idea_negocio')->nullable();
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
