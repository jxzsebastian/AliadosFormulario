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
            $table->string('nombre_emprendedor');
            $table->string('numero_contacto_emprendedor');
            $table->string('correo_emprendedor');
            $table->string('ciudad_municipio_emprendedor');
            $table->string('tipo_identificacion_emprendedor');
            $table->string('identificacion_emprendedor');
            $table->string('otra_ocupacion');
            $table->string('ocupacion_emprendedor');
            $table->string('programa_formacion_adscrito');
            $table->string('otro_idea_negocio');
            $table->string('parte_sennova');
            $table->string('sennova_semillero_investigacion');
            $table->string('investigador_universidad_nombre');
            $table->string('investigador_universidad_grupo_investigacion');
            $table->string('investigador_idea_capacidad_producto');
            $table->string('otro_tipo_usuario');
            $table->string('nombre_semillero');
            $table->string('semillero_cantidad_integrantes');
            $table->string('semillero_tema_trabajo');
            $table->string('tipo_persona_juridica');
            $table->string('empresa_nit');
            $table->string('empresa_innovacion_desarrollo_producto');
            $table->string('empresa_proyecto_desarrollo_avances_requiere_prototipos');
            $table->string('otro_nivel_proyecto_empresa');
            $table->string('nombre_idea');
            $table->string('descripcion_idea');
            $table->string('idea_genera_ventas');
            $table->string('ventas_promedio_mes');
            $table->string('idea_cantidad_empleados_genera');
            $table->string('programa_sena_ingreso');
            $table->string('otro_centro_formacion_servicios');
            $table->string('otro_hub_innovacion_servicios');
            $table->string('otro_linea_tecnologica_hub');
            $table->string('conocimientos_lineas_seleccionada');
            $table->string('necesidad_puntual_proyecto');
            $table->string('cuenta_equipo_trabajo');
            $table->string('otro_tecnoparque_postulado');
            $table->string('linea_tecnica_adscribe_tecnoparque');
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
