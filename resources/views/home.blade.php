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
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Nombres</label>
                        <div class="mt-2">
                            <input type="text" name="nombre_emprendedor" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="numero_contacto_emprendedor"
                            class="block text-sm font-medium leading-6 text-gray-900">Numero de Telefono</label>
                        <div class="mt-2">
                            <input type="text" name="numero_contacto_emprendedor" id="numero_contacto_emprendedor"
                                autocomplete="family-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Correo</label>
                        <div class="mt-2">
                            <input id="email" name="correo_emprendedor" type="email" autocomplete="email"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Ciudad o Municipio</label>
                        <div class="mt-2">
                            <input id="text" name="" type="" autocomplete="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="nombre_emprendimiento"
                            class="block text-sm font-medium leading-6 text-gray-900">Nombre del Emprendimiento</label>
                        <div class="mt-2">
                            <input type="text" name="nombre_emprendimiento" id="nombre_emprendimiento"
                                autocomplete="nombre_emprendimiento"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Tipo de
                            identificacion</label>
                        <div class="mt-2">
                            <select id="" name="tipo_identificacion_emprendedor" autocomplete="-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>

                    <div class="sm:col-span-3">
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
                        <p class="mt-1 text-sm leading-6 text-gray-600">Ocupacion</p>
                        <div class="mt-6 space-y-6">
                            <div class="flex items-center gap-x-3">
                                <input id="empleado" name="ocupacion[]" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="empleado"
                                    class="block text-sm font-medium leading-6 text-gray-900">Empleado</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="tabajador_independiente" value="trabajador_independiente" name="ocupacion[]"
                                    type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="tabajador_independiente"
                                    class="block text-sm font-medium leading-6 text-gray-900">Trabajador
                                    Independiente</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="egresado_sena" value="egresado_sena" name="ocupacion[]" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="egresado_sena"
                                    class="block text-sm font-medium leading-6 text-gray-900">Egresado SENA</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="estudiante_universitario" value="estudiante_universitario" name="ocupacion[]"
                                    type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="estudiante_universitario"
                                    class="block text-sm font-medium leading-6 text-gray-900">Estudiante
                                    Universitario</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="instructor_sena" value="instructor_sena" name="ocupacion[]" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="instructor_sena"
                                    class="block text-sm font-medium leading-6 text-gray-900">Instructor Sena</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="aprendiz_sena" value="aprendiz_sena" name="ocupacion[]" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="aprendiz_sena"
                                    class="block text-sm font-medium leading-6 text-gray-900">Aprendiz Sena</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="investigador_universidad" value="investigador_universidad" name="ocupacion[]"
                                    type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="investigador_universidad"
                                    class="block text-sm font-medium leading-6 text-gray-900">Investigador
                                    Universidad</label>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <label for=""
                                    class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                                <input type="text" name="ocupacion[]" id="input-otro" autocomplete=""
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>

                        </div>
                    </fieldset>
                </div>
            </div>
            {{-- Informacion de Ocupacion y Escolaridad --}}



            {{-- Formulario si es Empleado --}}
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 space-y-10">
                    <fieldset>
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Empleado </h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Su idea de negocio es...</p>
                        <div class="mt-6 space-y-6">
                            <div class="flex items-center gap-x-3">
                                <input id="proyecto_propio_idea" name="empleado_idea_negocio" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="proyecto_propio_idea" class="block text-sm font-medium leading-6 text-gray-900">Un
                                    proyecto a nombre propio</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="proyecto_empresa_empleado" name="empleado_idea_negocio" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="proyecto_empresa_empleado" class="block text-sm font-medium leading-6 text-gray-900">Una idea
                                    de proyecto de la empresa para la cual es empleado</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <label for=""
                                    class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                                <input type="text" name="" id="" autocomplete=""
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>

                        </div>
                    </fieldset>
                </div>
            </div>
            {{-- Formulario si es Empleado --}}


            {{-- Tipo de Usuario --}}
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 space-y-10">
                    <fieldset>
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Tipo de Usuario </h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">En la actualidad que opción te define mejor.</p>
                        <div class="mt-6 space-y-6">
                            <div class="flex items-center gap-x-3">
                                <input id="tipo_usuario_emprendedor" name="tipo_usuario" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="tipo_usuario_emprendedor"
                                    class="block text-sm font-medium leading-6 text-gray-900">Emprendedor</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="tipo_usuario_empresa" name="tipo_usuario" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="tipo_usuario_empresa"
                                    class="block text-sm font-medium leading-6 text-gray-900">Empresa</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <label for=""
                                    class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                                <input type="text" name="" id="" autocomplete=""
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>

                        </div>
                    </fieldset>
                </div>
            </div>
            {{-- Tipo de Usuario --}}

            {{-- Tipo de Empresa --}}
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 space-y-10">
                    <fieldset>
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Tipo de Empresa </h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">¿Cuál es su tipo de empresa?</p>
                        <div class="mt-6 space-y-6">
                            <div class="flex items-center gap-x-3">
                                <input id="tipo_empresa_natural" name="tipo_empresa" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="tipo_empresa_natural"
                                    class="block text-sm font-medium leading-6 text-gray-900">Persona Natural</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="tipo_empresa_juridica" name="tipo_empresa" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="tipo_empresa_juridica" class="block text-sm font-medium leading-6 text-gray-900">Persona
                                    Juridica</label>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>

            {{-- Datos Empresa - NIT SI PERSONA JURIDICA --}}
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 space-y-10">
                    <fieldset>
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Tipo de persona jurídica</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Seleccione su tipo de persona jurídica.</p>
                        <div class="mt-6 space-y-6">
                            <select id="" name="" autocomplete=""
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
            {{-- Datos Empresa - NIT SI PERSONA JURIDICA --}}

            {{-- SI PERSONA NATURAL --}}



            {{-- SI PERSONA NATURAL --}}


            {{-- Tipo de Empresa --}}

            {{-- Nivel del Proyecto de Empresa --}}
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 space-y-10">
                    <fieldset>
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Nivel del Proyecto de Empresa</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">En que nivel clasificaría su proyecto.</p>
                        <div class="mt-6 space-y-6">
                            <div class="flex items-center gap-x-3">
                                <input id="proyecto_investigacion" name="nivel_proyecto_empresa" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="proyecto_investigacion"
                                    class="block text-sm font-medium leading-6 text-gray-900">Es una idea que está a nivel de articulo de investigación</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="proyecto_formulado_concepto" name="nivel_proyecto_empresa" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="proyecto_formulado_concepto"
                                    class="block text-sm font-medium leading-6 text-gray-900">Es un proyecto de investigación del cual ya hemos formulado un concepto</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="proyecto_prototipos_basicos" name="nivel_proyecto_empresa" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="proyecto_prototipos_basicos"
                                    class="block text-sm font-medium leading-6 text-gray-900">Es un proyecto del cual ya se tienen prototipos básicos</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="proyecto_prototipos_funcionales" name="nivel_proyecto_empresa" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="proyecto_prototipos_funcionales"
                                    class="block text-sm font-medium leading-6 text-gray-900">Es un proyecto del cual ya se tienen prototipos funcionales a escala real</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <input id="producto_mercado_mejorable" name="nivel_proyecto_empresa" type="radio"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="producto_mercado_mejorable"
                                    class="block text-sm font-medium leading-6 text-gray-900">Es un producto en el mercado pero susceptible de mejoras</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                                <label for="otro_producto"
                                    class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                                <input type="text" name="" id="" autocomplete=""
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
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Datos empresa </h2>
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
                                        <input id="descripcion_idea" name="correo_emprendedor" type="descripcion_idea" autocomplete="descripcion_idea"
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
                                        <input id="modelo_negocio_no_desarrollado" type="radio" value="" name="modelo_negocio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="modelo_negocio_no_desarrollado" class="w-full py-3 ml-2 text-sm font-medium text-black">No desarrollado	 </label>
                                    </div>
                                </li>

                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="modelo_negocio_desarrollado_conceptual" type="radio" value="" name="modelo_negocio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="modelo_negocio_desarrollado_conceptual" class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado a nivel conceptual (canvas de negocio)</label>
                                    </div>
                                </li>

                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="modelo_negocio_desarrollado" type="radio" value="" name="modelo_negocio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="modelo_negocio_desarrollado" class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado y probado con ejercicios de validación </label>
                                    </div>
                                </li>

                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="modelo_negocio_desarrollado_probando" type="radio" value="" name="modelo_negocio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
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
                                        <input id="producto_servicio_no_desarrollado" type="radio" value="" name="producto_servicio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="producto_servicio_no_desarrollado" class="w-full py-3 ml-2 text-sm font-medium text-black">No desarrollado	 </label>
                                    </div>
                                </li>

                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="producto_servicio_desarrollado_conceptual" type="radio" value="" name="producto_servicio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="producto_servicio_desarrollado_conceptual" class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado a nivel de prototipo conceptual (gráficos, mockup)</label>
                                    </div>
                                </li>

                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="producto_servicio_desarrollado" type="radio" value="" name="producto_servicio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="producto_servicio_desarrollado" class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado a nivel de modelo de comprobación validado con usuario</label>
                                    </div>
                                </li>

                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="producto_servicio_desarrollado_prototipo_funcional" type="radio" value="" name="producto_servicio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="producto_servicio_desarrollado_prototipo_funcional" class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado a nivel de prototipo funcional (a escala) </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="producto_servicio_desarrollado_producto_minimo_viable" type="radio" value="" name="producto_servicio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="producto_servicio_desarrollado_producto_minimo_viable" class="w-full py-3 ml-2 text-sm font-medium text-black">                        Desarrollado a nivel de producto mínimo viable
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
                                        <input id="no_validacion_producto" type="checkbox" value="" name="validacion_producto" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="no_validacion_producto" class="w-full py-3 ml-2 text-sm font-medium text-black">No he validado con externos	 </label>
                                    </div>
                                </li>

                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="validacion_producto_tecnicas" type="checkbox" value="" name="validacion_producto" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="validacion_producto_tecnicas" class="w-full py-3 ml-2 text-sm font-medium text-black">He realizado validaciones técnicas con usuarios</label>
                                    </div>
                                </li>

                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="validacion_producto_ejercicios_entrevistas" type="checkbox" value="" name="validacion_producto" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="validacion_producto_ejercicios_entrevistas" class="w-full py-3 ml-2 text-sm font-medium text-black">He realizado ejercicios de entrevistas, focus group o similares documentados</label>
                                    </div>
                                </li>

                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="validacion_producto_compra_firmadas" type="checkbox" value="" name="validacion_producto" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="validacion_producto_compra_firmadas" class="w-full py-3 ml-2 text-sm font-medium text-black">Tengo intenciones de compra firmadas </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="validacion_producto_estudios_mercado" type="checkbox" value="" name="validacion_producto" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="validacion_producto_estudios_mercado" class="w-full py-3 ml-2 text-sm font-medium text-black">He desarrollado estudios de mercado </label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                    <div class="flex items-center pl-3">
                                        <input id="validacion_producto_ventas_efectivas" type="checkbox" value="" name="validacion_producto" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="validacion_producto_ventas_efectivas" class="w-full py-3 ml-2 text-sm font-medium text-black">He desarrollado ventas efectivas
                                        </label>
                                    </div>
                                </li>
                            </ul>

                        </div>


                        <div class="col-span-full mt-5">
                            <label for="idea_genera_ventas" class="block text-sm font-medium leading-6 text-gray-900">Su idea de negocios o proyecto de innovación actualmente genera ventas permanentes</label>
                            <div class="mt-2">

                                <div class="flex items-center gap-x-3">
                                    <input id="idea_genera_ventas_permanentes_si" name="idea_genera_ventas" type="radio"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="idea_genera_ventas_permanentes_si"
                                        class="block text-sm font-medium leading-6 text-gray-900">Si</label>
                                </div>

                                <div class="flex items-center gap-x-3">
                                    <input id="idea_genera_ventas_permanentes_no" name="idea_genera_ventas" type="radio"
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
            <fieldset>
                <h2 class="text-base font-semibold leading-7 text-gray-900">¿Cuál es la necesidad de asesoría por la cuál se acerca a los programas del SENA?
                </h2>

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
            {{-- Necesidades de Usuarios sin Proyecto concreto --}}



            {{-- Ventas Pomedio Mes --}}
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 space-y-10">
                    <fieldset>
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Ingresos o ventas promedio mes</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Ingresar el promedio de ventas que tiene por mes.</p>
                        <div class="mt-6 space-y-6">
                            <div class="flex items-center gap-x-3">
                                <input type="text" name="" id="" autocomplete=""
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
                                <input type="text" name="" id="" autocomplete=""
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
                                    <select id="" name="programa_sena" autocomplete=""
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
                                    <label for=""
                                        class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                                    <input type="text" name="centro_formacion_servicios" id="" autocomplete=""
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
                                        <label for=""
                                            class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                                        <input type="text" name="hub_innovacion_servicios" id="" autocomplete=""
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
                                        <input id="linea_iot" name="linea__tecnologica_hub[]" value="linea_iot" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="linea_iot"
                                            class="block text-sm font-medium leading-6 text-gray-900">IoT (internet de las cosas)</label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="linea_diseño_prototipado" value="linea_diseño_prototipado" name="linea__tecnologica_hub[]"
                                            type="checkbox" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="linea_diseño_prototipado"
                                            class="block text-sm font-medium leading-6 text-gray-900">Diseño & Prototipado

                                        </label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="linea_desarrollo_software_web" value="linea_desarrollo_software_web" name="linea__tecnologica_hub[]" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="linea_desarrollo_software_web"
                                            class="block text-sm font-medium leading-6 text-gray-900">Desarrollo de software (Web-App)
                                        </label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="linea_realidades_extendidas" value="linea_realidades_extendidas" name="linea__tecnologica_hub[]" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="linea_realidades_extendidas"
                                            class="block text-sm font-medium leading-6 text-gray-900">Realidades Extendidas (Realidad Virtual/Realidad Aumentada)

                                        </label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="linea_inteligencia_artifical" value="linea_inteligencia_artifical" name="linea__tecnologica_hub[]" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="linea_inteligencia_artifical"
                                            class="block text-sm font-medium leading-6 text-gray-900">Inteligencia Artificial (Machine Learning/Deep Learning)

                                        </label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="linea_marketing_digital" value="linea_marketing_digital" name="linea__tecnologica_hub[]" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="linea_marketing_digital"
                                            class="block text-sm font-medium leading-6 text-gray-900">Marketing digital (fortalecimiento de Marca)

                                        </label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="linea_big_data" value="linea_big_data" name="linea__tecnologica_hub[]" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="linea_big_data"
                                            class="block text-sm font-medium leading-6 text-gray-900">Big Data

                                        </label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="linea_manufactura" value="linea_manufactura" name="linea__tecnologica_hub[]" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="linea_manufactura"
                                            class="block text-sm font-medium leading-6 text-gray-900">Manufactura Aditiva
                                        </label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="linea_nula" value="linea_nula" name="linea__tecnologica_hub[]" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="linea_nula"
                                            class="block text-sm font-medium leading-6 text-gray-900">Ninguna Tecnología 4.0
                                        </label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <label for=""
                                            class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                                        <input type="text" name="linea__tecnologica_hub[]" id="" autocomplete=""
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
                                        <input id="fortalecimiento_capacidades" name="tecnoparque_postulado" value="fortalecimiento_capacidades" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="fortalecimiento_capacidades"
                                            class="block text-sm font-medium leading-6 text-gray-900">Tecnoparque Nodo Medellín</label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="relacionamiento" value="relacionamiento" name="tecnoparque_postulado" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="relacionamiento"
                                            class="block text-sm font-medium leading-6 text-gray-900">Tecnoparque Nodo Rionegro
                                        </label>
                                    </div>
                                    <div class="flex items-center gap-x-3">
                                        <label for=""
                                            class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                                        <input type="text" name="tecnoparque_postulado" id="" autocomplete=""
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
                                        <input id="fortalecimiento_servicio" name="tecnoparque_postulado" value="fortalecimiento_servicio" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="fortalecimiento_servicio"
                                            class="block text-sm font-medium leading-6 text-gray-900">Fortalecimiento</label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="desarrollo_tecnologico_servicio" value="desarrollo_tecnologico_servicio" name="tecnoparque_postulado" type="radio"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="desarrollo_tecnologico_servicio"
                                            class="block text-sm font-medium leading-6 text-gray-900">Proyecto para desarrollo tecnológico
                                        </label>
                                    </div>
                                    <div class="flex items-center gap-x-3">
                                        <input id="proyecto_articulacion_servicio" value="proyecto_articulacion_servicio" name="tecnoparque_postulado" type="radio"
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
                                        <input id="linea_biotecnologia" name="linea_tecnica_adscribe[]" value="fortalecimiento_servicio" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="linea_biotecnologia"
                                            class="block text-sm font-medium leading-6 text-gray-900">Biotecnología</label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="linea_ingenieria_diseño" value="desarrollo_tecnologico_servicio" name="linea_tecnica_adscribe[]" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="linea_ingenieria_diseño"
                                            class="block text-sm font-medium leading-6 text-gray-900">Ingeniería y Diseño
                                        </label>
                                    </div>
                                    <div class="flex items-center gap-x-3">
                                        <input id="linea_electronica_telecomunicaciones" value="proyecto_articulacion_servicio" name="linea_tecnica_adscribe[]" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="linea_electronica_telecomunicaciones"
                                            class="block text-sm font-medium leading-6 text-gray-900">Electrónica y telecomunicaciones
                                        </label>
                                    </div>
                                    <div class="flex items-center gap-x-3">
                                        <input id="linea_tecnologia_virtuales" value="proyecto_articulacion_servicio" name="linea_tecnica_adscribe[]" type="checkbox"
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
                                        <input id="condicion_modelo_aprobacion" name="condiciones_cumplidas_idea[]" value="fortalecimiento_servicio" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="condicion_modelo_aprobacion"
                                            class="block text-sm font-medium leading-6 text-gray-900">Cuenta con un modelo de comprobación (trl 4 o trl 5)</label>
                                    </div>

                                    <div class="flex items-center gap-x-3">
                                        <input id="condicion_idea_postulada_tecnoparque" value="desarrollo_tecnologico_servicio" name="condiciones_cumplidas_idea[]" type="checkbox"
                                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="condicion_idea_postulada_tecnoparque"
                                            class="block text-sm font-medium leading-6 text-gray-900">Ya postuló la idea en la plataforma tecnoparque
                                        </label>
                                    </div>
                                    <div class="flex items-center gap-x-3">
                                        <input id="condicion_usuario_demostro_capacidades" value="proyecto_articulacion_servicio" name="condiciones_cumplidas_idea[]" type="checkbox"
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
