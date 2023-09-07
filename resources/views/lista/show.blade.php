@extends('layouts.sidebar')

@section('title', 'Home Page')

@section('content')

<div class="container">
    <h1>Detalles del Emprendedor</h1>
    <div class="container">

        <h1>Detalles del Emprendedor y su Idea</h1>

        <!-- Verificar si existen ideas antes de mostrar el cuadro -->
        @if ($emprendedor->ideas->isNotEmpty())
            <h2>Ideas del Emprendedor</h2>

            @foreach ($emprendedor->ideas as $idea)
                @if (
                    !empty($idea->nombre_idea) &&
                    !empty($idea->descripcion_idea) &&
                    !empty($idea->modelo_negocio) &&
                    !empty($idea->producto_servicio) &&
                    !empty($idea->validacion_producto) &&
                    !empty($idea->idea_genera_ventas) &&
                    !empty($idea->ventas_promedio_mes) &&
                    !empty($idea->idea_cantidad_empleados_genera)
                )
                    <div class="idea-box">
                        <h3>Idea</h3>
                        <p><strong>Nombre de la Idea:</strong> {{ $idea->nombre_idea }}</p>
                        <p><strong>Descripción de la Idea:</strong> {{ $idea->descripcion_idea }}</p>
                        <p><strong>Modelo de Negocio:</strong> {{ $idea->modelo_negocio }}</p>
                        <p><strong>Producto o Servicio:</strong> {{ $idea->producto_servicio }}</p>
                        <p><strong>Validación del Producto:</strong> {{ $idea->validacion_producto }}</p>
                        <p><strong>¿La Idea Genera Ventas?</strong> {{ $idea->idea_genera_ventas }}</p>
                        <p><strong>Ventas Promedio por Mes:</strong> {{ $idea->ventas_promedio_mes }}</p>
                        <p><strong>Cantidad de Empleados que Genera:</strong> {{ $idea->idea_cantidad_empleados_genera }}</p>
                        <!-- Agregar más campos de la Idea si es necesario -->
                    </div>
                @endif
            @endforeach
        @else
            <p>No existen ideas registradas para este emprendedor.</p>
        @endif
        <!-- Verificar si existe información de nivel de idea -->
        @if (!empty($emprendedor->emprendedores_nivel_idea))
        <h1>Nivel de la Idea</h1>

            <h2>Nivel de Idea del Emprendedor</h2>
            <p><strong>Nivel de Idea:</strong> {{ $emprendedor->emprendedores_nivel_idea }}</p>
            <!-- Puedes agregar más detalles si es necesario -->
        @else
            <p>No se ha proporcionado información sobre el Nivel de Idea del Emprendedor.</p>
        @endif

        <h1>Detalles de la empresa del Emprendedor</h1>
        <!-- Verificar si existen ideas antes de mostrar el cuadro -->
        @if ($emprendedor->ideas->isNotEmpty())
            <h2>Ideas del Emprendedor</h2>

            @foreach ($emprendedor->ideas as $idea)
                @if (
                    !empty($idea->tipo_empresa) ||
                    !empty($idea->tipo_persona_juridica) ||
                    !empty($idea->empresa_nit) ||
                    !empty($idea->empresa_tamaño) ||
                    !empty($idea->empresa_innovacion_desarrollo_producto) ||
                    !empty($idea->empresa_proyecto_desarrollo_avances_requiere_prototipos) ||
                    !empty($idea->nivel_proyecto_empresa)
                )
                    <div class="idea-box">
                        <h3>Idea</h3>
                        <p><strong>Tipo de Empresa:</strong> {{ $idea->tipo_empresa }}</p>
                        <p><strong>Tipo de Persona Jurídica:</strong> {{ $idea->tipo_persona_juridica }}</p>
                        <p><strong>NIT de la Empresa:</strong> {{ $idea->empresa_nit }}</p>
                        <p><strong>Tamaño de la Empresa:</strong> {{ $idea->empresa_tamaño }}</p>
                        <p><strong>Innovación y Desarrollo de Producto:</strong> {{ $idea->empresa_innovacion_desarrollo_producto }}</p>
                        <p><strong>Avances y Prototipos:</strong> {{ $idea->empresa_proyecto_desarrollo_avances_requiere_prototipos }}</p>
                        <p><strong>Nivel del Proyecto en la Empresa:</strong> {{ $idea->nivel_proyecto_empresa }}</p>
                        <!-- Agregar más campos de la Idea si es necesario -->
                    </div>
                @endif
            @endforeach
        @else
            <p>No existen ideas registradas para este emprendedor.</p>
        @endif
        @foreach ($emprendedor->programaSenaTecnoparque as $tecnoparque)

        <h1>Detalles del Servicio o Hub ingresado</h1>
            <!-- Verificar si existe información de TecnoParque -->
            @if (!empty($tecnoparque->tecnoparque_postulado) || !empty($tecnoparque->servicios_accedidos_tecnoparque) || !empty($tecnoparque->linea_tecnica_adscribe_tecnoparque) || !empty($emprendedor->condiciones_cumplidas_idea))
                <h2>TecnoParque</h2>
                <p><strong>TecnoParque Postulado:</strong> {{ $tecnoparque->tecnoparque_postulado }}</p>
                <p><strong>Servicios Accedidos en TecnoParque:</strong> {{ $tecnoparque->servicios_accedidos_tecnoparque }}</p>
                <p><strong>Línea Técnica a la que Adscribe TecnoParque:</strong> {{ $tecnoparque->linea_tecnica_adscribe_tecnoparque }}</p>
                <p><strong>Condiciones Cumplidas para la Idea:</strong> {{ $tecnoparque->condiciones_cumplidas_idea }}</p>
            @else
                <p>No se ha proporcionado información sobre TecnoParque.</p>
            @endif
        @endforeach

        <!-- Verificar si existe información del Hub de Innovación -->
        @foreach ($emprendedor->programaSenaHubInnovacion as $hubinnovacion)

                @if (
                    !empty($hubinnovacion->hub_innovacion_servicios) ||
                    !empty($hubinnovacion->linea_tecnologica_hub) ||
                    !empty($hubinnovacion->conocimientos_lineas_seleccionada) ||
                    !empty($hubinnovacion->necesidad_puntual_proyecto) ||
                    !empty($hubinnovacion->cuenta_equipo_trabajo)
                )
                    <h2>Hub de Innovación</h2>
                    <p><strong>Servicios del Hub de Innovación:</strong> {{ $hubinnovacion->hub_innovacion_servicios }}</p>
                    <p><strong>Línea Tecnológica del Hub:</strong> {{ $hubinnovacion->linea_tecnologica_hub }}</p>
                    <p><strong>Conocimientos en Líneas Seleccionadas:</strong> {{ $hubinnovacion->conocimientos_lineas_seleccionada }}</p>
                    <p><strong>Necesidad Puntual del Proyecto:</strong> {{ $hubinnovacion->necesidad_puntual_proyecto }}</p>
                    <p><strong>Cuenta con Equipo de Trabajo:</strong> {{ $hubinnovacion->cuenta_equipo_trabajo }}</p>
                    <!-- Agregar más campos del Hub de Innovación si es necesario -->
                @else
                    <p>No se ha proporcionado información sobre el Hub de Innovación del Emprendedor.</p>
                @endif
        @endforeach

        <!-- Verificar si existe información de Emprendimiento -->
        @foreach ($emprendedor->programaSenaEmprendimiento as $emprendimiento)

            @if (!empty($emprendimiento->emprendimiento_servicios))
                <h2>Emprendimiento</h2>
                <p><strong>Servicios de Emprendimiento:</strong> {{ $emprendimiento->emprendimiento_servicios }}</p>
                <!-- Agregar más campos de Emprendimiento si es necesario -->
            @else
                <p>No se ha proporcionado información sobre los Servicios de Emprendimiento del Emprendedor.</p>
            @endif
        @endforeach

        <!-- Verificar si existe información de Centro de Formación -->
        @foreach ($emprendedor->programaSenaCentroFormacion as $centrosFormacion)

            @if (!empty($centrosFormacion->centro_formacion_servicios))
                <h2>Centro de Formación</h2>
                <p><strong>Servicios del Centro de Formación:</strong> {{ $centrosFormacion->centro_formacion_servicios }}</p>
                <!-- Agregar más campos del Centro de Formación si es necesario -->
            @else
                <p>No se ha proporcionado información sobre los Servicios del Centro de Formación del Emprendedor.</p>
            @endif
        @endforeach

    </div>


</div>

    <a href="{{route('listado')}}">volver</a>
@endsection
