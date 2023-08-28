@extends('layouts.sidebar')

@section('title', 'Home Page')

@section('content')

    <form method="POST" action="{{ route('formulario-store') }}">
        <div class="space-y-12">
            @csrf

            {{-- Informacion de Persona --}}
                <div class="border-b border-gray-900/10 pb-12">
                    @if ($errors->any())
                        <div class="bg-red-50 border-l-8 border-red-900 mb-2">
                            <div class="flex items-center">
                                <div class="p-2">
                                    <div class="flex items-center">
                                        <div class="ml-2">
                                            <svg class="h-8 w-8 text-red-900 mr-2 cursor-pointer"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                        <p class="px-6 py-4 text-red-900 font-semibold text-lg">Por favor Corriga los siguientes
                                            errores.</p>
                                    </div>
                                    <div class="px-16 mb-4">
                                        @foreach ($errors->all() as $error)
                                            <li class="text-md font-bold text-red-500 text-sm">{{ $error }}</li>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="w-full py-6">
                        <div class="flex">

                            <div class="w-1/4">
                                <div class="relative mb-2">
                                    <div class="absolute flex align-center items-center align-middle content-center"
                                        style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                                    </div>

                                    <div
                                        class="w-10 h-10 mx-auto  bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
                                        <span class="text-center  text-gray-600 w-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 w-full">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>

                                <div class="text-xs text-center md:text-base">Informacion Usuario </div>
                            </div>

                            <div class="w-1/4">
                                <div class="relative mb-2">
                                    <div class="absolute flex align-center items-center align-middle content-center"
                                        style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                                    </div>

                                    <div
                                        class="w-10 h-10 mx-auto  bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
                                        <span class="text-center  text-gray-600 w-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 w-full">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>

                                <div class="text-xs text-center md:text-base">STEP 2 </div>
                            </div>

                            <div class="w-1/4">
                                <div class="relative mb-2">
                                    <div class="absolute flex align-center items-center align-middle content-center"
                                        style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                                    </div>

                                    <div
                                        class="w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
                                        <span class="text-center text-gray-600 w-full">
                                            <svg class="w-full fill-current" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="24" height="24">
                                                <path class="heroicon-ui"
                                                    d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-2.3-8.7l1.3 1.29 3.3-3.3a1 1 0 0 1 1.4 1.42l-4 4a1 1 0 0 1-1.4 0l-2-2a1 1 0 0 1 1.4-1.42z" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>

                                <div class="text-xs text-center md:text-base">Finished</div>
                            </div>
                        </div>
                    </div>

                    <h2 class="text-base font-semibold leading-7 text-gray-900">Informacion </h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Ingresar los datos.</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Nombre del emprendedor(a)
                            </label>
                            <div class="mt-2">
                                <input type="text" name="nombre_emprendedor" id="first-name" autocomplete="given-name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="numero_contacto_emprendedor"
                                class="block text-sm font-medium leading-6 text-gray-900">Teléfono de contacto</label>
                            <div class="mt-2">
                                <input type="text" name="numero_contacto_emprendedor" id="numero_contacto_emprendedor"
                                    autocomplete="family-name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Correo Electrónico de Contacto</label>
                            <div class="mt-2">
                                <input id="email" name="correo_emprendedor" type="email" autocomplete="email"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="ciudad_municipio_emprendedor" class="block text-sm font-medium leading-6 text-gray-900">Ciudad o Municipio donde esta ubicado</label>
                            <div class="mt-2">
                                <input id="text" name="ciudad_municipio_emprendedor" type="" autocomplete="ciudad_municipio_emprendedor" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <!-- <div class="col-span-full">
                            <label for="nombre_emprendimiento"
                                class="block text-sm font-medium leading-6 text-gray-900">Nombre del Emprendimiento</label>
                            <div class="mt-2">
                                <input type="text" name="nombre_emprendimiento" id="nombre_emprendimiento"
                                    autocomplete="nombre_emprendimiento"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        -->
                        <div class="sm:col-span-1">
                            <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Tipo de
                                identificacion</label>
                            <div class="mt-2">
                                <select id="" name="tipo_identificacion_emprendedor" autocomplete="-name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option value="cedula_ciudadania">Cédula de Ciudadanía</option>
                                    <option value="registro_civil">Registro Civil de Nacimiento</option>
                                    <option value="tarjeta_identidad">Tarjeta de Identidad</option>
                                    <option value="tarjeta_extranjeria">Tarjeta de Extranjería</option>
                                    <option value="cedula_extranjeria">Cédula de Extranjería</option>
                                    <option value="pasaporte">Pasaporte</option>
                                </select>
                            </div>
                        </div>

                        <div class="sm:col-span-5">
                            <label for="identificacion_emprendedor"
                                class="block text-sm font-medium leading-6 text-gray-900">Numero de Identificacion</label>
                            <div class="mt-2">
                                <input type="text" name="identificacion_emprendedor" id="identificacion_emprendedor"
                                    autocomplete="address-level1"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                    </div>
                </div>
            {{-- Informacion de Persona --}}


            {{-- Informacion de Ocupacion y Escolaridad --}}
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Ocupacion y Escolaridad</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Escoja los niveles de educacion que ha cursado.</p>

                <div class="mt-10 space-y-10">
                    <fieldset>
                        <div class="mt-6 space-y-6">

                            <div class="relative flex gap-x-3">
                                <div class="flex h-6 items-center">
                                    <input id="ninguno" value="ninguno" name="niveles_educacion_emprendedor[]"
                                        type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="ninguno" class="font-medium text-gray-900">Ninguno</label>
                                </div>
                            </div>

                            <div class="relative flex gap-x-3">
                                <div class="flex h-6 items-center">
                                    <input id="bachiller" value="bachiller" name="niveles_educacion_emprendedor[]"
                                        type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="bachiller" class="font-medium text-gray-900">Bachiller</label>
                                </div>
                            </div>

                            <div class="relative flex gap-x-3">
                                <div class="flex h-6 items-center">
                                    <input id="tecnico" value="tecnico" name="niveles_educacion_emprendedor[]"
                                        type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="tecnico" class="font-medium text-gray-900">Técnico</label>
                                </div>
                            </div>

                            <div class="relative flex gap-x-3">
                                <div class="flex h-6 items-center">
                                    <input id="tecnologo" value="tecnologo" name="niveles_educacion_emprendedor[]"
                                        type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="tecnologo" class="font-medium text-gray-900">Tecnólogo</label>
                                </div>
                            </div>

                            <div class="relative flex gap-x-3">
                                <div class="flex h-6 items-center">
                                    <input id="profesional" value="profesional" name="niveles_educacion_emprendedor[]"
                                        type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="profesional" class="font-medium text-gray-900">Profesional</label>
                                </div>
                            </div>

                            <div class="relative flex gap-x-3">
                                <div class="flex h-6 items-center">
                                    <input id="especializacion_tecnica_profesional"
                                        value="especializacion_tecnica_profesional" name="niveles_educacion_emprendedor[]"
                                        type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="especializacion_tecnica_profesional"
                                        class="font-medium text-gray-900">Especialización Técnica Profesional</label>
                                </div>
                            </div>

                            <div class="relative flex gap-x-3">
                                <div class="flex h-6 items-center">
                                    <input id="especializacion_tecnologica" value="especializacion_tecnologica"
                                        name="niveles_educacion_emprendedor[]" type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="especializacion_tecnologica"
                                        class="font-medium text-gray-900">Especialización Tecnológica</label>
                                </div>
                            </div>

                            <div class="relative flex gap-x-3">
                                <div class="flex h-6 items-center">
                                    <input id="especializacion_profesional" value="especializaciones_profesionales"
                                        name="niveles_educacion_emprendedor[]" type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="especializacion_profesional"
                                        class="font-medium text-gray-900">Especializaciones Profesionales</label>
                                </div>
                            </div>

                            <div class="relative flex gap-x-3">
                                <div class="flex h-6 items-center">
                                    <input id="maestria" value="maestria" name="niveles_educacion_emprendedor[]"
                                        type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="maestria" class="font-medium text-gray-900">Maestría</label>
                                </div>
                            </div>

                            <div class="relative flex gap-x-3">
                                <div class="flex h-6 items-center">
                                    <input id="doctorado" value="doctorado" name="niveles_educacion_emprendedor[]"
                                        type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="doctorado" class="font-medium text-gray-900">Doctorado</label>
                                </div>
                            </div>

                            <div class="relative flex gap-x-3">
                                <div class="flex h-6 items-center">
                                    <input id="posdoctorado" value="posdoctorado" name="niveles_educacion_emprendedor[]"
                                        type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="posdoctorado" class="font-medium text-gray-900">Posdoctorado</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend class="text-sm font-semibold leading-6 text-gray-900">Ocupacion: </legend>
                        <p class="mt-1 text-sm leading-6 text-gray-600">¿Cuál es su ocupación?</p>
                        <div class="mt-6 space-y-6">
                            <div class="flex items-center gap-x-3">
                                <input id="empleado" value="empleado" name="ocupacion" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="empleado"
                                    class="block text-sm font-medium leading-6 text-gray-900">Empleado</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="tabajador_independiente" value="trabajador_independiente" name="ocupacion"
                                    type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="tabajador_independiente"
                                    class="block text-sm font-medium leading-6 text-gray-900">Trabajador
                                    Independiente</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="egresado_sena" value="egresado_sena" name="ocupacion" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="egresado_sena"
                                    class="block text-sm font-medium leading-6 text-gray-900">Egresado SENA</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="estudiante_universitario" value="estudiante_universitario" name="ocupacion"
                                    type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="estudiante_universitario"
                                    class="block text-sm font-medium leading-6 text-gray-900">Estudiante
                                    Universitario</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="instructor_sena" value="instructor_sena" name="ocupacion" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="instructor_sena"
                                    class="block text-sm font-medium leading-6 text-gray-900">Instructor Sena</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="aprendiz_sena" value="aprendiz_sena" name="ocupacion" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="aprendiz_sena"
                                    class="block text-sm font-medium leading-6 text-gray-900">Aprendiz Sena</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="investigador_universidad" value="investigador_universidad" name="ocupacion"
                                    type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="investigador_universidad"
                                    class="block text-sm font-medium leading-6 text-gray-900">Investigador
                                    Universidad</label>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <input id="otro_ocupacion" value="otro" name="ocupacion"
                                type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="otro_ocupacion" class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                                <input type="text" name="otra_ocupacion" id="input-otro-ocupacion" autocomplete=""
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>

                        </div>
                    </fieldset>
                </div>
            </div>
            {{-- Informacion de Ocupacion y Escolaridad --}}


            {{-- Formulario si es Aprendiz en formación y egresado--}}
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 space-y-10">

                    {{-- Opcion centro de formación es aprendiz o fue --}}
                    <fieldset>
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Aprendiz en formación y egresado</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">En que centro de formación es aprendiz actualmente o fue egresado</p>
                        <div class="mt-6 space-y-6">

                            <div class="flex items-center gap-x-3">
                                <input id="centro_recursos_naturales_renovables" value="centro_recursos_naturales_renovables" name="centro_formacion_actual_aprendiz" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="centro_recursos_naturales_renovables" class="block text-sm font-medium leading-6 text-gray-900">
                                    CENTRO DE LOS RECURSOS NATURALES RENOVABLES LA SALADA</label>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <input id="centro_diseño_manufactura_cuero" value="centro_diseño_manufactura_cuero" name="centro_formacion_actual_aprendiz" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="centro_diseño_manufactura_cuero" class="block text-sm font-medium leading-6 text-gray-900">
                                    CENTRO DE DISEÑO Y MANUFACTURA DEL CUERO</label>
                            </div>


                            <div class="flex items-center gap-x-3">
                                <input id="centro_comercio" value="centro_comercio" name="centro_formacion_actual_aprendiz" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="centro_comercio" class="block text-sm font-medium leading-6 text-gray-900">
                                    CENTRO DE COMERCIO</label>
                            </div>


                            <div class="flex items-center gap-x-3">
                                <input id="centro_formacion_diseño_confeccion_moda" value="centro_formacion_diseño_confeccion_moda" name="centro_formacion_actual_aprendiz" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="centro_formacion_diseño_confeccion_moda" class="block text-sm font-medium leading-6 text-gray-900">
                                    CENTRO DE FORMACIÓN EN DISEÑO, CONFECCIÓN Y MODA</label>
                            </div>


                            <div class="flex items-center gap-x-3">
                                <input id="centro_innovacion_agroindustria_aviacion" value="centro_innovacion_agroindustria_aviacion" name="centro_formacion_actual_aprendiz" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="centro_innovacion_agroindustria_aviacion" class="block text-sm font-medium leading-6 text-gray-900">
                                    CENTRO DE LA INNOVACIÓN, LA AGROINDUSTRIA Y LA AVIACIÓN​</label>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <input id="centro_servicios_salud" value="centro_servicios_salud" name="centro_formacion_actual_aprendiz" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="centro_servicios_salud" class="block text-sm font-medium leading-6 text-gray-900">
                                    CENTRO DE SERVICIOS DE SALUD</label>
                            </div>


                            <div class="flex items-center gap-x-3">
                                <input id="centro_servicios_gestion_empresarial" value="centro_servicios_gestion_empresarial" name="centro_formacion_actual_aprendiz" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="centro_servicios_gestion_empresarial" class="block text-sm font-medium leading-6 text-gray-900">
                                    CENTRO DE SERVICIOS Y GESTIÓN EMPRESARIAL</label>
                            </div>


                            <div class="flex items-center gap-x-3">
                                <input id="centro_tecnologia_manufactura_avanzada" value="centro_tecnologia_manufactura_avanzada" name="centro_formacion_actual_aprendiz" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="centro_tecnologia_manufactura_avanzada" class="block text-sm font-medium leading-6 text-gray-900">
                                    CENTRO DE TECNOLOGÍA DE LA MANUFACTURA AVANZADA</label>
                            </div>


                            <div class="flex items-center gap-x-3">
                                <input id="centro_desarrollo_habitat_construccion" value="centro_desarrollo_habitat_construccion" name="centro_formacion_actual_aprendiz" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="centro_desarrollo_habitat_construccion" class="block text-sm font-medium leading-6 text-gray-900">
                                    CENTRO PARA EL DESARROLLO DEL HÁBITAT Y LA CONSTRUCCIÓN</label>
                            </div>


                            <div class="flex items-center gap-x-3">
                                <input id="centro_tecnologico_mobiliario" value="centro_tecnologico_mobiliario" name="centro_formacion_actual_aprendiz" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="centro_tecnologico_mobiliario" class="block text-sm font-medium leading-6 text-gray-900">
                                    CENTRO TECNOLÓGICO DEL MOBILIARIO</label>
                            </div>


                            <div class="flex items-center gap-x-3">
                                <input id="complejo_tecnologico_agroindustrial" value="complejo_tecnologico_agroindustrial" name="centro_formacion_actual_aprendiz" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="complejo_tecnologico_agroindustrial" class="block text-sm font-medium leading-6 text-gray-900">
                                    COMPLEJO TECNOLÓGICO AGROINDUSTRIAL, PECUARIO Y TURÍSTICO</label>
                            </div>


                            <div class="flex items-center gap-x-3">
                                <input id="complejo_tecnoogico_minero_agroempresarial" value="complejo_tecnoogico_minero_agroempresarial" name="centro_formacion_actual_aprendiz" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="complejo_tecnoogico_minero_agroempresarial" class="block text-sm font-medium leading-6 text-gray-900">
                                    COMPLEJO TECNOLÓGICO MINERO AGROEMPRESARIAL</label>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <input id="centro_textil_gestion_industrial" value="centro_textil_gestion_industrial" name="centro_formacion_actual_aprendiz" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="centro_textil_gestion_industrial" class="block text-sm font-medium leading-6 text-gray-900">
                                    CENTRO TEXTIL Y DE GESTIÓN INDUSTRIAL​</label>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <input id="complejo_tecnologico_turistico_agroindustrial_occidente_antioqueño" value="complejo_tecnologico_turistico_agroindustrial_occidente_antioqueño" name="centro_formacion_actual_aprendiz" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="complejo_tecnologico_turistico_agroindustrial_occidente_antioqueño" class="block text-sm font-medium leading-6 text-gray-900">
                                    COMPLEJO TECNOLÓGICO TURÍSTICO Y AGROINDUSTRIAL DEL OCCIDENTE ANTIOQUEÑO​​</label>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <input id="centro_formacion_minero_ambiental_bagre" value="centro_formacion_minero_ambiental_bagre" name="centro_formacion_actual_aprendiz" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="centro_formacion_minero_ambiental_bagre" class="block text-sm font-medium leading-6 text-gray-900">
                                    CENTRO DE FORMACIÓN MINERO AMBIENTAL EL BAGRE​​</label>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <input id="complejo_tecnologico_gestion_agroempresarial" value="complejo_tecnologico_gestion_agroempresarial" name="centro_formacion_actual_aprendiz" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="complejo_tecnologico_gestion_agroempresarial" class="block text-sm font-medium leading-6 text-gray-900">
                                    COMPLEJO TECNOLÓGICO PARA LA GESTIÓN AGROEMPRESARIAL​​</label>
                            </div>



                        </div>
                    </fieldset>
                    {{-- Opcion centro de formación es aprendiz o fue --}}

                    {{-- Programa de formación está adscrito o estuvo --}}
                    <fieldset>
                        <h2 class="text-base font-semibold leading-7 text-gray-900">A que programa de formación está adscrito o estuvo adscrito</h2>
                        <div class="mt-6 space-y-6">
                            <div class="flex items-center gap-x-3">
                                <input type="text" name="programa_formacion_adscrito" id="" autocomplete=""
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </fieldset>
                    {{-- Programa de formación está adscrito o estuvo --}}

                    {{-- interés emprendedor se da por --}}
                    <fieldset class="mt-6 space-y-6">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Su interés emprendedor se da por..</h2>
                            <div class="flex items-center gap-x-3">
                                <input id="proyecto_aula" name="interes_emprendedor_es" type="radio" value="interes_proyecto_aula_participar_programas_emprendimiento"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="proyecto_aula" class="block text-sm font-medium leading-6 text-gray-900">
                                    Proyecto de aula que me lleva a querer participar en programas de emprendimiento</label>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <input id="idea_no_surgida_proyectos" value="interes_idea_no_surgida" name="interes_emprendedor_es" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="idea_no_surgida_proyectos" class="block text-sm font-medium leading-6 text-gray-900">
                                    Tengo una idea pero no surgió en los proyectos de clase</label>
                            </div>


                            <div class="flex items-center gap-x-3">
                                <input id="asistencia_charla_interesado" value="interes_asistencia_charla" name="interes_emprendedor_es" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="asistencia_charla_interesado" class="block text-sm font-medium leading-6 text-gray-900">
                                    Asistí a una charla y me interesé por los programas de emprendimiento pero aun no tengo idea</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="idea_aprendiz_formacion" value="interes_idea_aprendiz_formacion" name="interes_emprendedor_es" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="idea_aprendiz_formacion" class="block text-sm font-medium leading-6 text-gray-900">
                                    Fue una idea que surgió cuando era aprendiz en formación</label>
                            </div>
                    </fieldset>
                    {{-- interés emprendedor se da por --}}

                </div>
            </div>
            {{-- Formulario si es Aprendiz en formación y egresado--}}


            {{-- Formulario si es Empleado --}}
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 space-y-10">
                    <fieldset>
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Empleado </h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Su idea de negocio es...</p>
                        <div class="mt-6 space-y-6">
                            <div class="flex items-center gap-x-3">
                                <input id="proyecto_propio_idea" value="proyecto_propio_idea" name="empleado_idea_negocio" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="proyecto_propio_idea" class="block text-sm font-medium leading-6 text-gray-900">Un
                                    proyecto a nombre propio</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="proyecto_empresa_empleado" value="proyecto_empresa_empleado" name="empleado_idea_negocio" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="proyecto_empresa_empleado" class="block text-sm font-medium leading-6 text-gray-900">Una idea
                                    de proyecto de la empresa para la cual es empleado</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="otro_idea_negocio" value="otro" name="empleado_idea_negocio"
                                type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="otro_idea_negocio" class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                                <input type="text" name="otro_idea_negocio" autocomplete=""
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>

                        </div>
                    </fieldset>
                </div>
            </div>
            {{-- Formulario si es Empleado --}}

            {{-- Formulario si es Instructor Sena--}}
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 space-y-10">

                    {{-- Opcion centro de formación es aprendiz o fue --}}
                    <fieldset>
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Instructor Sena</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">A que centro pertenece</p>
                        <div class="mt-6 space-y-6">

                            <div class="flex items-center gap-x-3">
                                <input id="instructor_centro_recursos_naturales_renovables" value="instructor_centro_recursos_naturales_renovables" name="centro_formacion_actual_instructor" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="instructor_centro_recursos_naturales_renovables" class="block text-sm font-medium leading-6 text-gray-900">
                                    CENTRO DE LOS RECURSOS NATURALES RENOVABLES LA SALADA</label>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <input id="instructor_centro_diseño_manufactura_cuero" value="instructor_centro_diseño_manufactura_cuero" name="centro_formacion_actual_instructor" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="instructor_centro_diseño_manufactura_cuero" class="block text-sm font-medium leading-6 text-gray-900">
                                    CENTRO DE DISEÑO Y MANUFACTURA DEL CUERO</label>
                            </div>


                            <div class="flex items-center gap-x-3">
                                <input id="instructor_centro_comercio" value="instructor_centro_comercio" name="centro_formacion_actual_instructor" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="instructor_centro_comercio" class="block text-sm font-medium leading-6 text-gray-900">
                                    CENTRO DE COMERCIO</label>
                            </div>


                            <div class="flex items-center gap-x-3">
                                <input id="instructor_centro_formacion_diseño_confeccion_moda" value="instructor_centro_formacion_diseño_confeccion_moda" name="centro_formacion_actual_instructor" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="instructor_centro_formacion_diseño_confeccion_moda" class="block text-sm font-medium leading-6 text-gray-900">
                                    CENTRO DE FORMACIÓN EN DISEÑO, CONFECCIÓN Y MODA</label>
                            </div>


                            <div class="flex items-center gap-x-3">
                                <input id="instructor_centro_innovacion_agroindustria_aviacion" value="instructor_centro_innovacion_agroindustria_aviacion" name="centro_formacion_actual_instructor" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="instructor_centro_innovacion_agroindustria_aviacion" class="block text-sm font-medium leading-6 text-gray-900">
                                    CENTRO DE LA INNOVACIÓN, LA AGROINDUSTRIA Y LA AVIACIÓN​</label>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <input id="instructor_centro_servicios_salud" value="instructor_centro_servicios_salud" name="centro_formacion_actual_instructor" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="instructor_centro_servicios_salud" class="block text-sm font-medium leading-6 text-gray-900">
                                    CENTRO DE SERVICIOS DE SALUD</label>
                            </div>


                            <div class="flex items-center gap-x-3">
                                <input id="instructor_centro_servicios_gestion_empresarial" value="instructor_centro_servicios_gestion_empresarial" name="centro_formacion_actual_instructor" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="instructor_centro_servicios_gestion_empresarial" class="block text-sm font-medium leading-6 text-gray-900">
                                    CENTRO DE SERVICIOS Y GESTIÓN EMPRESARIAL</label>
                            </div>


                            <div class="flex items-center gap-x-3">
                                <input id="instructor_centro_tecnologia_manufactura_avanzada" value="instructor_centro_tecnologia_manufactura_avanzada" name="centro_formacion_actual_instructor" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="instructor_centro_tecnologia_manufactura_avanzada" class="block text-sm font-medium leading-6 text-gray-900">
                                    CENTRO DE TECNOLOGÍA DE LA MANUFACTURA AVANZADA</label>
                            </div>


                            <div class="flex items-center gap-x-3">
                                <input id="instructor_centro_desarrollo_habitat_construccion" value="instructor_centro_desarrollo_habitat_construccion" name="centro_formacion_actual_instructor" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="instructor_centro_desarrollo_habitat_construccion" class="block text-sm font-medium leading-6 text-gray-900">
                                    CENTRO PARA EL DESARROLLO DEL HÁBITAT Y LA CONSTRUCCIÓN</label>
                            </div>


                            <div class="flex items-center gap-x-3">
                                <input id="instructor_centro_tecnologico_mobiliario" value="instructor_centro_tecnologico_mobiliario" name="centro_formacion_actual_instructor" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="instructor_centro_tecnologico_mobiliario" class="block text-sm font-medium leading-6 text-gray-900">
                                    CENTRO TECNOLÓGICO DEL MOBILIARIO</label>
                            </div>


                            <div class="flex items-center gap-x-3">
                                <input id="instructor_complejo_tecnologico_agroindustrial" value="instructor_complejo_tecnologico_agroindustrial" name="centro_formacion_actual_instructor" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="instructor_complejo_tecnologico_agroindustrial" class="block text-sm font-medium leading-6 text-gray-900">
                                    COMPLEJO TECNOLÓGICO AGROINDUSTRIAL, PECUARIO Y TURÍSTICO</label>
                            </div>


                            <div class="flex items-center gap-x-3">
                                <input id="instructor_complejo_tecnoogico_minero_agroempresarial" value="instructor_complejo_tecnoogico_minero_agroempresarial" name="centro_formacion_actual_instructor" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="instructor_complejo_tecnoogico_minero_agroempresarial" class="block text-sm font-medium leading-6 text-gray-900">
                                    COMPLEJO TECNOLÓGICO MINERO AGROEMPRESARIAL</label>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <input id="instructor_centro_textil_gestion_industrial" value="instructor_centro_textil_gestion_industrial" name="centro_formacion_actual_instructor" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="instructor_centro_textil_gestion_industrial" class="block text-sm font-medium leading-6 text-gray-900">
                                    CENTRO TEXTIL Y DE GESTIÓN INDUSTRIAL​</label>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <input id="instructor_complejo_tecnologico_turistico_agroindustrial_occidente_antioqueño" name="centro_formacion_actual_instructor" value="instructor_complejo_tecnologico_turistico_agroindustrial_occidente_antioqueño" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="instructor_complejo_tecnologico_turistico_agroindustrial_occidente_antioqueño" class="block text-sm font-medium leading-6 text-gray-900">
                                    COMPLEJO TECNOLÓGICO TURÍSTICO Y AGROINDUSTRIAL DEL OCCIDENTE ANTIOQUEÑO​​</label>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <input id="instructor_centro_formacion_minero_ambiental_bagre" value="instructor_centro_formacion_minero_ambiental_bagre" name="centro_formacion_actual_instructor" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="instructor_centro_formacion_minero_ambiental_bagre" class="block text-sm font-medium leading-6 text-gray-900">
                                    CENTRO DE FORMACIÓN MINERO AMBIENTAL EL BAGRE​​</label>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <input id="instructor_complejo_tecnologico_gestion_agroempresarial" value="instructor_complejo_tecnologico_gestion_agroempresarial" name="centro_formacion_actual_instructor" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="instructor_complejo_tecnologico_gestion_agroempresarial" class="block text-sm font-medium leading-6 text-gray-900">
                                    COMPLEJO TECNOLÓGICO PARA LA GESTIÓN AGROEMPRESARIAL​​</label>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Hace parte de un grupo de investigación de SENNOVA </h2>
                        <div class="mt-6 space-y-6">
                            <div class="flex items-center gap-x-3">
                                <input id="sennova_si" value="sennova_si" name="parte_sennova" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="sennova_si"
                                    class="block text-sm font-medium leading-6 text-gray-900">Si</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="sennova_no" value="sennova_no" name="parte_sennova" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="sennova_no"
                                    class="block text-sm font-medium leading-6 text-gray-900">No</label>
                            </div>
                        </div>
                    </fieldset>

                </div>
            </div>
            {{-- Formulario si es Instructor Sena--}}

            {{-- Formulario si es Instructor Sena es de Sennova--}}
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 space-y-10">
                <fieldset>
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Investigadores Sennova</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Su participación en el grupo es</p>

                    <div class="mt-6 space-y-6">

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="sennova_coordinador" value="sennova_coordinador" name="participacion_sennova[]"
                                    type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="sennova_coordinador" class="font-medium text-gray-900">Coordinador</label>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="sennova_investigador" value="sennova_investigador" name="participacion_sennova[]"
                                    type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="sennova_investigador" class="font-medium text-gray-900">Investigador</label>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="sennova_lider_semillero" value="sennova_lider_semillero" name="participacion_sennova[]"
                                    type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="sennova_lider_semillero" class="font-medium text-gray-900">Líder de semillero
                                </label>
                            </div>
                        </div>

                    </div>
                </fieldset>

                    <fieldset>
                        <h2 class="text-base font-semibold leading-7 text-gray-900">El grupo cuenta con un Semillero de Investigación </h2>
                        <div class="mt-6 space-y-6">
                            <div class="flex items-center gap-x-3">
                                <input id="semillero_senova_si" value="semillero_senova_si" name="sennova_semillero_investigacion" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="semillero_senova_si"
                                    class="block text-sm font-medium leading-6 text-gray-900">Si</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="semillero_sennova_no" value="semillero_sennova_no" name="sennova_semillero_investigacion" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="semillero_sennova_no"
                                    class="block text-sm font-medium leading-6 text-gray-900">No</label>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>

            {{-- Formulario si es Instructor Sena es de Sennova--}}


            {{-- Formulario si es investigador de universidad --}}
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Investigadores Universidades </h2>
                <fieldset>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="investigador_universidad_nombre"
                                class="block text-sm font-medium leading-6 text-gray-900">Nombre de la Universidad en la que es investigador</label>
                            <div class="mt-2">
                                <input type="text" name="investigador_universidad_nombre" id="investigador_universidad_nombre"
                                    autocomplete="investigador_universidad_nombre"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="investigador_universidad_grupo_investigacion"
                                class="block text-sm font-medium leading-6 text-gray-900">Grupo de Investigación</label>
                            <div class="mt-2">
                                <input type="text" name="investigador_universidad_grupo_investigacion" id="investigador_universidad_grupo_investigacion"
                                    autocomplete="investigador_universidad_grupo_investigacion"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <div class="mt-6 space-y-6">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">En la actualidad tiene una idea con capacidad de convertirse en un producto o un prototipo </h2>

                        <div class="flex items-center gap-x-3">
                            <input id="investigador_idea_capacidad_producto_si" value="investigador_idea_capacidad_producto_si" name="investigador_idea_capacidad_producto" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="investigador_idea_capacidad_producto_si"
                                class="block text-sm font-medium leading-6 text-gray-900">Si</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="investigador_idea_capacidad_producto_no" value="investigador_idea_capacidad_producto_no" name="investigador_idea_capacidad_producto" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="investigador_idea_capacidad_producto_no"
                                class="block text-sm font-medium leading-6 text-gray-900">No</label>
                        </div>
                    </div>
                </fieldset>


            </div>
            {{-- Formulario si es investigador de universidad --}}

            {{-- Formulario Emprendedores --}}
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 space-y-10">
                    <fieldset>
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Emprendedores </h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">En que nivel clasificaría su idea de emprendimiento o idea de proyecto</p>
                        <div class="mt-6 space-y-6">
                            <div class="flex items-center gap-x-3">
                                <input id="no_idea_innovacion" value="no_idea_innovacion" name="emprendedores_nivel_idea" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="no_idea_innovacion" class="block text-sm font-medium leading-6 text-gray-900">Aún no tengo una idea de negocio o proyecto de innovación concreto
                                </label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="idea_sin_prototipo" value="idea_sin_prototipo" name="emprendedores_nivel_idea" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="idea_sin_prototipo" class="block text-sm font-medium leading-6 text-gray-900">Solo tengo una idea/proyecto pero nunca he realizado un prototipo</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="idea_prototipo_funcional" value="idea_prototipo_funcional" name="emprendedores_nivel_idea" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="idea_prototipo_funcional" class="block text-sm font-medium leading-6 text-gray-900">Tengo una idea de la cual ya he realizado un prototipo funcional pero sin ventas</label>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <input id="proyecto_empresa_empleadora" value="proyecto_empresa_empleadora" name="emprendedores_nivel_idea" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="proyecto_empresa_empleadora" class="block text-sm font-medium leading-6 text-gray-900">Es un proyecto para la empresa empleadora</label>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <input id="producto_elaborado_funcional" value="producto_elaborado_funcional" name="emprendedores_nivel_idea" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="producto_elaborado_funcional" class="block text-sm font-medium leading-6 text-gray-900">Tengo un producto elaborado  con el que he realizado ventas efectivas (unidad productiva )</label>
                            </div>

                        </div>
                    </fieldset>
                </div>
            </div>
            {{-- Formulario Emprendedores --}}

            {{-- Tipo de Usuario --}}
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 space-y-10">
                    <fieldset>
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Tipo de Usuario </h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">En la actualidad que opción te define mejor.</p>
                        <div class="mt-6 space-y-6">
                            <div class="flex items-center gap-x-3">
                                <input id="tipo_usuario_emprendedor" value="tipo_usuario_emprendedor" name="tipo_usuario" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="tipo_usuario_emprendedor"
                                    class="block text-sm font-medium leading-6 text-gray-900">Emprendedor</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="tipo_usuario_empresa" value="tipo_usuario_empresa"  name="tipo_usuario" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="tipo_usuario_empresa"
                                    class="block text-sm font-medium leading-6 text-gray-900">Empresa</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="otro_tipo_usuario" value="otro" name="tipo_usuario"
                                type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="otro_tipo_usuario" class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                                <input type="text" name="otro_tipo_usuario" autocomplete=""
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
            {{-- Tipo de Usuario --}}

            {{-- si forma parte de semillero - Semillero Informacion --}}
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Semillero </h2>
                    <fieldset>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="nombre_semillero"
                                class="block text-sm font-medium leading-6 text-gray-900">Nombre del semillero</label>
                            <div class="mt-2">
                                <input type="text" name="nombre_semillero" id="nombre_semillero"
                                    autocomplete="nombre_semillero"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="semillero_cantidad_integrantes"
                                class="block text-sm font-medium leading-6 text-gray-900">Cantidad de integrantes</label>
                            <div class="mt-2">
                                <input type="number" name="semillero_cantidad_integrantes" id="semillero_cantidad_integrantes"
                                    autocomplete="semillero_cantidad_integrantes"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="semillero_tema_trabajo"
                                class="block text-sm font-medium leading-6 text-gray-900">Temas de trabajo</label>
                            <div class="mt-2">
                                <input type="text" name="semillero_tema_trabajo" id="semillero_tema_trabajo"
                                    autocomplete="semillero_tema_trabajo"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                    </fieldset>


                </div>

            {{-- si forma parte de semillero - Semillero Informacion --}}


            {{-- Tipo de Empresa --}}
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-10 space-y-10">
                        <fieldset>
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Tipo de Empresa </h2>
                            <p class="mt-1 text-sm leading-6 text-gray-600">¿Cuál es su tipo de empresa?</p>
                            <div class="mt-6 space-y-6">
                                <div class="flex items-center gap-x-3">
                                    <input id="tipo_empresa_persona_natural" value="tipo_empresa_persona_natural" name="tipo_empresa" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="tipo_empresa_persona_natural"
                                        class="block text-sm font-medium leading-6 text-gray-900">Persona Natural</label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="tipo_empresa_juridica" value="tipo_empresa_persona_juridica" name="tipo_empresa" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="tipo_empresa_juridica" class="block text-sm font-medium leading-6 text-gray-900">Persona
                                        Juridica</label>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>

                {{--  SI PERSONA JURIDICA --}}
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-10 space-y-10">
                        <fieldset>
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Tipo de persona jurídica</h2>
                            <p class="mt-1 text-sm leading-6 text-gray-600">Seleccione su tipo de persona jurídica.</p>
                            <div class="mt-6 space-y-6">
                                <select id="" name="tipo_persona_juridica" autocomplete=""
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option value="sociedad_anonima">Sociedad Anónima</option>
                                    <option value="sociedad_acciones_simplificadas">Sociedad por acciones simplificadas SAS</option>
                                    <option value="sociedad_responsabilidad_limitada">Sociedad de responsabilidad limitada LTDA</option>
                                    <option value="sociedad_comandita_simple_acciones">Sociedad en comandita simple y por acciones</option>
                                    <option value="sociedad_colectiva">Sociedad Colectiva</option>
                                    <option value="sociedad_comerciales_beneficio_colectivo">Sociedades comerciales de beneficio e interés colectivo</option>
                                    <option value="empresa_unipersonal">Empresa unipersonal</option>
                                    <option value="entidad_sin_animo_lucro">Entidad sin ánimo de lucro ESAL</option>
                                    <option value="fundacion">Fundación</option>
                                </select>
                            </div>
                        </fieldset>
                    </div>
                </div>
                {{--  SI PERSONA JURIDICA --}}


                {{-- Datos de la empresa --}}
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-10 space-y-10">
                        <fieldset>
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Datos Empresa </h2>
                            <div class="mt-6 space-y-6">

                                <div class="col-span-full">
                                    <label for="empresa_nit" class="block text-sm font-medium leading-6 text-gray-900">Escriba el número del Número de Identificación Tributaria de la empresa</label>
                                    <div class="mt-2">
                                        <input type="text" name="empresa_nit" id="empresa_nit"
                                            autocomplete="empresa_nit"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>


                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Tamaño de la empresa</h2>
                            <p class="mt-1 text-sm leading-6 text-gray-600">Revise la tabla los valores de ventas por sector  para 2022 y responda en que tamaño de empresa se encuentra.</p>
                            <div class="mt-6 space-y-6">
                                <div class="flex items-center gap-x-3">
                                    <input id="microempresa" value="microempresa" name="empresa_tamaño" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="microempresa"
                                        class="block text-sm font-medium leading-6 text-gray-900">Microempresa</label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="empresa_pequeña" value="empresa_pequeña" name="empresa_tamaño" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="empresa_pequeña"
                                        class="block text-sm font-medium leading-6 text-gray-900">Pequeña Empresa</label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="empresa_mediana" value="empresa_mediana" name="empresa_tamaño" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="empresa_mediana"
                                        class="block text-sm font-medium leading-6 text-gray-900">Mediana empresa</label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="empresa_grande" value="empresa_grande" name="empresa_tamaño" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="empresa_grande"
                                        class="block text-sm font-medium leading-6 text-gray-900">Gran empresa</label>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset>
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Su empresa cuenta con una unidad de innovación o desarrollo de producto
                            </h2>
                            <div class="mt-6 space-y-6">
                                <div class="flex items-center gap-x-3">
                                    <input id="empresa_innovacion_desarrollo_producto_si" value="empresa_innovacion_desarrollo_producto_si" name="empresa_innovacion_desarrollo_producto" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="empresa_innovacion_desarrollo_producto_si"
                                        class="block text-sm font-medium leading-6 text-gray-900">Si</label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="empresa_innovacion_desarrollo_producto_no" value="empresa_innovacion_desarrollo_producto_no" name="empresa_innovacion_desarrollo_producto" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="empresa_innovacion_desarrollo_producto_no"
                                        class="block text-sm font-medium leading-6 text-gray-900">No</label>
                                </div>

                            </div>
                        </fieldset>

                        <fieldset>
                            <h2 class="text-base font-semibold leading-7 text-gray-900">En la actualidad cuenta con un proyecto de desarrollo de producto o servicios del cual ya tiene avances y requiere desarrollar prototipos
                            </h2>
                            <div class="mt-6 space-y-6">
                                <div class="flex items-center gap-x-3">
                                    <input id="empresa_proyecto_desarrollo_avances_requiere_prototipos_si" name="empresa_proyecto_desarrollo_avances_requiere_prototipos" value="empresa_proyecto_desarrollo_avances_requiere_prototipos_si" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="empresa_proyecto_desarrollo_avances_requiere_prototipos_si"
                                        class="block text-sm font-medium leading-6 text-gray-900">Si</label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="empresa_proyecto_desarrollo_avances_requiere_prototipos_no" name="empresa_proyecto_desarrollo_avances_requiere_prototipos" value="empresa_proyecto_desarrollo_avances_requiere_prototipos_no" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="empresa_proyecto_desarrollo_avances_requiere_prototipos_no"
                                        class="block text-sm font-medium leading-6 text-gray-900">No</label>
                                </div>

                            </div>
                        </fieldset>


                    </div>
                </div>
                {{-- Datos de la empresa --}}



            {{-- Tipo de Empresa --}}

            {{-- Nivel del Proyecto de Empresa --}}
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 space-y-10">
                    <fieldset>
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Nivel del Proyecto de Empresa</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">En que nivel clasificaría su proyecto.</p>
                        <div class="mt-6 space-y-6">
                            <div class="flex items-center gap-x-3">
                                <input id="proyecto_investigacion" value="proyecto_investigacion" name="nivel_proyecto_empresa" value="proyecto_nivel_investigacion" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="proyecto_investigacion"
                                    class="block text-sm font-medium leading-6 text-gray-900">Es una idea que está a nivel de articulo de investigación</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="proyecto_formulado_concepto" name="nivel_proyecto_empresa" value="proyecto_formulado_concepto" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="proyecto_formulado_concepto"
                                    class="block text-sm font-medium leading-6 text-gray-900">Es un proyecto de investigación del cual ya hemos formulado un concepto</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="proyecto_prototipos_basicos" value="proyecto_prototipos_basicos" name="nivel_proyecto_empresa" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="proyecto_prototipos_basicos"
                                    class="block text-sm font-medium leading-6 text-gray-900">Es un proyecto del cual ya se tienen prototipos básicos</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="proyecto_prototipos_funcionales" value="proyecto_prototipos_funcionales" name="nivel_proyecto_empresa" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="proyecto_prototipos_funcionales"
                                    class="block text-sm font-medium leading-6 text-gray-900">Es un proyecto del cual ya se tienen prototipos funcionales a escala real</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="producto_mercado_mejorable" value="producto_mercado_mejorable" name="nivel_proyecto_empresa" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="producto_mercado_mejorable"
                                    class="block text-sm font-medium leading-6 text-gray-900">Es un producto en el mercado pero susceptible de mejoras</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="otro_nivel_proyecto_empresa" value="otro" name="nivel_proyecto_empresa"
                                type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="otro_nivel_proyecto_empresa" class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                                <input type="text" name="otro_nivel_proyecto_empresa" id="input-otro-nivel_proyecto_empresa" autocomplete=""
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>

                        </div>
                    </fieldset>
                </div>
            </div>
            {{-- Nivel del Proyecto de Empresa --}}

            {{-- Elementos de la Idea/proyecto --}}
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 space-y-10">
                    <fieldset>
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Elementos de la Idea/proyecto </h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">En la actualidad que opción te define mejor.</p>
                        <div class="mt-6 space-y-6">

                            <div class="col-span-full">
                                <label for="nombre_emprendimiento" class="block text-sm font-medium leading-6 text-gray-900">Nombre de la Idea</label>
                                <div class="mt-2">
                                    <input type="text" name="nombre_idea" id="nombre_idea"
                                        autocomplete="nombre_idea"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>

                                <div class="sm:col-span-3 mt-4">
                                    <label for="descripcion_idea" class="block text-sm font-medium leading-6 text-gray-900">Describa brevemente en que consiste la idea</label>
                                    <div class="mt-2">
                                        <input id="descripcion_idea" name="descripcion_idea" autocomplete="descripcion_idea"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                            </div>

                        </div>


                        <div class="col-span-full mt-5">
                            <label for="" class="mb-4 block text-sm font-medium leading-6 text-gray-900">Califique en que nivel valora actualmente el siguiente elemento</label>


                            <ul class="items-center w-full text-sm font-medium text-black bg-white border border-gray-400 rounded-lg sm:flex">

                                <li class="w-full">
                                    <div class="flex items-center pl-3">
                                        <label for="" class="w-full py-3 ml-2 text-sm font-medium text-black">Modelo de Negocio</label>
                                    </div>
                                </li>

                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="modelo_negocio_no_desarrollado" type="radio" value="modelo_no_desarrollado" name="modelo_negocio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="modelo_negocio_no_desarrollado" class="w-full py-3 ml-2 text-sm font-medium text-black">No desarrollado	 </label>
                                    </div>
                                </li>

                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="modelo_negocio_desarrollado_conceptual" type="radio" value="modelo_desarrollado_nivel_conceptual" name="modelo_negocio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="modelo_negocio_desarrollado_conceptual" class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado a nivel conceptual (canvas de negocio)</label>
                                    </div>
                                </li>

                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="modelo_negocio_desarrollado" type="radio" value="modelo_desarrollado_probado_validacion" name="modelo_negocio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="modelo_negocio_desarrollado" class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado y probado con ejercicios de validación </label>
                                    </div>
                                </li>

                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="modelo_negocio_desarrollado_probando" type="radio" value="modelo_desarrollado_probado_efectiva" name="modelo_negocio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="modelo_negocio_desarrollado_probando" class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado y se esta probando en la práctica con ventas efectivas </label>
                                    </div>
                                </li>
                            </ul>

                        </div>

                        <div class="col-span-full mt-5">
                            <label for="" class="mb-4 block text-sm font-medium leading-6 text-gray-900">Califique en que nivel valora actualmente el siguiente elemento</label>


                            <ul class="items-center w-full text-sm font-medium text-black bg-white border border-gray-400 rounded-lg sm:flex">

                                <li class="w-full">
                                    <div class="flex items-center pl-3">
                                        <label for="" class="w-full py-2 ml-2 text-sm font-medium text-black">Producto o Servicio </label>
                                    </div>
                                </li>

                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="producto_servicio_no_desarrollado" type="radio" value="producto_servicio_no_desarrollado" name="producto_servicio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="producto_servicio_no_desarrollado" class="w-full py-3 ml-2 text-sm font-medium text-black">No desarrollado	 </label>
                                    </div>
                                </li>

                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="producto_servicio_desarrollado_conceptual" type="radio" value="producto_servicio_desarrollado_conceptual" name="producto_servicio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="producto_servicio_desarrollado_conceptual" class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado a nivel de prototipo conceptual (gráficos, mockup)</label>
                                    </div>
                                </li>

                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="producto_servicio_desarrollado" type="radio" value="producto_servicio_desarrollado_validado_usuario" name="producto_servicio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="producto_servicio_desarrollado" class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado a nivel de modelo de comprobación validado con usuario</label>
                                    </div>
                                </li>

                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="producto_servicio_desarrollado_prototipo_funcional" type="radio" value="producto_servicio_desarrollado_prototipo_funcional" name="producto_servicio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="producto_servicio_desarrollado_prototipo_funcional" class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado a nivel de prototipo funcional (a escala) </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="producto_servicio_desarrollado_producto_minimo_viable" type="radio" value="producto_servicio_desarrollado_producto_minimo_viable" name="producto_servicio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="producto_servicio_desarrollado_producto_minimo_viable" class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado a nivel de producto mínimo viable
                                        </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="producto_servicio_desarrollado_desplegado" type="radio" value="" name="producto_servicio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="producto_servicio_desarrollado_desplegado" class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado y desplegado actualmente con ventas en el mercado Producto o Servicio </label>
                                    </div>
                                </li>
                            </ul>

                        </div>


                        <div class="col-span-full mt-5">
                            <label for="" class="mb-4 block text-sm font-medium leading-6 text-gray-900">Califique en que nivel valora actualmente el siguiente elemento</label>

                            <ul class="items-center w-full text-sm font-medium text-black bg-white border border-gray-400 rounded-lg sm:flex">

                                <li class="w-full">
                                    <div class="flex items-center pl-3">
                                        <label for="" class="w-full py-2 ml-2 text-sm font-medium text-black">Nivel de validación del producto o servicio</label>
                                    </div>
                                </li>

                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="no_validacion_producto" type="checkbox" value="no_validacion_producto" name="validacion_producto[]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="no_validacion_producto" class="w-full py-3 ml-2 text-sm font-medium text-black">No he validado con externos	 </label>
                                    </div>
                                </li>

                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="validacion_producto_tecnicas" type="checkbox" value="validacion_producto_tecnicas" name="validacion_producto[]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="validacion_producto_tecnicas" class="w-full py-3 ml-2 text-sm font-medium text-black">He realizado validaciones técnicas con usuarios</label>
                                    </div>
                                </li>

                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="validacion_producto_ejercicios_entrevistas" type="checkbox" value="validacion_producto_ejercicios_entrevistas" name="validacion_producto[]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="validacion_producto_ejercicios_entrevistas" class="w-full py-3 ml-2 text-sm font-medium text-black">He realizado ejercicios de entrevistas, focus group o similares documentados</label>
                                    </div>
                                </li>

                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="validacion_producto_compra_firmadas" type="checkbox" value="validacion_producto_compra_firmadas" name="validacion_producto[]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="validacion_producto_compra_firmadas" class="w-full py-3 ml-2 text-sm font-medium text-black">Tengo intenciones de compra firmadas </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="validacion_producto_estudios_mercado" type="checkbox" value="validacion_producto_estudios_mercado" name="validacion_producto[]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="validacion_producto_estudios_mercado" class="w-full py-3 ml-2 text-sm font-medium text-black">He desarrollado estudios de mercado </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="validacion_producto_ventas_efectivas" type="checkbox" value="validacion_producto_ventas_efectivas" name="validacion_producto[]" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="validacion_producto_ventas_efectivas" class="w-full py-3 ml-2 text-sm font-medium text-black">He desarrollado ventas efectivas
                                        </label>
                                    </div>
                                </li>
                            </ul>

                        </div>


                        <div class="col-span-full mt-5">
                            <label for="idea_genera_ventas" class="block text-sm font-medium leading-6 text-gray-900">Su idea de negocios o proyecto de innovación actualmente genera ventas permanentes</label>
                            <div class="mt-6 space-y-6">

                                <div class="flex items-center gap-x-3">
                                    <input id="idea_genera_ventas_permanentes_si" value="idea_genera_ventas_permanentes_si" name="idea_genera_ventas" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="idea_genera_ventas_permanentes_si"
                                        class="block text-sm font-medium leading-6 text-gray-900">Si</label>
                                </div>

                                <div class="flex items-center gap-x-3">
                                    <input id="idea_genera_ventas_permanentes_no" value="idea_genera_ventas_permanentes_no" name="idea_genera_ventas" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="idea_genera_ventas_permanentes_no"
                                        class="block text-sm font-medium leading-6 text-gray-900">No</label>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                </div>
            </div>
            {{-- Elementos de la Idea/proyecto --}}


            {{-- Necesidades de Usuarios sin Proyecto concreto --}}
            <div class="border-b border-gray-900/10 pb-12">
                <fieldset>
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Necesidades de Usuarios sin Proyecto concreto
                        </h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">¿Cuál es la necesidad de asesoría por la cuál se acerca a los programas del SENA?</p>

                            <div class="mt-6 space-y-6">
                                <div class="flex items-center gap-x-3">
                                    <input id="asesoria_networking" name="necesidad_asesoria_sena[]" value="asesoria_networking" type="checkbox"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="asesoria_networking"
                                        class="block text-sm font-medium leading-6 text-gray-900">Networking (generar redes)</label>
                                </div>

                                <div class="flex items-center gap-x-3">
                                    <input id="asesoria_mejorar_modelo_negocio" value="asesoria_mejorar_modelo_negocio" name="necesidad_asesoria_sena[]" type="checkbox"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="asesoria_mejorar_modelo_negocio"
                                        class="block text-sm font-medium leading-6 text-gray-900">Hacer cambios o mejoras al modelo de negocio
                                    </label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="asesoria_desarrollo_nuevos_productos" value="asesoria_desarrollo_nuevos_productos" name="necesidad_asesoria_sena[]" type="checkbox"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="asesoria_desarrollo_nuevos_productos"
                                        class="block text-sm font-medium leading-6 text-gray-900">Desarrollo de nuevos productos o servicios
                                    </label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="asesoria_fuentes_financiacion_convocatorias" value="asesoria_fuentes_financiacion_convocatorias" name="necesidad_asesoria_sena[]" type="checkbox"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="asesoria_fuentes_financiacion_convocatorias"
                                        class="block text-sm font-medium leading-6 text-gray-900">Conocer posibles fuentes de financiación o convocatorias del sistema CT+i
                                    </label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="asesoia_fortalecer_empresa" value="asesoia_fortalecer_empresa" name="necesidad_asesoria_sena[]" type="checkbox"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="asesoia_fortalecer_empresa"
                                        class="block text-sm font-medium leading-6 text-gray-900">Fortalecimiento de mi empresa en temas empresariales (Gerenciales, financieros, de mercados, etc)
                                    </label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="asesoria_aprender_tecnologias" value="asesoria_aprender_tecnologias" name="necesidad_asesoria_sena[]" type="checkbox"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="asesoria_aprender_tecnologias"
                                        class="block text-sm font-medium leading-6 text-gray-900">Conocer o aprender sobre tecnologías 4.0
                                    </label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="asesoria_formacion_temas_especializados" value="asesoria_formacion_temas_especializados" name="necesidad_asesoria_sena[]" type="checkbox"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="asesoria_formacion_temas_especializados"
                                        class="block text-sm font-medium leading-6 text-gray-900">Formación en temas especializados
                                    </label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="asesoria_oferta_sena" value="asesoria_oferta_sena" name="necesidad_asesoria_sena[]" type="checkbox"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="asesoria_oferta_sena"
                                        class="block text-sm font-medium leading-6 text-gray-900">Conocer la oferta SENA
                                    </label>
                                </div>
                        </div>
                </fieldset>
            </div>
            {{-- Necesidades de Usuarios sin Proyecto concreto --}}



            {{-- Ventas Pomedio Mes --}}
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 space-y-10">
                    <fieldset>
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Ingresos o ventas promedio mes</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Ingresar el promedio de ventas que tiene por mes.</p>
                        <div class="mt-6 space-y-6">
                            <div class="flex items-center gap-x-3">
                                <input type="text" name="ventas_promedio_mes" id="" autocomplete=""
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
            {{-- Ventas Pomedio Mes --}}


            {{-- Generacion de Empleos --}}
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 space-y-10">
                    <fieldset>
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Su idea que Cantidad de empleos genera actualmente</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Ingresar la cantidad de empleos que genera.</p>
                        <div class="mt-6 space-y-6">
                            <div class="flex items-center gap-x-3">
                                <input type="text" name="idea_cantidad_empleados_genera" id="" autocomplete=""
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
            {{-- Generacion de Empleos --}}


            {{-- Programa o servicio por el que ingresa --}}
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-10 space-y-10">
                        <fieldset>
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Programa o servicio por el que ingresa</h2>
                            <p class="mt-1 text-sm leading-6 text-gray-600">A Cuál de las unidades SENA ingresó como proyecto.</p>
                            <div class="mt-6 space-y-6">
                                <div class="flex items-center">
                                    <select id="" name="programa_sena_ingreso" autocomplete=""
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <option value="centros_formacion">Centros de Formacion</option>
                                        <option value="emprendimiento">Emprendimiento</option>
                                        <option value="hub_innovacion">Hub de Innovacion</option>
                                        <option value="tecnoparque">Tecnoparque</option>
                                        <option value="extensionismo">Extensionismo</option>

                                    </select>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>

                {{-- Seleccion: Emprendimiento Servicios --}}
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-10 space-y-10">

                        <fieldset>
                            <legend class="text-sm font-semibold leading-6 text-gray-900">Emprendimiento Servicios
                            </legend>
                            <p class="mt-1 text-sm leading-6 text-gray-600">Indique a que servicios accedió el usuario inicialmente en el Centro de Desarrollo Empresarial o Programa de Emprendimiento
                            </p>
                            <div class="mt-6 space-y-6">
                                <div class="flex items-center gap-x-3">
                                    <input id="fomento" name="emprendimiento_servicios" value="fomento" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="fomento"
                                        class="block text-sm font-medium leading-6 text-gray-900">Fomento</label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="creacion_empresa_fondo_emprender" value="creacion_empresa_fondo_emprender" name="emprendimiento_servicios"
                                        type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="creacion_empresa_fondo_emprender"
                                        class="block text-sm font-medium leading-6 text-gray-900">Creación de empresa Fondo Emprender
                                    </label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="creacion_empresa_otras_fuentes" value="creacion_empresa_otras_fuentes" name="emprendimiento_servicios" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="creacion_empresa_otras_fuentes"
                                        class="block text-sm font-medium leading-6 text-gray-900">Creación de empresa otras fuentes de financiación
                                    </label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="fortalecimiento_empresarial" value="fortalecimiento_empresarial" name="emprendimiento_servicios"
                                        type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="fortalecimiento_empresarial"
                                        class="block text-sm font-medium leading-6 text-gray-900">Fortalecimiento empresarial
                                    </label>
                                </div>
                        </div>
                        </fieldset>
                    </div>
                </div>
                {{-- Seleccion: Emprendimiento Servicios --}}

                {{-- Seleccion: Centro de Formación Servicios--}}
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-10 space-y-10">

                        <fieldset>
                            <legend class="text-sm font-semibold leading-6 text-gray-900">Centro de Formación Servicios
                            </legend>
                            <p class="mt-1 text-sm leading-6 text-gray-600">Indique a que servicios accedió el usuario inicialmente en el centro de formación
                            </p>
                            <div class="mt-6 space-y-6">
                                <div class="flex items-center gap-x-3">
                                    <input id="agencia_publica_empleo" name="centro_formacion_servicios" value="agencia_publica_empleo" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="agencia_publica_empleo"
                                        class="block text-sm font-medium leading-6 text-gray-900">Agencia Publica de Empleo</label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="certificado_competencias_laborales" value="certificado_competencias_laborales" name="centro_formacion_servicios"
                                        type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="certificado_competencias_laborales"
                                        class="block text-sm font-medium leading-6 text-gray-900">Certificación de competencias laborales
                                    </label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="formacion" value="formacion" name="centro_formacion_servicios" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="formacion"
                                        class="block text-sm font-medium leading-6 text-gray-900">Formación
                                    </label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="investigacion" value="investigacion" name="centro_formacion_servicios"
                                        type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="investigacion"
                                        class="block text-sm font-medium leading-6 text-gray-900">Investigación
                                    </label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="servicios_tecnologicos" value="servicios_tecnologicos" name="centro_formacion_servicios"
                                        type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="servicios_tecnologicos"
                                        class="block text-sm font-medium leading-6 text-gray-900">Servicios Tecnológicos
                                    </label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="otro_centro_formacion_servicios" value="otro" name="centro_formacion_servicios"
                                    type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="otro_centro_formacion_servicios" class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                                    <input type="text" name="otro_centro_formacion_servicios" id="input-otro-centro_formacion_servicios" autocomplete=""
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                        </div>
                        </fieldset>
                    </div>
                </div>
                {{-- Seleccion: Centro de Formación Servicios--}}


                {{-- Seleccion: Hub de Innovación Servicios--}}
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Hub de Innovación Servicios</h2>
                    <div class="mt-10 space-y-10">

                        {{-- Indicar que servicios solicita en el Hub de Innovación --}}
                        <fieldset>
                            <legend class="text-sm font-semibold leading-6 text-gray-900">Hub de Innovación Servicios

                            </legend>
                            <p class="mt-1 text-sm leading-6 text-gray-600">Indique a que servicios solicita acceso  en el Hub de Innovación</p>
                                <div class="mt-6 space-y-6">
                                    <div class="flex items-center gap-x-3">
                                        <input id="fortalecimiento_capacidades" name="hub_innovacion_servicios" value="fortalecimiento_capacidades" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="fortalecimiento_capacidades"
                                            class="block text-sm font-medium leading-6 text-gray-900">Fortalecimiento de Capacidades</label>
                                    </div>
                                    <div class="flex items-center gap-x-3">
                                        <input id="desarrollo_soluciones" value="desarrollo_soluciones" name="hub_innovacion_servicios"
                                            type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="desarrollo_soluciones"
                                            class="block text-sm font-medium leading-6 text-gray-900">Desarrollo de Soluciones
                                        </label>
                                    </div>
                                    <div class="flex items-center gap-x-3">
                                        <input id="relacionamiento" value="relacionamiento" name="hub_innovacion_servicios" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="relacionamiento"
                                            class="block text-sm font-medium leading-6 text-gray-900">Relacionamiento
                                        </label>
                                    </div>
                                    <div class="flex items-center gap-x-3">
                                        <input id="otro_hub_innovacion_servicios" value="otro" name="hub_innovacion_servicios"
                                        type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="otro_hub_innovacion_servicios" class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                                        <input type="text" name="otro_hub_innovacion_servicios" id="input-otro-hub_innovacion_servicios" autocomplete=""
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                              </div>
                        </fieldset>
                        {{-- Indicar que servicios solicita en el Hub de Innovación --}}

                        {{-- Indicar que línea tecnológicas esta suscrita la idea --}}
                        <fieldset>
                            <legend class="text-sm font-semibold leading-6 text-gray-900">En que línea o líneas tecnológicas esta suscrita la idea</legend>
                                <div class="mt-6 space-y-6">

                                    <div class="flex items-center gap-x-3">
                                        <input id="linea_iot" name="linea_tecnologica_hub[]" value="linea_iot" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="linea_iot"
                                            class="block text-sm font-medium leading-6 text-gray-900">IoT (internet de las cosas)</label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="linea_diseño_prototipado" value="linea_diseño_prototipado" name="linea_tecnologica_hub[]"
                                            type="checkbox" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="linea_diseño_prototipado"
                                            class="block text-sm font-medium leading-6 text-gray-900">Diseño & Prototipado

                                        </label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="linea_desarrollo_software_web" value="linea_desarrollo_software_web" name="linea_tecnologica_hub[]" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="linea_desarrollo_software_web"
                                            class="block text-sm font-medium leading-6 text-gray-900">Desarrollo de software (Web-App)
                                        </label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="linea_realidades_extendidas" value="linea_realidades_extendidas" name="linea_tecnologica_hub[]" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="linea_realidades_extendidas"
                                            class="block text-sm font-medium leading-6 text-gray-900">Realidades Extendidas (Realidad Virtual/Realidad Aumentada)

                                        </label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="linea_inteligencia_artifical" value="linea_inteligencia_artifical" name="linea_tecnologica_hub[]" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="linea_inteligencia_artifical"
                                            class="block text-sm font-medium leading-6 text-gray-900">Inteligencia Artificial (Machine Learning/Deep Learning)

                                        </label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="linea_marketing_digital" value="linea_marketing_digital" name="linea_tecnologica_hub[]" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="linea_marketing_digital"
                                            class="block text-sm font-medium leading-6 text-gray-900">Marketing digital (fortalecimiento de Marca)

                                        </label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="linea_big_data" value="linea_big_data" name="linea_tecnologica_hub[]" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="linea_big_data"
                                            class="block text-sm font-medium leading-6 text-gray-900">Big Data

                                        </label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="linea_manufactura" value="linea_manufactura" name="linea_tecnologica_hub[]" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="linea_manufactura"
                                            class="block text-sm font-medium leading-6 text-gray-900">Manufactura Aditiva
                                        </label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="linea_nula" value="linea_nula" name="linea_tecnologica_hub[]" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="linea_nula"
                                            class="block text-sm font-medium leading-6 text-gray-900">Ninguna Tecnología 4.0
                                        </label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="otro_linea_tecnologica_hub" value="otro" name="linea_tecnologica_hub"
                                        type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="otro_linea_tecnologica_hub" class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                                        <input type="text" name="otro_linea_tecnologica_hub" id="input-otro-linea_tecnologica_hub" autocomplete=""
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                            </div>
                        </fieldset>
                        {{-- Indicar que línea tecnológicas esta suscrita la idea --}}

                        {{-- Indicar conocimientos tecnicos en la linea seleccionada --}}
                        <fieldset>
                            <legend class="text-sm font-semibold leading-6 text-gray-900">Cuentas con conocimientos técnicos en las líneas seleccionadas (punto anterior)
                            </legend>
                                <div class="mt-6 space-y-6">
                                    <div class="flex items-center gap-x-3">
                                        <input id="conocimientos_lineas_seleccionada_no" name="conocimientos_lineas_seleccionada" value="" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="conocimientos_lineas_seleccionada_no"
                                            class="block text-sm font-medium leading-6 text-gray-900">No</label>
                                    </div>
                                    <div class="flex items-center gap-x-3">
                                        <input id="conocimientos_lineas_seleccionada_basico" value="" name="conocimientos_lineas_seleccionada"
                                            type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="conocimientos_lineas_seleccionada_basico"
                                            class="block text-sm font-medium leading-6 text-gray-900">Basico
                                        </label>
                                    </div>
                                    <div class="flex items-center gap-x-3">
                                        <input id="conocimientos_lineas_seleccionada_medio" value="" name="conocimientos_lineas_seleccionada" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="conocimientos_lineas_seleccionada_medio"
                                            class="block text-sm font-medium leading-6 text-gray-900">Medio
                                        </label>
                                    </div>
                                    <div class="flex items-center gap-x-3">
                                        <input id="conocimientos_lineas_seleccionada_avanzado" value="" name="conocimientos_lineas_seleccionada" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="conocimientos_lineas_seleccionada_avanzado"
                                            class="block text-sm font-medium leading-6 text-gray-900">Avanzados
                                        </label>
                                    </div>
                                    <div class="flex items-center gap-x-3">
                                        <label for=""
                                            class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                                        <input type="text" name="conocimientos_lineas_seleccionada" id="" autocomplete=""
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                              </div>
                        </fieldset>
                        {{-- Indicar conocimientos tecnicos en la linea seleccionada --}}

                        {{-- Indicar Puntualmente cual es tu necesidad de apoyo para el proyecto --}}
                        <fieldset>
                                    <h2 class="text-base font-semibold leading-7 text-gray-900">Puntualmente cual es tu necesidad de apoyo para el proyecto
                                    </h2>
                                    <div class="mt-6 space-y-6">
                                        <div class="flex items-center gap-x-3">
                                            <input type="text" name="necesidad_puntual_proyecto" id="necesidad_puntual_proyecto" autocomplete=""
                                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        </div>
                                    </div>
                        </fieldset>
                        {{-- Indicar Puntualmente cual es tu necesidad de apoyo para el proyecto --}}

                        {{-- Indicar si se cuenta con equipo de trabajo --}}
                        <fieldset>
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Cuentas con equipo de trabajo (otras personas vinculadas con el desarrollo de la idea)
                            </h2>
                            <div class="mt-6 space-y-6">
                                <div class="flex items-center gap-x-3">
                                    <input type="text" name="cuenta_equipo_trabajo" id="cuenta_equipo_trabajo" autocomplete="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </fieldset>
                        {{-- Indicar si se cuenta con equipo de trabajo --}}



                    </div>
                </div>
                {{-- Seleccion: Hub de Innovación Servicios--}}

                {{-- Seleccion:Tecnoparque --}}
                <div class="border-b border-gray-900/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">Tecnoparque Servicios</h2>
                    <div class="mt-10 space-y-10">

                        {{-- Tecnoparque Postulado --}}
                        <fieldset>
                            <legend class="text-sm font-semibold leading-6 text-gray-900">A que Tecnoparque postuló su idea inicialmente
                            </legend>
                                <div class="mt-6 space-y-6">
                                    <div class="flex items-center gap-x-3">
                                        <input id="tecnoparque_medellin" name="tecnoparque_postulado" value="tecnoparque_medellin" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="tecnoparque_medellin"
                                            class="block text-sm font-medium leading-6 text-gray-900">Tecnoparque Nodo Medellín</label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="tecnoparque_rionegro" value="tecnoparque_rionegro" name="tecnoparque_postulado" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="tecnoparque_rionegro"
                                            class="block text-sm font-medium leading-6 text-gray-900">Tecnoparque Nodo Rionegro
                                        </label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="otro_tecnoparque_postulado" value="otro" name="tecnoparque_postulado"
                                        type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="otro_tecnoparque_postulado" class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                                        <input type="text" name="otro_tecnoparque_postulado" id="input-otro-tecnoparque_postulado" autocomplete=""
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                              </div>
                        </fieldset>
                        {{-- Tecnoparque Postulado --}}

                        {{-- Servicios accedidos inicialmente en tecnoparque --}}
                        <fieldset>
                            <legend class="text-sm font-semibold leading-6 text-gray-900">Indique a que servicios accedió el usuario inicialmente en el Tecnoparque
                            </legend>
                                <div class="mt-6 space-y-6">
                                    <div class="flex items-center gap-x-3">
                                        <input id="fortalecimiento_servicio_tecnoparque" name="servicios_accedidos_tecnoparque" value="fortalecimiento_servicio_tecnoparque" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="fortalecimiento_servicio_tecnoparque"
                                            class="block text-sm font-medium leading-6 text-gray-900">Fortalecimiento</label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="desarrollo_tecnologico_servicio_tecnoparque" value="desarrollo_tecnologico_servicio_tecnoparque" name="servicios_accedidos_tecnoparque" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="desarrollo_tecnologico_servicio_tecnoparque"
                                            class="block text-sm font-medium leading-6 text-gray-900">Proyecto para desarrollo tecnológico
                                        </label>
                                    </div>
                                    <div class="flex items-center gap-x-3">
                                        <input id="proyecto_articulacion_servicio" value="proyecto_articulacion_servicio" name="servicios_accedidos_tecnoparque" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="proyecto_articulacion_servicio"
                                            class="block text-sm font-medium leading-6 text-gray-900">Proyecto en proceso de articulación
                                        </label>
                                    </div>
                              </div>
                        </fieldset>
                        {{-- Servicios accedidos inicialmente en tecnoparque --}}

                        {{-- línea técnica o líneas técnicas se adscribe la idea --}}
                        <fieldset>
                            <legend class="text-sm font-semibold leading-6 text-gray-900">A que línea técnica o líneas técnicas se adscribe la idea
                            </legend>
                                <div class="mt-6 space-y-6">
                                    <div class="flex items-center gap-x-3">
                                        <input id="linea_biotecnologia" name="linea_tecnica_adscribe_tecnoparque[]" value="biotecnologia_tecnoparque" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="linea_biotecnologia"
                                            class="block text-sm font-medium leading-6 text-gray-900">Biotecnología</label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="linea_ingenieria_diseño" value="ingenieria_diseño_tecnoparque" name="linea_tecnica_adscribe_tecnoparque[]" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="linea_ingenieria_diseño"
                                            class="block text-sm font-medium leading-6 text-gray-900">Ingeniería y Diseño
                                        </label>
                                    </div>
                                    <div class="flex items-center gap-x-3">
                                        <input id="linea_electronica_telecomunicaciones" value="electronica_telecomunicaciones_tecnoparque" name="linea_tecnica_adscribe_tecnoparque[]" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="linea_electronica_telecomunicaciones"
                                            class="block text-sm font-medium leading-6 text-gray-900">Electrónica y telecomunicaciones
                                        </label>
                                    </div>
                                    <div class="flex items-center gap-x-3">
                                        <input id="linea_tecnologia_virtuales" value="tecnologias_virtuales_tecnoparque" name="linea_tecnica_adscribe_tecnoparque[]" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="linea_tecnologia_virtuales"
                                            class="block text-sm font-medium leading-6 text-gray-900">Tecnologías virtuales
                                        </label>
                                    </div>
                              </div>
                        </fieldset>
                        {{-- línea técnica o líneas técnicas se adscribe la idea --}}

                        {{-- Cuales condiciones cumple la idea --}}
                        <fieldset>
                            <legend class="text-sm font-semibold leading-6 text-gray-900">Señale cuáles condiciones cumple la idea que llega al Tecnoparque
                            </legend>
                                <div class="mt-6 space-y-6">
                                    <div class="flex items-center gap-x-3">
                                        <input id="condicion_modelo_comprobacion" name="condiciones_cumplidas_idea[]" value="modelo_comprobacion_idea_tecnoparque" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="condicion_modelo_comprobacion"
                                            class="block text-sm font-medium leading-6 text-gray-900">Cuenta con un modelo de comprobación (trl 4 o trl 5)</label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="condicion_idea_postulada_tecnoparque" value="idea_postulada_tecnoparque" name="condiciones_cumplidas_idea[]" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="condicion_idea_postulada_tecnoparque"
                                            class="block text-sm font-medium leading-6 text-gray-900">Ya postuló la idea en la plataforma tecnoparque
                                        </label>
                                    </div>
                                    <div class="flex items-center gap-x-3">
                                        <input id="condicion_usuario_demostro_capacidades" value="usuario_comprobo_capacidades_tecnicas" name="condiciones_cumplidas_idea[]" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="condicion_usuario_demostro_capacidades"
                                            class="block text-sm font-medium leading-6 text-gray-900">El usuario demostró tener capacidades técnicas de cocreación
                                        </label>
                                    </div>
                              </div>
                        </fieldset>
                        {{-- Cuales condiciones cumple la idea --}}

                    </div>
                </div>
                {{-- Seleccion:Tecnoparque --}}


            {{-- Programa o servicio por el que ingresa --}}


            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancelar</button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Siguiente</button>
            </div>
        </div>


    </form>


@endsection
