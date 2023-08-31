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
            $table->string('nombre_emprendedor')->nullable();
            $table->string('numero_contacto_emprendedor')->nullable();
            $table->string('correo_emprendedor')->nullable();
            $table->string('tipo_identificacion_emprendedor')->nullable();
            $table->string('identificacion_emprendedor')->nullable();
            $table->string('otra_ocupacion')->nullable();
            $table->string('ocupacion_emprendedor')->nullable();
            $table->string('programa_formacion_adscrito')->nullable();
            $table->string('otro_idea_negocio')->nullable();
            $table->string('parte_sennova')->nullable();
            $table->string('sennova_semillero_investigacion')->nullable();
            $table->string('investigador_universidad_nombre')->nullable();
            $table->string('investigador_universidad_grupo_investigacion')->nullable();
            $table->string('investigador_idea_capacidad_producto')->nullable();
            $table->string('tipo_usuario')->nullable();
            $table->string('nombre_semillero')->nullable();
            $table->string('semillero_cantidad_integrantes')->nullable();
            $table->string('semillero_tema_trabajo')->nullable();
            $table->string('tipo_persona_juridica')->nullable();
            $table->string('empresa_nit')->nullable();
            $table->string('empresa_innovacion_desarrollo_producto')->nullable();
            $table->string('empresa_proyecto_desarrollo_avances_requiere_prototipos')->nullable();
            $table->string('otro_nivel_proyecto_empresa')->nullable();
            $table->string('nombre_idea')->nullable();
            $table->string('descripcion_idea')->nullable();
            $table->string('idea_genera_ventas')->nullable();
            $table->string('ventas_promedio_mes')->nullable();
            $table->string('idea_cantidad_empleados_genera')->nullable();
            $table->string('programa_sena_ingreso')->nullable();
            $table->string('otro_centro_formacion_servicios')->nullable();
            $table->string('otro_hub_innovacion_servicios')->nullable();
            $table->string('otro_linea_tecnologica_hub')->nullable();
            $table->string('conocimientos_lineas_seleccionada')->nullable();
            $table->string('necesidad_puntual_proyecto')->nullable();
            $table->string('cuenta_equipo_trabajo')->nullable();
            $table->string('otro_tecnoparque_postulado')->nullable();
            $table->string('linea_tecnica_adscribe_tecnoparque')->nullable();
            $table->string('ciudad_municipio_emprendedor')->nullable();
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
