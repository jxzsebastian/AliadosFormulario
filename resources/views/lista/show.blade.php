@extends('layouts.sidebar')

@section('title', 'Home Page')

@section('content')
    <h1>Registro</h1>
    <h2>{{$formulario->correo_emprendedor}}</h2>
    <h2>{{$formulario->nombre_emprendedor}}</h2>
    <h2>{{$formulario->tipo_identificacion_emprendedor}}</h2>
    <h2>{{$formulario->identificacion_emprendedor}}</h2>
    <h2>{{$formulario->otra_ocupacion}}</h2>
    <h2>{{$formulario->ciudad_municipio_emprendedor}}</h2>
    <h2>{{$formulario->ocupacion_emprendedor}}</h2>
    <h2>{{$formulario->programa_formacion_adscrito}}</h2>
    <h2>{{$formulario->otro_idea_negocio}}</h2>
    <h2>{{$formulario->parte_sennova}}</h2>
    <h2>{{$formulario->sennova_semillero_investigacion}}</h2>
    <h2>{{$formulario->investigador_universidad_nombre}}</h2>
    <h2>{{$formulario->investigador_idea_capacidad_producto}}</h2>
    <h2>{{$formulario->tipo_usuario}}</h2>
    <h2>{{$formulario->nombre_semillero}}</h2>
    <h2>{{$formulario->semillero_cantidad_integrantes}}</h2>
    <h2>{{$formulario->semillero_tema_trabajo}}</h2>
    <h2>{{$formulario->tipo_persona_juridica}}</h2>
    <h2>{{$formulario->empresa_nit}}</h2>
    <h2>{{$formulario->empresa_innovacion_desarrollo_producto}}</h2>
    <h2>{{$formulario->empresa_proyecto_desarrollo_avances_requiere_prototipos}}</h2>
    <h2>{{$formulario->otro_nivel_proyecto_empresa}}</h2>
    <h2>{{$formulario->nombre_idea}}</h2>
    <h2>{{$formulario->descripcion_idea}}</h2>
    <h2>{{$formulario->idea_genera_ventas}}</h2>
    <h2>{{$formulario->ventas_promedio_mes}}</h2>
    <h2>{{$formulario->idea_cantidad_empleados_genera}}</h2>
    <h2>{{$formulario->programa_sena_ingreso}}</h2>
    <h2>{{$formulario->otro_centro_formacion_servicios}}</h2>
    <h2>{{$formulario->otro_hub_innovacion_servicios}}</h2>
    <h2>{{$formulario->otro_linea_tecnologica_hub}}</h2>
    <h2>{{$formulario->conocimientos_lineas_seleccionada}}</h2>
    <h2>{{$formulario->necesidad_puntual_proyecto}}</h2>
    <h2>{{$formulario->cuenta_equipo_trabajo}}</h2>
    <h2>{{$formulario->otro_tecnoparque_postulado}}</h2>
    <h2>{{$formulario->linea_tecnica_adscribe_tecnoparque}}</h2>
   


    <a href="{{route('lista.index')}}">volver</a>
@endsection