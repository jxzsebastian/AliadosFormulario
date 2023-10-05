@extends('layouts.sidebar')

@section('title', 'Home Page')

@section('content')

    <div class="max-w-full mx-auto  bg-white w-10/12  rounded-lg shadow-xl">
        <div class="p-4 border-b">
            <h2 class="text-2xl ">
                Informacion sobre:
            </h2>
        </div>

        <div class="md:grid md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-4 border-b">
            <p class="text-gray-600 font-medium">
                Ocupacion
            </p>
            <p> {{ $emprendedor->ocupacion_emprendedor }}</p>
        </div>

        <div class="md:grid md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-4 border-b">
            <p class="text-gray-600 font-medium">
                Informacion Ocupacion
            </p>
            @foreach ($emprendedor->emprendedor_aprendiz as $aprendiz_egresado)
                @if (
                    !empty($aprendiz_egresado->centro_formacion_actual_aprendiz) ||
                        !empty($aprendiz_egresado->programa_formacion_adscrito) ||
                        !empty($aprendiz_egresado->interes_emprendedor_es))
                    <span>
                        <p><strong>Centro de Formacion:</strong> {{ $aprendiz_egresado->centro_formacion_actual_aprendiz }}
                        </p>
                        <p><strong>Programa de Formacion Adscrito:</strong>
                            {{ $aprendiz_egresado->programa_formacion_adscrito }}</p>
                        <p><strong>Interes Emprendedor:</strong> {{ $aprendiz_egresado->interes_emprendedor_es }}</p>
                    </span>
                @else
                    <p>No se ha proporcionado información sobre la Ocupacion Aprendiz o Egresado.</p>
                @endif
            @endforeach

            @if (
                $emprendedor->ocupacion_emprendedor == "Estudiante Univestitario"
                )
                <span>
                    <p><strong>Estudiante Universitario</strong></p>
                </span>
            @endif

            @foreach ($emprendedor->emprendedor_empleado as $emprendedor_empleado)
                @if (!empty($emprendedor_empleado->empleado_idea_negocio))
                    <span>
                        <p><strong>Idea de Negocio:</strong> {{ $emprendedor_empleado->empleado_idea_negocio }}</p>
                    </span>
                @else
                    <p>No se ha proporcionado información sobre la idea de negocio.</p>
                @endif
            @endforeach


            @foreach ($emprendedor->emprendedor_investigador as $emprendedor_investigador)
                @if (
                    !empty($emprendedor_investigador->investigador_universidad_nombre) ||
                        !empty($emprendedor_investigador->investigador_universidad_grupo_investigacion) ||
                        !empty($emprendedor_investigador->investigador_idea_capacidad_producto))
                    <span>
                        <p><strong>Nombre de la Universidad:</strong>
                            {{ $emprendedor_investigador->investigador_universidad_nombre }}</p>
                        <p><strong>Nombre del Grupo de Investigación:</strong>
                            {{ $emprendedor_investigador->investigador_universidad_grupo_investigacion }}</p>
                        <p><strong>¿Tiene una idea con capacidad de convertirse en un producto o un prototipo? </strong>
                            {{ $emprendedor_investigador->investigador_idea_capacidad_producto }}</p>

                    </span>
                @else
                    <p>No se ha proporcionado información sobre la idea de negocio.</p>
                @endif
            @endforeach

            @foreach ($emprendedor->emprendedor_instructor as $emprendedor_instructor)
                @if (!empty($emprendedor_instructor->centro_formacion_actual_instructor) ||!empty($emprendedor_instructor->parte_sennova))
                    <span>
                        <p><strong>Centro de formación actual:</strong>
                            {{ $emprendedor_instructor->centro_formacion_actual_instructor }}</p>
                        <p><strong>¿Hace parte de SENNOVA?</strong> {{ $emprendedor_instructor->parte_sennova }}</p>
                        @if (
                            !empty($emprendedor_instructor->participacion_sennova) ||
                                !empty($emprendedor_instructor->sennova_semillero_investigacion))
                            <p><strong>Participacion en SENNOVA:</strong>
                                {{ $emprendedor_instructor->participacion_sennova }}</p>
                            <p><strong>El grupo cuenta con un Semillero de Investigación?</strong>
                                {{ $emprendedor_instructor->sennova_semillero_investigacion }}</p>
                            @if (
                                !empty($emprendedor_instructor->nombre_semillero) ||
                                    !empty($emprendedor_instructor->semillero_cantidad_integrantes) ||
                                    !empty($emprendedor_instructor->semillero_tema_trabajo))
                                <p><strong>Cantidad de Integrantes del Semillero</strong>
                                    {{ $emprendedor_instructor->semillero_cantidad_integrantes }}</p>
                                <p><strong>Temas de Trabajo</strong> {{ $emprendedor_instructor->semillero_tema_trabajo }}
                                </p>
                            @endif
                        @endif
                    </span>
                @else
                    <p>No se ha proporcionado información sobre la idea de negocio.</p>
                @endif
            @endforeach
        </div>
        
        @if ($emprendedor->tipo_usuario)
        <div class="md:grid md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-4 border-b">
            <p class="text-gray-600 font-medium">
                Tipo de Usuario
            </p>
            <strong> {{ $emprendedor->tipo_usuario }}</strong>
        </div>
        @endif


        @if ($emprendedor->necesidad_asesoria_sena)
        <div class="md:grid md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-4 border-b">
            <p class="text-gray-600 font-medium">
               Asesoria Necesitada:
            </p>
            <p> {{ $emprendedor->necesidad_asesoria_sena }}</p>
        </div>
        @endif

        <div>
            @if ($emprendedor->ideas->isNotEmpty())
                <div class="md:grid md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-4 border-b">
                    <p class="text-gray-600 font-medium">
                        Detalles de La idea Registrada
                    </p>

                    @foreach ($emprendedor->ideas as $idea)
                        @if (
                            !empty($idea->nombre_idea) &&
                                !empty($idea->descripcion_idea) &&
                                !empty($idea->modelo_negocio) &&
                                !empty($idea->producto_servicio) &&
                                !empty($idea->validacion_producto) &&
                                !empty($idea->idea_genera_ventas) &&
                                !empty($idea->idea_cantidad_empleados_genera))
                            <span>
                                <p><strong>Nombre de la Idea:</strong> {{ $idea->nombre_idea }}</p>
                                <p><strong>Descripción de la Idea:</strong> {{ $idea->descripcion_idea }}</p>
                                <p><strong>Modelo de Negocio:</strong> {{ $idea->modelo_negocio }}</p>
                                <p><strong>Producto o Servicio:</strong> {{ $idea->producto_servicio }}</p>
                                <p><strong>Validación del Producto:</strong> {{ $idea->validacion_producto }}</p>
                                <p><strong>¿La Idea Genera Ventas?</strong> {{ $idea->idea_genera_ventas }}</p>
                                @if($idea->ventas_promedio_mes)<p><strong>Ventas Promedio por Mes:</strong> {{ $idea->ventas_promedio_mes }}</p>@endif
                                <p><strong>Cantidad de Empleados que Genera:</strong>
                                    {{ $idea->idea_cantidad_empleados_genera }}</p>
                            </span>
                        @endif
                    @endforeach


                </div>
            @else
                <div class="md:grid md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-4 border-b">
                    <strong class="text-gray-600 font-medium">
                        Nombre de La idea Registrada
                    </strong>
                    <p>
                        No existe una idea dada.
                    </p>
                </div>
            @endif

            @if (!empty($emprendedor->emprendedor_nivel_idea))

                <div class="md:grid md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-4 border-b">
                    <p class="text-gray-600 font-medium">
                        Nivel de la Idea
                    </p>
                @foreach ($emprendedor->emprendedor_nivel_idea as $nivel_idea)
                    <p>
                        {{ $nivel_idea->emprendedores_nivel_idea }}
                    </p>
                @endforeach

                </div>
            @else
                <div class="md:grid md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-4 border-b">

                    <p class="text-gray-600">
                        Nivel de la Idea
                    </p>
                    <p>No se ha proporcionado información sobre el Nivel de Idea del Emprendedor.</p>
                </div>
            @endif



            @if ($emprendedor->empresas->isNotEmpty())
                <div class="md:grid md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-4 border-b">
                    <p class="text-gray-600 font-medium">
                        Detalles de la Empresa
                    </p>
                    @foreach ($emprendedor->ideas as $empresa)
                        @if (
                            !empty($empresa->tipo_empresa) ||
                                !empty($empresa->empresa_nit) ||
                                !empty($empresa->empresa_tamaño) ||
                                !empty($empresa->empresa_innovacion_desarrollo_producto) ||
                                !empty($empresa->empresa_proyecto_desarrollo_avances_requiere_prototipos) ||
                                !empty($empresa->nivel_proyecto_empresa))
                            <span>
                                <p><strong>Tipo de Empresa:</strong> {{ $idea->tipo_empresa }}</p>
                                <p><strong>Tipo de Persona Jurídica:</strong> {{ $idea->tipo_persona_juridica }}</p>
                                <p><strong>NIT de la Empresa:</strong> {{ $idea->empresa_nit }}</p>
                                <p><strong>Tamaño de la Empresa:</strong> {{ $idea->empresa_tamaño }}</p>
                                <p><strong>Innovación y Desarrollo de Producto:</strong>
                                    {{ $idea->empresa_innovacion_desarrollo_producto }}</p>
                                <p><strong>Avances y Prototipos:</strong>
                                    {{ $idea->empresa_proyecto_desarrollo_avances_requiere_prototipos }}</p>
                                <p><strong>Nivel del Proyecto en la Empresa:</strong> {{ $idea->nivel_proyecto_empresa }}
                                </p>
                            </span>
                        @endif
                    @endforeach
                </div>
            @else
                <div class="md:grid md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-4 border-b">
                    <p class="text-gray-600 font-medium">
                        Detalles de la Empresa
                    </p>
                    <p>
                        No se ha proporcionado detalles de alguna empresa.
                    </p>
                </div>
            @endif

            <div class="md:grid md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600 font-medium">
                    Servicio del SENA ingresado
                </p>
                <p>
                    {{ $emprendedor->programa_sena_ingreso }}
                </p>
            </div>

            <div class="md:grid md:grid-cols-2 hover:bg-gray-100 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600 font-medium">
                    Servicios accedidos en {{ $emprendedor->programa_sena_ingreso }}
                </p>

                @foreach ($emprendedor->programaSenaTecnoparque as $tecnoparque)
                    @if (
                        !empty($tecnoparque->tecnoparque_postulado) ||
                            !empty($tecnoparque->servicios_accedidos_tecnoparque) ||
                            !empty($tecnoparque->linea_tecnica_adscribe_tecnoparque) ||
                            !empty($emprendedor->condiciones_cumplidas_idea))
                        <span>
                            <p><strong>TecnoParque Postulado:</strong> {{ $tecnoparque->tecnoparque_postulado }}</p>
                            <p><strong>Servicios Accedidos en TecnoParque:</strong>
                                {{ $tecnoparque->servicios_accedidos_tecnoparque }}</p>
                            <p><strong>Línea Técnica a la que Adscribe TecnoParque:</strong>
                                {{ $tecnoparque->linea_tecnica_adscribe_tecnoparque }}</p>
                            <p><strong>Condiciones Cumplidas para la Idea:</strong>
                                {{ $tecnoparque->condiciones_cumplidas_idea }}</p>
                        </span>
                    @else
                        <p>No se ha proporcionado información sobre TecnoParque.</p>
                    @endif
                @endforeach

                @foreach ($emprendedor->programaSenaHubInnovacion as $hubinnovacion)
                    @if (
                        !empty($hubinnovacion->hub_innovacion_servicios) ||
                            !empty($hubinnovacion->linea_tecnologica_hub) ||
                            !empty($hubinnovacion->conocimientos_lineas_seleccionada) ||
                            !empty($hubinnovacion->necesidad_puntual_proyecto) ||
                            !empty($hubinnovacion->cuenta_equipo_trabajo))
                        <span>
                            <p><strong>Servicios del Hub de Innovación:</strong>
                                {{ $hubinnovacion->hub_innovacion_servicios }}</p>
                            <p><strong>Línea Tecnológica del Hub:</strong> {{ $hubinnovacion->linea_tecnologica_hub }}</p>
                            <p><strong>Conocimientos en Líneas Seleccionadas:</strong>
                                {{ $hubinnovacion->conocimientos_lineas_seleccionada }}</p>
                            <p><strong>Necesidad Puntual del Proyecto:</strong>
                                {{ $hubinnovacion->necesidad_puntual_proyecto }}</p>
                            <p><strong>Cuenta con Equipo de Trabajo:</strong> {{ $hubinnovacion->cuenta_equipo_trabajo }}
                            </p>
                        </span>
                    @else
                        <p>No se ha proporcionado información sobre el Hub de Innovación del Emprendedor.</p>
                    @endif
                @endforeach

                @foreach ($emprendedor->programaSenaEmprendimiento as $emprendimiento)
                    @if (!empty($emprendimiento->emprendimiento_servicios))
                        <span>
                            <p><strong>Servicios de Emprendimiento:</strong>
                                {{ $emprendimiento->emprendimiento_servicios }}</p>
                        </span>
                    @else
                        <p>No se ha proporcionado información sobre los Servicios de Emprendimiento del Emprendedor.</p>
                    @endif
                @endforeach

                @foreach ($emprendedor->programaSenaCentroFormacion as $centrosFormacion)
                    @if (!empty($centrosFormacion->centro_formacion_servicios))
                        <span>
                            <p><strong>Servicios del Centro de Formación:</strong>
                                {{ $centrosFormacion->centro_formacion_servicios }}</p>
                        </span>
                    @else
                        <p>No se ha proporcionado información sobre los Servicios del Centro de Formación del Emprendedor.
                        </p>
                    @endif
                @endforeach

            </div>

        </div>
    </div>
    <a href="{{route('listado')}}" type="button" class="my-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
          </svg>

        Volver
    </a>
@endsection
