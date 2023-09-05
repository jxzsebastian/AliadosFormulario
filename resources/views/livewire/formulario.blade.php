
<form wire:submit.prevent="submit">

<div class="space-y-12">

    @if (!empty($successMessage))
        <div class="alert alert-success">
            {{ $successMessage }}
        </div>
    @endif

    {{-- Informacion de Persona --}}
    <div class="border-b border-gray-900/10 pb-12  {{ $currentStep != 1 ? 'hidden' : '' }}" id="step-1">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Informacion </h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Ingresar los datos.</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 setup-content">
            <div class="sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Nombre del
                    emprendedor(a)
                </label>
                <div class="mt-2">
                    <input type="text" wire:model="nombre_emprendedor" id="first-name" autocomplete="given-name"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @error('nombre_emprendedor')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="sm:col-span-3">
                <label for="numero_contacto_emprendedor"
                    class="block text-sm font-medium leading-6 text-gray-900">Teléfono de contacto</label>
                <div class="mt-2">
                    <input type="text" wire:model="numero_contacto_emprendedor" id="numero_contacto_emprendedor"
                        autocomplete="family-name"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @error('numero_contacto_emprendedor')
                        <span class="error">{{ $message }}</span>
                    @enderror

                </div>
            </div>

            <div class="sm:col-span-3">
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Correo Electrónico de
                    Contacto</label>
                <div class="mt-2">
                    <input id="email" wire:model="correo_emprendedor" type="email" autocomplete="email"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @error('correo_emprendedor')
                        <span class="error">{{ $message }}</span>
                    @enderror

                </div>
            </div>

            <div class="sm:col-span-3">
                <label for="ciudad_municipio_emprendedor"
                    class="block text-sm font-medium leading-6 text-gray-900">Ciudad o Municipio donde esta
                    ubicado</label>
                <div class="mt-2">
                    <input id="ciudad_municipio_emprendedor" type="text" wire:model="ciudad_municipio_emprendedor"
                        autocomplete="ciudad_municipio_emprendedor"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @error('ciudad_municipio_emprendedor')
                        <span class="error">{{ $message }}</span>
                    @enderror

                </div>
            </div>

            <div class="sm:col-span-1">
                <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Tipo de
                    identificacion</label>
                <div class="mt-2">
                    <select id="" wire:model="tipo_identificacion_emprendedor" autocomplete="-name"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="" selected> Seleccione una opcion</option>
                        <option value="cedula_ciudadania">Cédula de Ciudadanía</option>
                        <option value="registro_civil">Registro Civil de Nacimiento</option>
                        <option value="tarjeta_identidad">Tarjeta de Identidad</option>
                        <option value="tarjeta_extranjeria">Tarjeta de Extranjería</option>
                        <option value="cedula_extranjeria">Cédula de Extranjería</option>
                        <option value="pasaporte">Pasaporte</option>
                    </select>
                    @error('tipo_identificacion_emprendedor')
                        <span class="error">{{ $message }}</span>
                    @enderror

                </div>
            </div>

            <div class="sm:col-span-5">
                <label for="identificacion_emprendedor" class="block text-sm font-medium leading-6 text-gray-900">Numero
                    de Identificacion</label>

                <div class="mt-2">
                    <input type="text" wire:model="identificacion_emprendedor" id="identificacion_emprendedor"
                        autocomplete="address-level1"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @error('identificacion_emprendedor')
                        <span class="error">{{ $message }}</span>
                    @enderror

                </div>
            </div>
            <button type="button"
                class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                wire:click="pasoPrimeroInformacionUsuario">Siguiente</button>

        </div>
    </div>
    {{-- Informacion de Persona --}}

    {{-- Informacion de Ocupacion y Escolaridad --}}

    <div class="border-b border-gray-900/10 pb-12   {{ $currentStep != 2 ? 'hidden' : '' }}" id="step-2">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Ocupacion y Escolaridad</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Escoja los niveles de educacion que ha cursado.</p>

        <div class="mt-10 space-y-10">
            <fieldset>
                <div class="mt-6 space-y-6">

                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input id="ninguno" value="ninguno" wire:model="niveles_educacion_emprendedor"
                                type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="ninguno" class="font-medium text-gray-900">Ninguno</label>
                        </div>
                    </div>

                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input id="bachiller" value="bachiller" wire:model="niveles_educacion_emprendedor"
                                type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="bachiller" class="font-medium text-gray-900">Bachiller</label>
                        </div>
                    </div>

                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input id="tecnico" value="tecnico" wire:model="niveles_educacion_emprendedor"
                                type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="tecnico" class="font-medium text-gray-900">Técnico</label>
                        </div>
                    </div>

                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input id="tecnologo" value="tecnologo" wire:model="niveles_educacion_emprendedor"
                                type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="tecnologo" class="font-medium text-gray-900">Tecnólogo</label>
                        </div>
                    </div>

                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input id="profesional" value="profesional" wire:model="niveles_educacion_emprendedor"
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
                                value="especializacion_tecnica_profesional" wire:model="niveles_educacion_emprendedor"
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
                                wire:model="niveles_educacion_emprendedor" type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="especializacion_tecnologica" class="font-medium text-gray-900">Especialización
                                Tecnológica</label>
                        </div>
                    </div>

                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input id="especializacion_profesional" value="especializaciones_profesionales"
                                wire:model="niveles_educacion_emprendedor" type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="especializacion_profesional"
                                class="font-medium text-gray-900">Especializaciones Profesionales</label>
                        </div>
                    </div>

                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input id="maestria" value="maestria" wire:model="niveles_educacion_emprendedor"
                                type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="maestria" class="font-medium text-gray-900">Maestría</label>
                        </div>
                    </div>

                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input id="doctorado" value="doctorado" wire:model="niveles_educacion_emprendedor"
                                type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="doctorado" class="font-medium text-gray-900">Doctorado</label>
                        </div>
                    </div>

                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input id="posdoctorado" value="posdoctorado" wire:model="niveles_educacion_emprendedor"
                                type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="posdoctorado" class="font-medium text-gray-900">Posdoctorado</label>
                        </div>
                    </div>
                </div>
                @error('niveles_educacion_emprendedor')
                    <span class="error">{{ $message }}</span>
                @enderror

            </fieldset>

            <fieldset>
                <legend class="text-sm font-semibold leading-6 text-gray-900">Ocupacion: </legend>
                <p class="mt-1 text-sm leading-6 text-gray-600">¿Cuál es su ocupación?</p>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                        <input id="empleado" value="empleado" wire:model="ocupacion_emprendedor" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="empleado"
                            class="block text-sm font-medium leading-6 text-gray-900">Empleado</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="trabajador_independiente" value="trabajador_independiente" wire:model="ocupacion_emprendedor"
                            type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="trabajador_independiente"
                            class="block text-sm font-medium leading-6 text-gray-900">Trabajador
                            Independiente</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="egresado_sena" value="egresado_sena" wire:model="ocupacion_emprendedor" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="egresado_sena" class="block text-sm font-medium leading-6 text-gray-900">Egresado
                            SENA</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="estudiante_universitario" value="estudiante_universitario" wire:model="ocupacion_emprendedor"
                            type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="estudiante_universitario"
                            class="block text-sm font-medium leading-6 text-gray-900">Estudiante
                            Universitario</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="instructor_sena" value="instructor_sena" wire:model="ocupacion_emprendedor" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="instructor_sena"
                            class="block text-sm font-medium leading-6 text-gray-900">Instructor Sena</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="aprendiz_sena" value="aprendiz_sena" wire:model="ocupacion_emprendedor" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="aprendiz_sena" class="block text-sm font-medium leading-6 text-gray-900">Aprendiz
                            Sena</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="investigador_universidad" value="investigador_universidad" wire:model="ocupacion_emprendedor"
                            type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="investigador_universidad"
                            class="block text-sm font-medium leading-6 text-gray-900">Investigador
                            Universidad</label>
                    </div>
                    @error('ocupacion_emprendedor')
                        <span class="error">{{ $message }}</span>
                    @enderror

                    <div class="flex items-center gap-x-3">
                        <input id="otro_ocupacion_emprendedor" value="otro" wire:model="ocupacion_emprendedor" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="otro_ocupacion_emprendedor"
                            class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                        <input type="text" wire:model="otra_ocupacion_emprendedor" id="input-otro-ocupacion_emprendedor" autocomplete=""
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>

                </div>
            </fieldset>

            <button type="button" class="text-base mr-2 font-semibold leading-6 text-gray-900"
                wire:click="back(1)">Volver</button>
            <button type="button"
                class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                wire:click="pasoSegundoOcupacionEscolaridad">Siguiente</button>

        </div>


    </div>
    {{-- Informacion de Ocupacion y Escolaridad --}}


    {{-- Formulario si es Empleado --}}
    <div class="border-b border-gray-900/10 pb-12  {{ $currentStep != 3 ? 'hidden' : '' }}" id="step-3">
        <div class="mt-10 space-y-10">
            <fieldset>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Empleado </h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Su idea de negocio es...</p>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                        <input id="proyecto_propio_idea" value="proyecto_propio_idea"
                            wire:model="empleado_idea_negocio" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">

                        <label for="proyecto_propio_idea" class="block text-sm font-medium leading-6 text-gray-900">Un
                            proyecto a nombre propio</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="proyecto_empresa_empleado" value="proyecto_empresa_empleado"
                            wire:model="empleado_idea_negocio" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">

                        <label for="proyecto_empresa_empleado"
                            class="block text-sm font-medium leading-6 text-gray-900">Una idea
                            de proyecto de la empresa para la cual es empleado</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="otro_idea_negocio" value="otro" wire:model="empleado_idea_negocio"
                            type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="otro_idea_negocio"
                            class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                        <input type="text" wire:model="otro_idea_negocio" autocomplete=""
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    @error('empleado_idea_negocio')
                        <span class="error">{{ $message }}</span>
                    @enderror

                </div>
            </fieldset>
            <button type="button" class="text-base mr-2 font-semibold leading-6 text-gray-900"
                wire:click="back()">Volver</button>
            <button type="button"
                class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                wire:click="pasoSiOcupacionEmpleado">Siguiente</button>
        </div>
    </div>
    {{-- Formulario si es Empleado --}}


    {{-- Tipo de Usuario --}}
    <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 4 ? 'hidden' : '' }}" id="step-4">
        <div class="mt-10 space-y-10">
            <fieldset>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Tipo de Usuario </h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">En la actualidad que opción te define mejor.</p>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                        <input id="tipo_usuario_emprendedor" value="tipo_usuario_emprendedor"
                            wire:model="tipo_usuario" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="tipo_usuario_emprendedor"
                            class="block text-sm font-medium leading-6 text-gray-900">Emprendedor</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="tipo_usuario_empresa" value="tipo_usuario_empresa" wire:model="tipo_usuario"
                            type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="tipo_usuario_empresa"
                            class="block text-sm font-medium leading-6 text-gray-900">Empresa</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="otro_tipo_usuario" value="otro" wire:model="tipo_usuario" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="otro_tipo_usuario"
                            class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                        <input type="text" wire:model="otro_tipo_usuario" autocomplete=""
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                @error('tipo_usuario')
                    <span class="error">{{ $message }}</span>
                @enderror

            </fieldset>
            <button type="button" class="text-base mr-2 font-semibold leading-6 text-gray-900"
                wire:click="back(3)">Volver</button>
            <button type="button"
                class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                wire:click="pasoTipoUsuario">Siguiente</button>
        </div>
    </div>
    {{-- Tipo de Usuario --}}


    {{-- Tipo de Empresa --}}
    <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 5 ? 'hidden' : '' }}" id="step-4">
        <div class="mt-10 space-y-10">
            <fieldset>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Tipo de Empresa </h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">¿Cuál es su tipo de empresa?</p>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                        <input id="tipo_empresa_persona_natural" value="tipo_empresa_persona_natural"
                            wire:model="tipo_empresa" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="tipo_empresa_persona_natural"
                            class="block text-sm font-medium leading-6 text-gray-900">Persona Natural</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="tipo_empresa_juridica" value="tipo_empresa_persona_juridica"
                            wire:model="tipo_empresa" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="tipo_empresa_juridica"
                            class="block text-sm font-medium leading-6 text-gray-900">Persona
                            Juridica</label>
                    </div>
                </div>
                @error('tipo_empresa_persona_natural')
                    <span class="error">{{ $message }}</span>
                @enderror

            </fieldset>

            <button type="button" class="text-base mr-2 font-semibold leading-6 text-gray-900"
                wire:click="back(1)">Volver</button>
            <button type="button"
                class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                wire:click="pasoSiTipoUsuarioEmpresa">Siguiente</button>

        </div>
    </div>
    {{--  SI PERSONA JURIDICA --}}
    <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 6 ? 'hidden' : '' }}" id="step-6">
        <div class="mt-10 space-y-10">
            <fieldset>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Tipo de persona jurídica</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Seleccione su tipo de persona jurídica.</p>
                <div class="mt-6 space-y-6">
                    <select id="" wire:model="tipo_persona_juridica" autocomplete=""
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="">Seleccione una Opción</option>
                        <option value="sociedad_anonima">Sociedad Anónima</option>
                        <option value="sociedad_acciones_simplificadas">Sociedad por acciones simplificadas SAS
                        </option>
                        <option value="sociedad_responsabilidad_limitada">Sociedad de responsabilidad limitada LTDA
                        </option>
                        <option value="sociedad_comandita_simple_acciones">Sociedad en comandita simple y por acciones
                        </option>
                        <option value="sociedad_colectiva">Sociedad Colectiva</option>
                        <option value="sociedad_comerciales_beneficio_colectivo">Sociedades comerciales de beneficio e
                            interés colectivo</option>
                        <option value="empresa_unipersonal">Empresa unipersonal</option>
                        <option value="entidad_sin_animo_lucro">Entidad sin ánimo de lucro ESAL</option>
                        <option value="fundacion">Fundación</option>
                    </select>
                </div>
                @error('tipo_persona_juridica')
                    <span class="error">{{ $message }}</span>
                @enderror

            </fieldset>
            <button type="button" class="text-base mr-2 font-semibold leading-6 text-gray-900"
                wire:click="back(1)">Volver</button>
            <button type="button"
                class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                wire:click="pasoSiTipoEmpresaJuridica">Siguiente</button>

        </div>
    </div>
    {{--  SI PERSONA JURIDICA --}}

    {{-- Tipo de Empresa --}}

    {{-- Datos de la empresa --}}
    <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 7 ? 'hidden' : '' }}" id="step-7">
        <div class="mt-10 space-y-10">
            <fieldset>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Datos Empresa </h2>
                <div class="mt-6 space-y-6">

                    <div class="col-span-full">
                        <label for="empresa_nit" class="block text-sm font-medium leading-6 text-gray-900">Escriba el
                            número del Número de Identificación Tributaria de la empresa</label>
                        <div class="mt-2">
                            <input type="text" wire:model="empresa_nit" id="empresa_nit"
                                autocomplete="empresa_nit"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                            @error('empresa_nit')
                                <span class="error">{{ $message }}</span>
                            @enderror

                        </div>


                    </div>
                </div>
            </fieldset>

            <fieldset>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Tamaño de la empresa</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Revise la tabla los valores de ventas por sector para
                    2022 y responda en que tamaño de empresa se encuentra.</p>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                        <input id="microempresa" value="microempresa" wire:model="empresa_tamaño" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="microempresa"
                            class="block text-sm font-medium leading-6 text-gray-900">Microempresa</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="empresa_pequeña" value="empresa_pequeña" wire:model="empresa_tamaño"
                            type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="empresa_pequeña" class="block text-sm font-medium leading-6 text-gray-900">Pequeña
                            Empresa</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="empresa_mediana" value="empresa_mediana" wire:model="empresa_tamaño"
                            type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="empresa_mediana" class="block text-sm font-medium leading-6 text-gray-900">Mediana
                            empresa</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="empresa_grande" value="empresa_grande" wire:model="empresa_tamaño" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="empresa_grande" class="block text-sm font-medium leading-6 text-gray-900">Gran
                            empresa</label>
                    </div>
                    @error('empresa_tamaño')
                        <span class="error">{{ $message }}</span>
                    @enderror

                </div>
            </fieldset>

            <fieldset>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Su empresa cuenta con una unidad de
                    innovación o desarrollo de producto
                </h2>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                        <input id="empresa_innovacion_desarrollo_producto_si" value="si"
                            wire:model="empresa_innovacion_desarrollo_producto" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="empresa_innovacion_desarrollo_producto_si"
                            class="block text-sm font-medium leading-6 text-gray-900">Si</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="empresa_innovacion_desarrollo_producto_no" value="no"
                            wire:model="empresa_innovacion_desarrollo_producto" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="empresa_innovacion_desarrollo_producto_no"
                            class="block text-sm font-medium leading-6 text-gray-900">No</label>
                    </div>
                    @error('empresa_innovacion_desarrollo_producto')
                        <span class="error">{{ $message }}</span>
                    @enderror

                </div>
            </fieldset>

            <fieldset>
                <h2 class="text-base font-semibold leading-7 text-gray-900">En la actualidad cuenta con un proyecto de
                    desarrollo de producto o servicios del cual ya tiene avances y requiere desarrollar prototipos
                </h2>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                        <input id="empresa_proyecto_desarrollo_avances_requiere_prototipos_si"
                            wire:model="empresa_proyecto_desarrollo_avances_requiere_prototipos" value="si"
                            type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="empresa_proyecto_desarrollo_avances_requiere_prototipos_si"
                            class="block text-sm font-medium leading-6 text-gray-900">Si</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="empresa_proyecto_desarrollo_avances_requiere_prototipos_no"
                            wire:model="empresa_proyecto_desarrollo_avances_requiere_prototipos" value="no"
                            type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="empresa_proyecto_desarrollo_avances_requiere_prototipos_no"
                            class="block text-sm font-medium leading-6 text-gray-900">No</label>
                    </div>
                    @error('empresa_proyecto_desarrollo_avances_requiere_prototipos')
                        <span class="error">{{ $message }}</span>
                    @enderror

                </div>
            </fieldset>

            <button type="button" class="text-base mr-2 font-semibold leading-6 text-gray-900"
                wire:click="back(1)">Volver</button>
            <button type="button"
                class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                wire:click="pasoDatosEmpresa">Siguiente</button>


        </div>
    </div>
    {{-- Datos de la empresa --}}


    {{-- Necesidades de Usuarios sin Proyecto concreto --}}
    <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 8 ? 'hidden' : '' }}" id="step-8">
        <div class="mt-10 space-y-10">
            <fieldset>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Necesidades de Usuarios sin Proyecto
                    concreto
                </h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">¿Cuál es la necesidad de asesoría por la cuál se acerca
                    a los programas del SENA?</p>

                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                        <input id="asesoria_networking" wire:model="necesidad_asesoria_sena"
                            value="asesoria_networking" type="checkbox"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="asesoria_networking"
                            class="block text-sm font-medium leading-6 text-gray-900">Networking (generar
                            redes)</label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="asesoria_mejorar_modelo_negocio" value="asesoria_mejorar_modelo_negocio"
                            wire:model="necesidad_asesoria_sena" type="checkbox"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="asesoria_mejorar_modelo_negocio"
                            class="block text-sm font-medium leading-6 text-gray-900">Hacer cambios o mejoras al modelo
                            de negocio
                        </label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="asesoria_desarrollo_nuevos_productos" value="asesoria_desarrollo_nuevos_productos"
                            wire:model="necesidad_asesoria_sena" type="checkbox"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="asesoria_desarrollo_nuevos_productos"
                            class="block text-sm font-medium leading-6 text-gray-900">Desarrollo de nuevos productos o
                            servicios
                        </label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="asesoria_fuentes_financiacion_convocatorias"
                            value="asesoria_fuentes_financiacion_convocatorias" wire:model="necesidad_asesoria_sena"
                            type="checkbox" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="asesoria_fuentes_financiacion_convocatorias"
                            class="block text-sm font-medium leading-6 text-gray-900">Conocer posibles fuentes de
                            financiación o convocatorias del sistema CT+i
                        </label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="asesoia_fortalecer_empresa" value="asesoia_fortalecer_empresa"
                            wire:model="necesidad_asesoria_sena" type="checkbox"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="asesoia_fortalecer_empresa"
                            class="block text-sm font-medium leading-6 text-gray-900">Fortalecimiento de mi empresa en
                            temas empresariales (Gerenciales, financieros, de mercados, etc)
                        </label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="asesoria_aprender_tecnologias" value="asesoria_aprender_tecnologias"
                            wire:model="necesidad_asesoria_sena" type="checkbox"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="asesoria_aprender_tecnologias"
                            class="block text-sm font-medium leading-6 text-gray-900">Conocer o aprender sobre
                            tecnologías 4.0
                        </label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="asesoria_formacion_temas_especializados"
                            value="asesoria_formacion_temas_especializados" wire:model="necesidad_asesoria_sena"
                            type="checkbox" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="asesoria_formacion_temas_especializados"
                            class="block text-sm font-medium leading-6 text-gray-900">Formación en temas especializados
                        </label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="asesoria_oferta_sena" value="asesoria_oferta_sena"
                            wire:model="necesidad_asesoria_sena" type="checkbox"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="asesoria_oferta_sena"
                            class="block text-sm font-medium leading-6 text-gray-900">Conocer la oferta SENA
                        </label>
                    </div>
                    @error('necesidad_asesoria_sena')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </fieldset>
            <button type="button" class="text-base mr-2 font-semibold leading-6 text-gray-900"
                wire:click="back(1)">Volver</button>
            <button type="button"
                class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                wire:click="pasoUsuariosSinProyectoConcreto">Siguiente</button>

        </div>

    </div>
    {{-- Necesidades de Usuarios sin Proyecto concreto --}}


    {{-- Formulario Emprendedores --}}
    <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 10 ? 'hidden' : '' }}" id="step-10">
        <div class="mt-10 space-y-10">
            <fieldset>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Emprendedores </h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">En que nivel clasificaría su idea de emprendimiento o
                    idea de proyecto</p>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                        <input id="no_idea_innovacion" value="no_idea_innovacion"
                            wire:model="emprendedores_nivel_idea" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">

                        <label for="no_idea_innovacion" class="block text-sm font-medium leading-6 text-gray-900">Aún
                            no tengo una idea de negocio o proyecto de innovación concreto
                        </label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="idea_sin_prototipo" value="idea_sin_prototipo"
                            wire:model="emprendedores_nivel_idea" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">

                        <label for="idea_sin_prototipo" class="block text-sm font-medium leading-6 text-gray-900">Solo
                            tengo una idea/proyecto pero nunca he realizado un prototipo</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="idea_prototipo_funcional" value="idea_prototipo_funcional"
                            wire:model="emprendedores_nivel_idea" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="idea_prototipo_funcional"
                            class="block text-sm font-medium leading-6 text-gray-900">Tengo una idea de la cual ya he
                            realizado un prototipo funcional pero sin ventas</label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="proyecto_empresa_empleadora" value="proyecto_empresa_empleadora"
                            wire:model="emprendedores_nivel_idea" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="proyecto_empresa_empleadora"
                            class="block text-sm font-medium leading-6 text-gray-900">Es un proyecto para la empresa
                            empleadora</label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="producto_elaborado_funcional" value="producto_elaborado_funcional"
                            wire:model="emprendedores_nivel_idea" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="producto_elaborado_funcional"
                            class="block text-sm font-medium leading-6 text-gray-900">Tengo un producto elaborado con
                            el que he realizado ventas efectivas (unidad productiva )</label>
                    </div>
                    @error('emprendedores_nivel_idea')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </fieldset>
            <button type="button" class="text-base mr-2 font-semibold leading-6 text-gray-900"
                wire:click="back(1)">Volver</button>
            <button type="button"
                class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                wire:click="pasoFormularioEmprendedores">Siguiente</button>

        </div>
    </div>
    {{-- Formulario Emprendedores --}}

    {{-- Elementos de la Idea/proyecto --}}
    <div class="border-b border-gray-900/10 pb-12  {{ $currentStep != 11 ? 'hidden' : '' }}" id="step-11">
        <div class="mt-10 space-y-10">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Elementos de la Idea/proyecto </h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">En la actualidad que opción te define mejor.</p>
            <div class="mt-6 space-y-6">
                <div class="col-span-full">
                    <label for="nombre_emprendimiento"
                        class="block text-sm font-medium leading-6 text-gray-900">Nombre de la Idea</label>
                    <div class="mt-2">
                        <input type="text" wire:model="nombre_idea" id="nombre_idea" autocomplete="nombre_idea"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('nombre_idea')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-3 mt-4">
                        <label for="descripcion_idea"
                            class="block text-sm font-medium leading-6 text-gray-900">Describa brevemente en que
                            consiste la idea</label>
                        <div class="mt-2">
                            <input id="descripcion_idea" wire:model="descripcion_idea"
                                autocomplete="descripcion_idea"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('descripcion_idea')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                </div>
            </div>

            <fieldset>
                <div class="col-span-full mt-5">
                    <label for="" class="mb-4 block text-sm font-medium leading-6 text-gray-900">Califique en
                        que nivel valora actualmente el siguiente elemento</label>


                    <ul
                        class="items-center w-full text-sm font-medium text-black bg-white border border-gray-400 rounded-lg sm:flex">

                        <li class="w-full">
                            <div class="flex items-center pl-3">
                                <label for="" class="w-full py-3 ml-2 text-sm font-medium text-black">Modelo
                                    de Negocio</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                            <div class="flex items-center pl-3">
                                <input id="modelo_negocio_no_desarrollado" type="radio"
                                    value="modelo_no_desarrollado" wire:model="modelo_negocio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="modelo_negocio_no_desarrollado"
                                    class="w-full py-3 ml-2 text-sm font-medium text-black">No desarrollado </label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                            <div class="flex items-center pl-3">
                                <input id="modelo_negocio_desarrollado_conceptual" type="radio"
                                    value="modelo_desarrollado_nivel_conceptual" wire:model="modelo_negocio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="modelo_negocio_desarrollado_conceptual"
                                    class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado a nivel
                                    conceptual (canvas de negocio)</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                            <div class="flex items-center pl-3">
                                <input id="modelo_negocio_desarrollado" type="radio"
                                    value="modelo_desarrollado_probado_validacion" wire:model="modelo_negocio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="modelo_negocio_desarrollado"
                                    class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado y probado con
                                    ejercicios de validación </label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                            <div class="flex items-center pl-3">
                                <input id="modelo_negocio_desarrollado_probando" type="radio"
                                    value="modelo_desarrollado_probado_efectiva" wire:model="modelo_negocio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="modelo_negocio_desarrollado_probando"
                                    class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado y se esta
                                    probando en la práctica con ventas efectivas </label>
                            </div>
                        </li>
                    </ul>
                    @error('modelo_negocio')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </fieldset>

            <fieldset>
                <div class="col-span-full mt-5">
                    <label for="" class="mb-4 block text-sm font-medium leading-6 text-gray-900">Califique en
                        que nivel valora actualmente el siguiente elemento</label>


                    <ul
                        class="items-center w-full text-sm font-medium text-black bg-white border border-gray-400 rounded-lg sm:flex">

                        <li class="w-full">
                            <div class="flex items-center pl-3">
                                <label for="" class="w-full py-2 ml-2 text-sm font-medium text-black">Producto
                                    o Servicio </label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                            <div class="flex items-center pl-3">
                                <input id="producto_servicio_no_desarrollado" type="radio"
                                    value="producto_servicio_no_desarrollado" wire:model="producto_servicio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="producto_servicio_no_desarrollado"
                                    class="w-full py-3 ml-2 text-sm font-medium text-black">No desarrollado </label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                            <div class="flex items-center pl-3">
                                <input id="producto_servicio_desarrollado_conceptual" type="radio"
                                    value="producto_servicio_desarrollado_conceptual" wire:model="producto_servicio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="producto_servicio_desarrollado_conceptual"
                                    class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado a nivel de
                                    prototipo conceptual (gráficos, mockup)</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                            <div class="flex items-center pl-3">
                                <input id="producto_servicio_desarrollado" type="radio"
                                    value="producto_servicio_desarrollado_validado_usuario"
                                    wire:model="producto_servicio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="producto_servicio_desarrollado"
                                    class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado a nivel de
                                    modelo de comprobación validado con usuario</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                            <div class="flex items-center pl-3">
                                <input id="producto_servicio_desarrollado_prototipo_funcional" type="radio"
                                    value="producto_servicio_desarrollado_prototipo_funcional"
                                    wire:model="producto_servicio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="producto_servicio_desarrollado_prototipo_funcional"
                                    class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado a nivel de
                                    prototipo funcional (a escala) </label>
                            </div>
                        </li>
                        <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                            <div class="flex items-center pl-3">
                                <input id="producto_servicio_desarrollado_producto_minimo_viable" type="radio"
                                    value="producto_servicio_desarrollado_producto_minimo_viable"
                                    wire:model="producto_servicio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="producto_servicio_desarrollado_producto_minimo_viable"
                                    class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado a nivel de
                                    producto mínimo viable
                                </label>
                            </div>
                        </li>
                        <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                            <div class="flex items-center pl-3">
                                <input id="producto_servicio_desarrollado_desplegado" type="radio"
                                    value="producto_servicio_desarrollado_desplegado" wire:model="producto_servicio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="producto_servicio_desarrollado_desplegado"
                                    class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado y desplegado
                                    actualmente con ventas en el mercado Producto o Servicio </label>
                            </div>
                        </li>
                    </ul>
                    @error('producto_servicio')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </fieldset>

            <fieldset>
                <div class="col-span-full mt-5">
                    <label for="" class="mb-4 block text-sm font-medium leading-6 text-gray-900">Califique en
                        que nivel valora actualmente el siguiente elemento</label>

                    <ul
                        class="items-center w-full text-sm font-medium text-black bg-white border border-gray-400 rounded-lg sm:flex">

                        <li class="w-full">
                            <div class="flex items-center pl-3">
                                <label for="" class="w-full py-2 ml-2 text-sm font-medium text-black">Nivel de
                                    validación del producto o servicio</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                            <div class="flex items-center pl-3">
                                <input id="no_validacion_producto" type="checkbox" value="no_validacion_producto"
                                    wire:model="validacion_producto"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="no_validacion_producto"
                                    class="w-full py-3 ml-2 text-sm font-medium text-black">No he validado con externos
                                </label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                            <div class="flex items-center pl-3">
                                <input id="validacion_producto_tecnicas" type="checkbox"
                                    value="validacion_producto_tecnicas" wire:model="validacion_producto"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="validacion_producto_tecnicas"
                                    class="w-full py-3 ml-2 text-sm font-medium text-black">He realizado validaciones
                                    técnicas con usuarios</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                            <div class="flex items-center pl-3">
                                <input id="validacion_producto_ejercicios_entrevistas" type="checkbox"
                                    value="validacion_producto_ejercicios_entrevistas"
                                    wire:model="validacion_producto"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="validacion_producto_ejercicios_entrevistas"
                                    class="w-full py-3 ml-2 text-sm font-medium text-black">He realizado ejercicios de
                                    entrevistas, focus group o similares documentados</label>
                            </div>
                        </li>

                        <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                            <div class="flex items-center pl-3">
                                <input id="validacion_producto_compra_firmadas" type="checkbox"
                                    value="validacion_producto_compra_firmadas" wire:model="validacion_producto"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="validacion_producto_compra_firmadas"
                                    class="w-full py-3 ml-2 text-sm font-medium text-black">Tengo intenciones de compra
                                    firmadas </label>
                            </div>
                        </li>
                        <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                            <div class="flex items-center pl-3">
                                <input id="validacion_producto_estudios_mercado" type="checkbox"
                                    value="validacion_producto_estudios_mercado" wire:model="validacion_producto"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="validacion_producto_estudios_mercado"
                                    class="w-full py-3 ml-2 text-sm font-medium text-black">He desarrollado estudios de
                                    mercado </label>
                            </div>
                        </li>
                        <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                            <div class="flex items-center pl-3">
                                <input id="validacion_producto_ventas_efectivas" type="checkbox"
                                    value="validacion_producto_ventas_efectivas" wire:model="validacion_producto"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="validacion_producto_ventas_efectivas"
                                    class="w-full py-3 ml-2 text-sm font-medium text-black">He desarrollado ventas
                                    efectivas
                                </label>
                            </div>
                        </li>
                    </ul>
                    @error('validacion_producto')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </fieldset>

            <fieldset>
                <div class="col-span-full mt-5">
                    <label for="idea_genera_ventas" class="block text-sm font-medium leading-6 text-gray-900">Su idea
                        de negocios o proyecto de innovación actualmente genera ventas permanentes</label>
                    <div class="mt-6 space-y-6">

                        <div class="flex items-center gap-x-3">
                            <input id="idea_genera_ventas_permanentes_si" value="si"
                                wire:model="idea_genera_ventas" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="idea_genera_ventas_permanentes_si"
                                class="block text-sm font-medium leading-6 text-gray-900">Si</label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="idea_genera_ventas_permanentes_no" value="no"
                                wire:model="idea_genera_ventas" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="idea_genera_ventas_permanentes_no"
                                class="block text-sm font-medium leading-6 text-gray-900">No</label>
                        </div>
                        @error('idea_genera_ventas')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </fieldset>

            <button type="button" class="text-base mr-2 font-semibold leading-6 text-gray-900"
                wire:click="back(1)">Volver</button>
            <button type="button"
                class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                wire:click="pasoFormularioIdeaProyecto">Siguiente</button>
        </div>
    </div>
    {{-- Elementos de la Idea/proyecto --}}


    {{-- Ventas Pomedio Mes --}}
    <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 12 ? 'hidden' : '' }}" id="step-12">
        <div class="mt-10 space-y-10">
            <fieldset>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Ingresos o ventas promedio mes</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Ingresar el promedio de ventas que tiene por mes.</p>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                        <input type="text" wire:model="ventas_promedio_mes" id="" autocomplete=""
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
            </fieldset>
            <button type="button" class="text-base mr-2 font-semibold leading-6 text-gray-900"
                wire:click="back(11)">Volver</button>
            <button type="button"
                class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                wire:click="pasoVentasPorMesIdea">Siguiente</button>

        </div>
    </div>
    {{-- Ventas Pomedio Mes --}}

    {{-- Generacion de Empleos --}}
    <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 13 ? 'hidden' : '' }}" id="step-13">
        <div class="mt-10 space-y-10">
            <fieldset>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Su idea que Cantidad de empleos genera
                    actualmente</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Ingresar la cantidad de empleos que genera.</p>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                        <input type="text" wire:model="idea_cantidad_empleados_genera" id=""
                            autocomplete=""
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
            </fieldset>
            <button type="button" class="text-base mr-2 font-semibold leading-6 text-gray-900"
                wire:click="back(11)">Volver</button>
            <button type="button"
                class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                wire:click="pasoEmpleadosGenera">Siguiente</button>
        </div>
    </div>
    {{-- Generacion de Empleos --}}

    {{-- Programa o servicio por el que ingresa --}}
    <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 9 ? 'hidden' : '' }}" id="step-9">
        <div class="mt-10 space-y-10">
            <fieldset>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Programa o servicio por el que ingresa</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">A Cuál de las unidades SENA ingresó como proyecto.</p>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center">
                        <select id="" wire:model="programa_sena_ingreso" autocomplete=""
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option value="">Seleccione una Opcion</option>
                            <option value="centros_formacion">Centros de Formacion</option>
                            <option value="emprendimiento">Emprendimiento</option>
                            <option value="hub_innovacion">Hub de Innovacion</option>
                            <option value="tecnoparque">Tecnoparque</option>
                            <option value="extensionismo">Extensionismo</option>

                        </select>
                    </div>
                    @error('programa_sena_ingreso')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </fieldset>
            <button type="button" class="text-base mr-2 font-semibold leading-6 text-gray-900"
                wire:click="back(1)">Volver</button>
            <button type="button"
                class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                wire:click="pasoProgramaIngreso">Siguiente</button>

        </div>
    </div>
    {{-- Programa o servicio por el que ingresa --}}

    {{-- Seleccion:Tecnoparque --}}
    <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 14 ? 'hidden' : '' }}" id="step-14">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Tecnoparque Servicios</h2>
        <div class="mt-10 space-y-10">

            {{-- Tecnoparque Postulado --}}
            <fieldset>
                <legend class="text-sm font-semibold leading-6 text-gray-900">A que Tecnoparque postuló su idea
                    inicialmente
                </legend>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                        <input id="tecnoparque_medellin" wire:model="tecnoparque_postulado"
                            value="tecnoparque_medellin" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="tecnoparque_medellin"
                            class="block text-sm font-medium leading-6 text-gray-900">Tecnoparque Nodo Medellín</label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="tecnoparque_rionegro" value="tecnoparque_rionegro"
                            wire:model="tecnoparque_postulado" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="tecnoparque_rionegro"
                            class="block text-sm font-medium leading-6 text-gray-900">Tecnoparque Nodo Rionegro
                        </label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="otro_tecnoparque_postulado" value="otro" wire:model="tecnoparque_postulado"
                            type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="otro_tecnoparque_postulado"
                            class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                        <input type="text" wire:model="otro_tecnoparque_postulado"
                            id="input-otro-tecnoparque_postulado" autocomplete=""
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
            </fieldset>
            {{-- Tecnoparque Postulado --}}

            {{-- Servicios accedidos inicialmente en tecnoparque --}}
            <fieldset>
                <legend class="text-sm font-semibold leading-6 text-gray-900">Indique a que servicios accedió el
                    usuario inicialmente en el Tecnoparque
                </legend>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                        <input id="fortalecimiento_servicio_tecnoparque" wire:model="servicios_accedidos_tecnoparque"
                            value="fortalecimiento_servicio_tecnoparque" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="fortalecimiento_servicio_tecnoparque"
                            class="block text-sm font-medium leading-6 text-gray-900">Fortalecimiento</label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="desarrollo_tecnologico_servicio_tecnoparque"
                            value="desarrollo_tecnologico_servicio_tecnoparque"
                            wire:model="servicios_accedidos_tecnoparque" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="desarrollo_tecnologico_servicio_tecnoparque"
                            class="block text-sm font-medium leading-6 text-gray-900">Proyecto para desarrollo
                            tecnológico
                        </label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="proyecto_articulacion_servicio" value="proyecto_articulacion_servicio"
                            wire:model="servicios_accedidos_tecnoparque" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="proyecto_articulacion_servicio"
                            class="block text-sm font-medium leading-6 text-gray-900">Proyecto en proceso de
                            articulación
                        </label>
                    </div>
                </div>
            </fieldset>
            {{-- Servicios accedidos inicialmente en tecnoparque --}}

            {{-- línea técnica o líneas técnicas se adscribe la idea --}}
            <fieldset>
                <legend class="text-sm font-semibold leading-6 text-gray-900">A que línea técnica o líneas técnicas se
                    adscribe la idea
                </legend>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                        <input id="linea_biotecnologia" wire:model="linea_tecnica_adscribe_tecnoparque"
                            value="biotecnologia_tecnoparque" type="checkbox"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="linea_biotecnologia"
                            class="block text-sm font-medium leading-6 text-gray-900">Biotecnología</label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="linea_ingenieria_diseño" value="ingenieria_diseño_tecnoparque"
                            wire:model="linea_tecnica_adscribe_tecnoparque" type="checkbox"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="linea_ingenieria_diseño"
                            class="block text-sm font-medium leading-6 text-gray-900">Ingeniería y Diseño
                        </label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="linea_electronica_telecomunicaciones"
                            value="electronica_telecomunicaciones_tecnoparque"
                            wire:model="linea_tecnica_adscribe_tecnoparque" type="checkbox"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="linea_electronica_telecomunicaciones"
                            class="block text-sm font-medium leading-6 text-gray-900">Electrónica y telecomunicaciones
                        </label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="linea_tecnologia_virtuales" value="tecnologias_virtuales_tecnoparque"
                            wire:model="linea_tecnica_adscribe_tecnoparque" type="checkbox"
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
                <legend class="text-sm font-semibold leading-6 text-gray-900">Señale cuáles condiciones cumple la idea
                    que llega al Tecnoparque
                </legend>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                        <input id="condicion_modelo_comprobacion" wire:model="condiciones_cumplidas_idea"
                            value="modelo_comprobacion_idea_tecnoparque" type="checkbox"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="condicion_modelo_comprobacion"
                            class="block text-sm font-medium leading-6 text-gray-900">Cuenta con un modelo de
                            comprobación (trl 4 o trl 5)</label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="condicion_idea_postulada_tecnoparque" value="idea_postulada_tecnoparque"
                            wire:model="condiciones_cumplidas_idea" type="checkbox"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="condicion_idea_postulada_tecnoparque"
                            class="block text-sm font-medium leading-6 text-gray-900">Ya postuló la idea en la
                            plataforma tecnoparque
                        </label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="condicion_usuario_demostro_capacidades"
                            value="usuario_comprobo_capacidades_tecnicas" wire:model="condiciones_cumplidas_idea"
                            type="checkbox" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="condicion_usuario_demostro_capacidades"
                            class="block text-sm font-medium leading-6 text-gray-900">El usuario demostró tener
                            capacidades técnicas de cocreación
                        </label>
                    </div>
                </div>
            </fieldset>
            {{-- Cuales condiciones cumple la idea --}}

            <button type="button" class="text-base mr-2 font-semibold leading-6 text-gray-900"
                wire:click="back(9)">Volver</button>
            <button type="button"
                class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                wire:click="pasoServicioTecnoparque">Siguiente</button>
        </div>
    </div>
    {{-- Seleccion:Tecnoparque --}}

    {{-- Seleccion: Emprendimiento Servicios --}}
    <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 15 ? 'hidden' : '' }}" id="step-15">
        <div class="mt-10 space-y-10">

            <fieldset>
                <legend class="text-sm font-semibold leading-6 text-gray-900">Emprendimiento Servicios
                </legend>
                <p class="mt-1 text-sm leading-6 text-gray-600">Indique a que servicios accedió el usuario
                    inicialmente en el Centro de Desarrollo Empresarial o Programa de Emprendimiento
                </p>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                        <input id="fomento" wire:model="emprendimiento_servicios" value="fomento"
                            type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="fomento"
                            class="block text-sm font-medium leading-6 text-gray-900">Fomento</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="creacion_empresa_fondo_emprender" value="creacion_empresa_fondo_emprender"
                            wire:model="emprendimiento_servicios" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="creacion_empresa_fondo_emprender"
                            class="block text-sm font-medium leading-6 text-gray-900">Creación de empresa Fondo
                            Emprender
                        </label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="creacion_empresa_otras_fuentes" value="creacion_empresa_otras_fuentes"
                            wire:model="emprendimiento_servicios" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="creacion_empresa_otras_fuentes"
                            class="block text-sm font-medium leading-6 text-gray-900">Creación de empresa otras
                            fuentes de financiación
                        </label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="fortalecimiento_empresarial" value="fortalecimiento_empresarial"
                            wire:model="emprendimiento_servicios" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="fortalecimiento_empresarial"
                            class="block text-sm font-medium leading-6 text-gray-900">Fortalecimiento empresarial
                        </label>
                    </div>
                    <button type="button" class="text-base mr-2 font-semibold leading-6 text-gray-900"
                        wire:click="back(9)">Volver</button>
                    <button type="button"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                        wire:click="pasoServicioEmprendimiento">Siguiente</button>
                </div>
            </fieldset>
        </div>
    </div>
    {{-- Seleccion: Emprendimiento Servicios --}}

    {{-- Seleccion: Centro de Formación Servicios --}}
    <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 16 ? 'hidden' : '' }}" id="step-16">
        <div class="mt-10 space-y-10">

            <fieldset>
                <legend class="text-sm font-semibold leading-6 text-gray-900">Centro de Formación Servicios
                </legend>
                <p class="mt-1 text-sm leading-6 text-gray-600">Indique a que servicios accedió el usuario
                    inicialmente en el centro de formación
                </p>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                        <input id="agencia_publica_empleo" wire:model="centro_formacion_servicios"
                            value="agencia_publica_empleo" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="agencia_publica_empleo"
                            class="block text-sm font-medium leading-6 text-gray-900">Agencia Publica de
                            Empleo</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="certificado_competencias_laborales" value="certificado_competencias_laborales"
                            wire:model="centro_formacion_servicios" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="certificado_competencias_laborales"
                            class="block text-sm font-medium leading-6 text-gray-900">Certificación de competencias
                            laborales
                        </label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="formacion" value="formacion" wire:model="centro_formacion_servicios"
                            type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="formacion" class="block text-sm font-medium leading-6 text-gray-900">Formación
                        </label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="investigacion" value="investigacion" wire:model="centro_formacion_servicios"
                            type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="investigacion"
                            class="block text-sm font-medium leading-6 text-gray-900">Investigación
                        </label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="servicios_tecnologicos" value="servicios_tecnologicos"
                            wire:model="centro_formacion_servicios" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="servicios_tecnologicos"
                            class="block text-sm font-medium leading-6 text-gray-900">Servicios Tecnológicos
                        </label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="otro_centro_formacion_servicios" value="otro"
                            wire:model="centro_formacion_servicios" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="otro_centro_formacion_servicios"
                            class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                        <input type="text" wire:model="otro_centro_formacion_servicios"
                            id="input-otro-centro_formacion_servicios" autocomplete=""
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
            </fieldset>

            <button type="button" class="text-base mr-2 font-semibold leading-6 text-gray-900"
                wire:click="back(9)">Volver</button>
            <button type="button"
                class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                wire:click="pasoServicioCentrosFormacion">Siguiente</button>
        </div>
    </div>
    {{-- Seleccion: Centro de Formación Servicios --}}


    {{-- Seleccion: Hub de Innovación Servicios --}}
    <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 17 ? 'hidden' : '' }}" id="step-17">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Hub de Innovación Servicios</h2>
        <div class="mt-10 space-y-10">

            {{-- Indicar que servicios solicita en el Hub de Innovación --}}
            <fieldset>
                <legend class="text-sm font-semibold leading-6 text-gray-900">Hub de Innovación Servicios

                </legend>
                <p class="mt-1 text-sm leading-6 text-gray-600">Indique a que servicios solicita acceso en el Hub de
                    Innovación</p>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                        <input id="fortalecimiento_capacidades" wire:model="hub_innovacion_servicios"
                            value="fortalecimiento_capacidades" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="fortalecimiento_capacidades"
                            class="block text-sm font-medium leading-6 text-gray-900">Fortalecimiento de
                            Capacidades</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="desarrollo_soluciones" value="desarrollo_soluciones"
                            wire:model="hub_innovacion_servicios" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="desarrollo_soluciones"
                            class="block text-sm font-medium leading-6 text-gray-900">Desarrollo de Soluciones
                        </label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="relacionamiento" value="relacionamiento" wire:model="hub_innovacion_servicios"
                            type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="relacionamiento"
                            class="block text-sm font-medium leading-6 text-gray-900">Relacionamiento
                        </label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="otro_hub_innovacion_servicios" value="otro"
                            wire:model="hub_innovacion_servicios" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="otro_hub_innovacion_servicios"
                            class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                        <input type="text" wire:model="otro_hub_innovacion_servicios"
                            id="input-otro-hub_innovacion_servicios" autocomplete=""
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
            </fieldset>
            {{-- Indicar que servicios solicita en el Hub de Innovación --}}

            {{-- Indicar que línea tecnológicas esta suscrita la idea --}}
            <fieldset>
                <legend class="text-sm font-semibold leading-6 text-gray-900">En que línea o líneas tecnológicas esta
                    suscrita la idea</legend>
                <div class="mt-6 space-y-6">

                    <div class="flex items-center gap-x-3">
                        <input id="linea_iot" wire:model="linea_tecnologica_hub" value="linea_iot"
                            type="checkbox" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="linea_iot" class="block text-sm font-medium leading-6 text-gray-900">IoT
                            (internet de las cosas)</label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="linea_diseño_prototipado" value="linea_diseño_prototipado"
                            wire:model="linea_tecnologica_hub" type="checkbox"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="linea_diseño_prototipado"
                            class="block text-sm font-medium leading-6 text-gray-900">Diseño & Prototipado

                        </label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="linea_desarrollo_software_web" value="linea_desarrollo_software_web"
                            wire:model="linea_tecnologica_hub" type="checkbox"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="linea_desarrollo_software_web"
                            class="block text-sm font-medium leading-6 text-gray-900">Desarrollo de software (Web-App)
                        </label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="linea_realidades_extendidas" value="linea_realidades_extendidas"
                            wire:model="linea_tecnologica_hub" type="checkbox"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="linea_realidades_extendidas"
                            class="block text-sm font-medium leading-6 text-gray-900">Realidades Extendidas (Realidad
                            Virtual/Realidad Aumentada)

                        </label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="linea_inteligencia_artifical" value="linea_inteligencia_artifical"
                            wire:model="linea_tecnologica_hub" type="checkbox"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="linea_inteligencia_artifical"
                            class="block text-sm font-medium leading-6 text-gray-900">Inteligencia Artificial (Machine
                            Learning/Deep Learning)

                        </label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="linea_marketing_digital" value="linea_marketing_digital"
                            wire:model="linea_tecnologica_hub" type="checkbox"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="linea_marketing_digital"
                            class="block text-sm font-medium leading-6 text-gray-900">Marketing digital
                            (fortalecimiento de Marca)

                        </label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="linea_big_data" value="linea_big_data" wire:model="linea_tecnologica_hub"
                            type="checkbox" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="linea_big_data" class="block text-sm font-medium leading-6 text-gray-900">Big
                            Data

                        </label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="linea_manufactura" value="linea_manufactura" wire:model="linea_tecnologica_hub"
                            type="checkbox" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="linea_manufactura"
                            class="block text-sm font-medium leading-6 text-gray-900">Manufactura Aditiva
                        </label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="linea_nula" value="linea_nula" wire:model="linea_tecnologica_hub"
                            type="checkbox" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="linea_nula" class="block text-sm font-medium leading-6 text-gray-900">Ninguna
                            Tecnología 4.0
                        </label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="otro_linea_tecnologica_hub" value="otro"
                            wire:model="otro_linea_tecnologica_hub" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="otro_linea_tecnologica_hub"
                            class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                        <input type="text" wire:model="otro_linea_tecnologica_hub"
                            id="input-otro-linea_tecnologica_hub" autocomplete=""
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
            </fieldset>
            {{-- Indicar que línea tecnológicas esta suscrita la idea --}}

            {{-- Indicar conocimientos tecnicos en la linea seleccionada --}}
            <fieldset>
                <legend class="text-sm font-semibold leading-6 text-gray-900">Cuentas con conocimientos técnicos en
                    las líneas seleccionadas (punto anterior)
                </legend>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                        <input id="conocimientos_lineas_seleccionada_no"
                            wire:model="conocimientos_lineas_seleccionada" value="no" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="conocimientos_lineas_seleccionada_no"
                            class="block text-sm font-medium leading-6 text-gray-900">No</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="conocimientos_lineas_seleccionada_basico" value="basico"
                            wire:model="conocimientos_lineas_seleccionada" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="conocimientos_lineas_seleccionada_basico"
                            class="block text-sm font-medium leading-6 text-gray-900">Basico
                        </label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="conocimientos_lineas_seleccionada_medio" value="medio"
                            wire:model="conocimientos_lineas_seleccionada" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="conocimientos_lineas_seleccionada_medio"
                            class="block text-sm font-medium leading-6 text-gray-900">Medio
                        </label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="conocimientos_lineas_seleccionada_avanzado" value="avanzados"
                            wire:model="conocimientos_lineas_seleccionada" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="conocimientos_lineas_seleccionada_avanzado"
                            class="block text-sm font-medium leading-6 text-gray-900">Avanzados
                        </label>
                    </div>
                </div>
            </fieldset>
            {{-- Indicar conocimientos tecnicos en la linea seleccionada --}}

            {{-- Indicar Puntualmente cual es tu necesidad de apoyo para el proyecto --}}
            <fieldset>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Puntualmente cual es tu necesidad de apoyo
                    para el proyecto
                </h2>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                        <input type="text" wire:model="necesidad_puntual_proyecto"
                            id="necesidad_puntual_proyecto" autocomplete=""
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
            </fieldset>
            {{-- Indicar Puntualmente cual es tu necesidad de apoyo para el proyecto --}}

            {{-- Indicar si se cuenta con equipo de trabajo --}}
            <fieldset>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Cuentas con equipo de trabajo (otras
                    personas vinculadas con el desarrollo de la idea)
                </h2>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                        <input type="text" wire:model="cuenta_equipo_trabajo" id="cuenta_equipo_trabajo"
                            autocomplete=""
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
            </fieldset>
            {{-- Indicar si se cuenta con equipo de trabajo --}}


            <button type="button" class="text-base mr-2 font-semibold leading-6 text-gray-900"
                wire:click="back(9)">Volver</button>
            <button type="button"
                class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                wire:click="pasoServicioHubInnovacion">Siguiente</button>
        </div>
    </div>
    {{-- Seleccion: Hub de Innovación Servicios --}}

    {{-- Programa o servicio por el que ingresa --}}


    {{-- Formulario si es Aprendiz en formación y egresado --}}
    <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 18 ? 'hidden' : '' }}" id="step-18">
        <div class="mt-10 space-y-10">

            {{-- Opcion centro de formación es aprendiz o fue --}}
            <fieldset>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Aprendiz en formación y egresado</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">En que centro de formación es aprendiz actualmente o
                    fue egresado</p>
                <div class="mt-6 space-y-6">

                    <div class="flex items-center gap-x-3">
                        <input id="centro_recursos_naturales_renovables"
                            value="centro_recursos_naturales_renovables"
                            wire:model="centro_formacion_actual_aprendiz" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="centro_recursos_naturales_renovables"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            CENTRO DE LOS RECURSOS NATURALES RENOVABLES LA SALADA</label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="centro_diseño_manufactura_cuero" value="centro_diseño_manufactura_cuero"
                            wire:model="centro_formacion_actual_aprendiz" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="centro_diseño_manufactura_cuero"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            CENTRO DE DISEÑO Y MANUFACTURA DEL CUERO</label>
                    </div>


                    <div class="flex items-center gap-x-3">
                        <input id="centro_comercio" value="centro_comercio"
                            wire:model="centro_formacion_actual_aprendiz" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="centro_comercio" class="block text-sm font-medium leading-6 text-gray-900">
                            CENTRO DE COMERCIO</label>
                    </div>


                    <div class="flex items-center gap-x-3">
                        <input id="centro_formacion_diseño_confeccion_moda"
                            value="centro_formacion_diseño_confeccion_moda"
                            wire:model="centro_formacion_actual_aprendiz" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="centro_formacion_diseño_confeccion_moda"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            CENTRO DE FORMACIÓN EN DISEÑO, CONFECCIÓN Y MODA</label>
                    </div>


                    <div class="flex items-center gap-x-3">
                        <input id="centro_innovacion_agroindustria_aviacion"
                            value="centro_innovacion_agroindustria_aviacion"
                            wire:model="centro_formacion_actual_aprendiz" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="centro_innovacion_agroindustria_aviacion"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            CENTRO DE LA INNOVACIÓN, LA AGROINDUSTRIA Y LA AVIACIÓN​</label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="centro_servicios_salud" value="centro_servicios_salud"
                            wire:model="centro_formacion_actual_aprendiz" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="centro_servicios_salud"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            CENTRO DE SERVICIOS DE SALUD</label>
                    </div>


                    <div class="flex items-center gap-x-3">
                        <input id="centro_servicios_gestion_empresarial"
                            value="centro_servicios_gestion_empresarial"
                            wire:model="centro_formacion_actual_aprendiz" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="centro_servicios_gestion_empresarial"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            CENTRO DE SERVICIOS Y GESTIÓN EMPRESARIAL</label>
                    </div>


                    <div class="flex items-center gap-x-3">
                        <input id="centro_tecnologia_manufactura_avanzada"
                            value="centro_tecnologia_manufactura_avanzada"
                            wire:model="centro_formacion_actual_aprendiz" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="centro_tecnologia_manufactura_avanzada"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            CENTRO DE TECNOLOGÍA DE LA MANUFACTURA AVANZADA</label>
                    </div>


                    <div class="flex items-center gap-x-3">
                        <input id="centro_desarrollo_habitat_construccion"
                            value="centro_desarrollo_habitat_construccion"
                            wire:model="centro_formacion_actual_aprendiz" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="centro_desarrollo_habitat_construccion"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            CENTRO PARA EL DESARROLLO DEL HÁBITAT Y LA CONSTRUCCIÓN</label>
                    </div>


                    <div class="flex items-center gap-x-3">
                        <input id="centro_tecnologico_mobiliario" value="centro_tecnologico_mobiliario"
                            wire:model="centro_formacion_actual_aprendiz" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="centro_tecnologico_mobiliario"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            CENTRO TECNOLÓGICO DEL MOBILIARIO</label>
                    </div>


                    <div class="flex items-center gap-x-3">
                        <input id="complejo_tecnologico_agroindustrial" value="complejo_tecnologico_agroindustrial"
                            wire:model="centro_formacion_actual_aprendiz" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="complejo_tecnologico_agroindustrial"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            COMPLEJO TECNOLÓGICO AGROINDUSTRIAL, PECUARIO Y TURÍSTICO</label>
                    </div>


                    <div class="flex items-center gap-x-3">
                        <input id="complejo_tecnoogico_minero_agroempresarial"
                            value="complejo_tecnoogico_minero_agroempresarial"
                            wire:model="centro_formacion_actual_aprendiz" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="complejo_tecnoogico_minero_agroempresarial"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            COMPLEJO TECNOLÓGICO MINERO AGROEMPRESARIAL</label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="centro_textil_gestion_industrial" value="centro_textil_gestion_industrial"
                            wire:model="centro_formacion_actual_aprendiz" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="centro_textil_gestion_industrial"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            CENTRO TEXTIL Y DE GESTIÓN INDUSTRIAL​</label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="complejo_tecnologico_turistico_agroindustrial_occidente_antioqueño"
                            value="complejo_tecnologico_turistico_agroindustrial_occidente_antioqueño"
                            wire:model="centro_formacion_actual_aprendiz" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="complejo_tecnologico_turistico_agroindustrial_occidente_antioqueño"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            COMPLEJO TECNOLÓGICO TURÍSTICO Y AGROINDUSTRIAL DEL OCCIDENTE ANTIOQUEÑO​​</label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="centro_formacion_minero_ambiental_bagre"
                            value="centro_formacion_minero_ambiental_bagre"
                            wire:model="centro_formacion_actual_aprendiz" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="centro_formacion_minero_ambiental_bagre"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            CENTRO DE FORMACIÓN MINERO AMBIENTAL EL BAGRE​​</label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="complejo_tecnologico_gestion_agroempresarial"
                            value="complejo_tecnologico_gestion_agroempresarial"
                            wire:model="centro_formacion_actual_aprendiz" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="complejo_tecnologico_gestion_agroempresarial"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            COMPLEJO TECNOLÓGICO PARA LA GESTIÓN AGROEMPRESARIAL​​</label>
                    </div>



                </div>
            </fieldset>
            {{-- Opcion centro de formación es aprendiz o fue --}}

            {{-- Programa de formación está adscrito o estuvo --}}
            <fieldset>
                <h2 class="text-base font-semibold leading-7 text-gray-900">A que programa de formación está adscrito
                    o estuvo adscrito</h2>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                        <input type="text" wire:model="programa_formacion_adscrito" id=""
                            autocomplete=""
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
            </fieldset>
            {{-- Programa de formación está adscrito o estuvo --}}

            {{-- interés emprendedor se da por --}}
            <fieldset class="mt-6 space-y-6">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Su interés emprendedor se da por..</h2>
                <div class="flex items-center gap-x-3">
                    <input id="proyecto_aula" wire:model="interes_emprendedor_es" type="radio"
                        value="interes_proyecto_aula_participar_programas_emprendimiento"
                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    <label for="proyecto_aula" class="block text-sm font-medium leading-6 text-gray-900">
                        Proyecto de aula que me lleva a querer participar en programas de emprendimiento</label>
                </div>

                <div class="flex items-center gap-x-3">
                    <input id="idea_no_surgida_proyectos" value="interes_idea_no_surgida"
                        wire:model="interes_emprendedor_es" type="radio"
                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    <label for="idea_no_surgida_proyectos"
                        class="block text-sm font-medium leading-6 text-gray-900">
                        Tengo una idea pero no surgió en los proyectos de clase</label>
                </div>


                <div class="flex items-center gap-x-3">
                    <input id="asistencia_charla_interesado" value="interes_asistencia_charla"
                        wire:model="interes_emprendedor_es" type="radio"
                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    <label for="asistencia_charla_interesado"
                        class="block text-sm font-medium leading-6 text-gray-900">
                        Asistí a una charla y me interesé por los programas de emprendimiento pero aun no tengo
                        idea</label>
                </div>
                <div class="flex items-center gap-x-3">
                    <input id="idea_aprendiz_formacion" value="interes_idea_aprendiz_formacion"
                        wire:model="interes_emprendedor_es" type="radio"
                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    <label for="idea_aprendiz_formacion" class="block text-sm font-medium leading-6 text-gray-900">
                        Fue una idea que surgió cuando era aprendiz en formación</label>
                </div>
            </fieldset>
            {{-- interés emprendedor se da por --}}
            <button type="button" class="text-base mr-2 font-semibold leading-6 text-gray-900"
                wire:click="back()">Volver</button>
            <button type="button"
                class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                wire:click="pasoSiAprendizEgresadoSENA">Siguiente</button>
        </div>
    </div>
    {{-- Formulario si es Aprendiz en formación y egresado --}}


    {{-- Formulario si es Instructor Sena --}}
    <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 19 ? 'hidden' : '' }}" id="step-19">
        <div class="mt-10 space-y-10">

            {{-- Opcion centro de formación es aprendiz o fue --}}
            <fieldset>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Instructor Sena</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">A que centro pertenece</p>
                <div class="mt-6 space-y-6">

                    <div class="flex items-center gap-x-3">
                        <input id="instructor_centro_recursos_naturales_renovables"
                            value="instructor_centro_recursos_naturales_renovables"
                            wire:model="centro_formacion_actual_instructor" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="instructor_centro_recursos_naturales_renovables"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            CENTRO DE LOS RECURSOS NATURALES RENOVABLES LA SALADA</label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="instructor_centro_diseño_manufactura_cuero"
                            value="instructor_centro_diseño_manufactura_cuero"
                            wire:model="centro_formacion_actual_instructor" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="instructor_centro_diseño_manufactura_cuero"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            CENTRO DE DISEÑO Y MANUFACTURA DEL CUERO</label>
                    </div>


                    <div class="flex items-center gap-x-3">
                        <input id="instructor_centro_comercio" value="instructor_centro_comercio"
                            wire:model="centro_formacion_actual_instructor" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="instructor_centro_comercio"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            CENTRO DE COMERCIO</label>
                    </div>


                    <div class="flex items-center gap-x-3">
                        <input id="instructor_centro_formacion_diseño_confeccion_moda"
                            value="instructor_centro_formacion_diseño_confeccion_moda"
                            wire:model="centro_formacion_actual_instructor" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="instructor_centro_formacion_diseño_confeccion_moda"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            CENTRO DE FORMACIÓN EN DISEÑO, CONFECCIÓN Y MODA</label>
                    </div>


                    <div class="flex items-center gap-x-3">
                        <input id="instructor_centro_innovacion_agroindustria_aviacion"
                            value="instructor_centro_innovacion_agroindustria_aviacion"
                            wire:model="centro_formacion_actual_instructor" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="instructor_centro_innovacion_agroindustria_aviacion"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            CENTRO DE LA INNOVACIÓN, LA AGROINDUSTRIA Y LA AVIACIÓN​</label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="instructor_centro_servicios_salud" value="instructor_centro_servicios_salud"
                            wire:model="centro_formacion_actual_instructor" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="instructor_centro_servicios_salud"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            CENTRO DE SERVICIOS DE SALUD</label>
                    </div>


                    <div class="flex items-center gap-x-3">
                        <input id="instructor_centro_servicios_gestion_empresarial"
                            value="instructor_centro_servicios_gestion_empresarial"
                            wire:model="centro_formacion_actual_instructor" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="instructor_centro_servicios_gestion_empresarial"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            CENTRO DE SERVICIOS Y GESTIÓN EMPRESARIAL</label>
                    </div>


                    <div class="flex items-center gap-x-3">
                        <input id="instructor_centro_tecnologia_manufactura_avanzada"
                            value="instructor_centro_tecnologia_manufactura_avanzada"
                            wire:model="centro_formacion_actual_instructor" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="instructor_centro_tecnologia_manufactura_avanzada"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            CENTRO DE TECNOLOGÍA DE LA MANUFACTURA AVANZADA</label>
                    </div>


                    <div class="flex items-center gap-x-3">
                        <input id="instructor_centro_desarrollo_habitat_construccion"
                            value="instructor_centro_desarrollo_habitat_construccion"
                            wire:model="centro_formacion_actual_instructor" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="instructor_centro_desarrollo_habitat_construccion"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            CENTRO PARA EL DESARROLLO DEL HÁBITAT Y LA CONSTRUCCIÓN</label>
                    </div>


                    <div class="flex items-center gap-x-3">
                        <input id="instructor_centro_tecnologico_mobiliario"
                            value="instructor_centro_tecnologico_mobiliario"
                            wire:model="centro_formacion_actual_instructor" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="instructor_centro_tecnologico_mobiliario"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            CENTRO TECNOLÓGICO DEL MOBILIARIO</label>
                    </div>


                    <div class="flex items-center gap-x-3">
                        <input id="instructor_complejo_tecnologico_agroindustrial"
                            value="instructor_complejo_tecnologico_agroindustrial"
                            wire:model="centro_formacion_actual_instructor" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="instructor_complejo_tecnologico_agroindustrial"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            COMPLEJO TECNOLÓGICO AGROINDUSTRIAL, PECUARIO Y TURÍSTICO</label>
                    </div>


                    <div class="flex items-center gap-x-3">
                        <input id="instructor_complejo_tecnoogico_minero_agroempresarial"
                            value="instructor_complejo_tecnoogico_minero_agroempresarial"
                            wire:model="centro_formacion_actual_instructor" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="instructor_complejo_tecnoogico_minero_agroempresarial"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            COMPLEJO TECNOLÓGICO MINERO AGROEMPRESARIAL</label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="instructor_centro_textil_gestion_industrial"
                            value="instructor_centro_textil_gestion_industrial"
                            wire:model="centro_formacion_actual_instructor" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="instructor_centro_textil_gestion_industrial"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            CENTRO TEXTIL Y DE GESTIÓN INDUSTRIAL​</label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="instructor_complejo_tecnologico_turistico_agroindustrial_occidente_antioqueño"
                            wire:model="centro_formacion_actual_instructor"
                            value="instructor_complejo_tecnologico_turistico_agroindustrial_occidente_antioqueño"
                            type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="instructor_complejo_tecnologico_turistico_agroindustrial_occidente_antioqueño"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            COMPLEJO TECNOLÓGICO TURÍSTICO Y AGROINDUSTRIAL DEL OCCIDENTE ANTIOQUEÑO​​</label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="instructor_centro_formacion_minero_ambiental_bagre"
                            value="instructor_centro_formacion_minero_ambiental_bagre"
                            wire:model="centro_formacion_actual_instructor" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="instructor_centro_formacion_minero_ambiental_bagre"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            CENTRO DE FORMACIÓN MINERO AMBIENTAL EL BAGRE​​</label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="instructor_complejo_tecnologico_gestion_agroempresarial"
                            value="instructor_complejo_tecnologico_gestion_agroempresarial"
                            wire:model="centro_formacion_actual_instructor" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="instructor_complejo_tecnologico_gestion_agroempresarial"
                            class="block text-sm font-medium leading-6 text-gray-900">
                            COMPLEJO TECNOLÓGICO PARA LA GESTIÓN AGROEMPRESARIAL​​</label>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Hace parte de un grupo de investigación de
                    SENNOVA </h2>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                        <input id="sennova_si" value="si" wire:model="parte_sennova" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="sennova_si" class="block text-sm font-medium leading-6 text-gray-900">Si</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="sennova_no" value="no" wire:model="parte_sennova" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="sennova_no" class="block text-sm font-medium leading-6 text-gray-900">No</label>
                    </div>
                </div>
            </fieldset>
            <button type="button" class="text-base mr-2 font-semibold leading-6 text-gray-900"
                wire:click="back()">Volver</button>
            <button type="button"
                class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                wire:click="pasoSiInstructorSENA">Siguiente</button>

        </div>
    </div>
    {{-- Formulario si es Instructor Sena --}}


    {{-- Formulario si es Instructor Sena es de Sennova --}}
    <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 20 ? 'hidden' : '' }}" id="step-20">
        <div class="mt-10 space-y-10">
            <fieldset>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Investigadores Sennova</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Su participación en el grupo es</p>

                <div class="mt-6 space-y-6">

                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input id="sennova_coordinador" value="sennova_coordinador"
                                wire:model="participacion_sennova" type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="sennova_coordinador" class="font-medium text-gray-900">Coordinador</label>
                        </div>
                    </div>

                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input id="sennova_investigador" value="sennova_investigador"
                                wire:model="participacion_sennova" type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="sennova_investigador" class="font-medium text-gray-900">Investigador</label>
                        </div>
                    </div>

                    <div class="relative flex gap-x-3">
                        <div class="flex h-6 items-center">
                            <input id="sennova_lider_semillero" value="sennova_lider_semillero"
                                wire:model="participacion_sennova" type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        </div>
                        <div class="text-sm leading-6">
                            <label for="sennova_lider_semillero" class="font-medium text-gray-900">Líder de
                                semillero
                            </label>
                        </div>
                    </div>

                </div>
            </fieldset>

            <fieldset>
                <h2 class="text-base font-semibold leading-7 text-gray-900">El grupo cuenta con un Semillero de
                    Investigación </h2>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                        <input id="semillero_senova_si" value="si"
                            wire:model="sennova_semillero_investigacion" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="semillero_senova_si"
                            class="block text-sm font-medium leading-6 text-gray-900">Si</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="semillero_sennova_no" value="no"
                            wire:model="sennova_semillero_investigacion" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="semillero_sennova_no"
                            class="block text-sm font-medium leading-6 text-gray-900">No</label>
                    </div>
                </div>
            </fieldset>

            <button type="button" class="text-base mr-2 font-semibold leading-6 text-gray-900"
                wire:click="back()">Volver</button>
            <button type="button"
                class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                wire:click="pasoSiInstructorSENNOVA">Siguiente</button>
        </div>
    </div>
    {{-- Formulario si es Instructor Sena es de Sennova --}}

    {{-- Si forma parte de semillero - Semillero Informacion --}}
    <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 21 ? 'hidden' : '' }}" id="step-21">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Semillero </h2>
        <div class="mt-10 space-y-10">
            <fieldset>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="col-span-full">
                        <label for="nombre_semillero"
                            class="block text-sm font-medium leading-6 text-gray-900">Nombre del semillero</label>
                        <div class="mt-2">
                            <input type="text" wire:model="nombre_semillero" id="nombre_semillero"
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
                            <input type="number" wire:model="semillero_cantidad_integrantes"
                                id="semillero_cantidad_integrantes" autocomplete="semillero_cantidad_integrantes"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="col-span-full">
                        <label for="semillero_tema_trabajo"
                            class="block text-sm font-medium leading-6 text-gray-900">Temas de trabajo</label>
                        <div class="mt-2">
                            <input type="text" wire:model="semillero_tema_trabajo" id="semillero_tema_trabajo"
                                autocomplete="semillero_tema_trabajo"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>
            </fieldset>
            <button type="button" class="text-base mr-2 font-semibold leading-6 text-gray-900"
                wire:click="back(1)">Volver</button>
            <button type="button"
                class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                wire:click="pasoSiSennovaSemillero">Siguiente</button>

        </div>
    </div>
    {{-- Si forma parte de semillero - Semillero Informacion --}}

    {{-- Formulario si es investigador de universidad --}}
    <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 22 ? 'hidden' : '' }}" id="step-22">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Investigadores Universidades </h2>
        <div class="mt-10 space-y-10">
            <fieldset>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="col-span-full">
                        <label for="investigador_universidad_nombre"
                            class="block text-sm font-medium leading-6 text-gray-900">Nombre de la Universidad en la
                            que es investigador</label>
                        <div class="mt-2">
                            <input type="text" wire:model="investigador_universidad_nombre"
                                id="investigador_universidad_nombre" autocomplete="investigador_universidad_nombre"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="col-span-full">
                        <label for="investigador_universidad_grupo_investigacion"
                            class="block text-sm font-medium leading-6 text-gray-900">Grupo de Investigación</label>
                        <div class="mt-2">
                            <input type="text" wire:model="investigador_universidad_grupo_investigacion"
                                id="investigador_universidad_grupo_investigacion"
                                autocomplete="investigador_universidad_grupo_investigacion"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="mt-6 space-y-6">
                    <h2 class="text-base font-semibold leading-7 text-gray-900">En la actualidad tiene una idea con
                        capacidad de convertirse en un producto o un prototipo </h2>

                    <div class="flex items-center gap-x-3">
                        <input id="investigador_idea_capacidad_producto_si" value="si"
                            wire:model="investigador_idea_capacidad_producto" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="investigador_idea_capacidad_producto_si"
                            class="block text-sm font-medium leading-6 text-gray-900">Si</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="investigador_idea_capacidad_producto_no" value="no"
                            wire:model="investigador_idea_capacidad_producto" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="investigador_idea_capacidad_producto_no"
                            class="block text-sm font-medium leading-6 text-gray-900">No</label>
                    </div>
                </div>
            </fieldset>
            <button type="button" class="text-base mr-2 font-semibold leading-6 text-gray-900"
                wire:click="back()">Volver</button>
            <button type="button"
                class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                wire:click="pasoSiInvestigadorUniversidad">Siguiente</button>
        </div>



    </div>
    {{-- Formulario si es investigador de universidad --}}

    {{-- Nivel del Proyecto de Empresa --}}
    <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 23 ? 'hidden' : '' }}" id="step-23">
        <div class="mt-10 space-y-10">
            <fieldset>
                <h2 class="text-base font-semibold leading-7 text-gray-900">Nivel del Proyecto de Empresa</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">En que nivel clasificaría su proyecto.</p>
                <div class="mt-6 space-y-6">
                    <div class="flex items-center gap-x-3">
                        <input id="proyecto_investigacion" value="proyecto_investigacion"
                            wire:model="nivel_proyecto_empresa" value="proyecto_nivel_investigacion"
                            type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="proyecto_investigacion"
                            class="block text-sm font-medium leading-6 text-gray-900">Es una idea que está a nivel de
                            articulo de investigación</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="proyecto_formulado_concepto" wire:model="nivel_proyecto_empresa"
                            value="proyecto_formulado_concepto" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="proyecto_formulado_concepto"
                            class="block text-sm font-medium leading-6 text-gray-900">Es un proyecto de investigación
                            del cual ya hemos formulado un concepto</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="proyecto_prototipos_basicos" value="proyecto_prototipos_basicos"
                            wire:model="nivel_proyecto_empresa" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="proyecto_prototipos_basicos"
                            class="block text-sm font-medium leading-6 text-gray-900">Es un proyecto del cual ya se
                            tienen prototipos básicos</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="proyecto_prototipos_funcionales" value="proyecto_prototipos_funcionales"
                            wire:model="nivel_proyecto_empresa" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="proyecto_prototipos_funcionales"
                            class="block text-sm font-medium leading-6 text-gray-900">Es un proyecto del cual ya se
                            tienen prototipos funcionales a escala real</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="producto_mercado_mejorable" value="producto_mercado_mejorable"
                            wire:model="nivel_proyecto_empresa" type="radio"
                            class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="producto_mercado_mejorable"
                            class="block text-sm font-medium leading-6 text-gray-900">Es un producto en el mercado
                            pero susceptible de mejoras</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="otro_nivel_proyecto_empresa" value="otro" wire:model="nivel_proyecto_empresa"
                            type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="otro_nivel_proyecto_empresa"
                            class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                        <input type="text" wire:model="otro_nivel_proyecto_empresa"
                            id="input-otro-nivel_proyecto_empresa" autocomplete=""
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>

                </div>
            </fieldset>

            <button type="button" class="text-base mr-2 font-semibold leading-6 text-gray-900"
                wire:click="back(1)">Volver</button>
            <button type="button"
                class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                wire:click="pasoNivelProyecto">Siguiente</button>
        </div>
    </div>
    {{-- Nivel del Proyecto de Empresa --}}

    {{-- Final --}}
    <div class=" {{ $currentStep != 24 ? 'displayNone' : '' }}" id="step-24">
        <section class="flex items-center h-full  font-poppins  ">
            <div class="justify-center flex-1 mx-auto max-w-7xl ">
                <div class="px-4 py-4 mx-4 bg-white rounded-md shadow md:p-10 ">
                    <div class="flex flex-wrap items-center ">
                        <div class="w-full px-4 mb-8 lg:w-1/2 lg:mb-0">
                            <h2 class="mb-4 text-3xl font-bold text-center lg:text-left ">Enviar Formulario
                            </h2>
                            <p class="text-base leading-loose text-center text-gray-500 lg:text-left lg:max-w-lg">
                                Haz llenado todos los campos con exito
                            </p>
                            <p class="text-base leading-loose text-center text-gray-500 lg:text-left lg:max-w-lg">
                                ¿Estas seguro de querer enviar este formulario?
                            </p>
                        </div>
                        <div class="w-full px-4 lg:w-1/2">
                            <div class="flex items-center justify-center lg:justify-end">
                                <div class="flex flex-wrap items-center lg:justify-end">


                                        <button type="submit" class="inline-flex items-center justify-center w-full py-2 mb-4 text-lg font-medium leading-7 text-gray-100 bg-blue-500 border border-transparent rounded-md shadow-sm xl:w-auto hover:bg-blue-700 px-7 h-14 lg:mb-4 md:mr-4 dark:bg-blue-500 dark:hover:text-gray-100 dark:hover:bg-blue-400">
                                            Enviar</button>




                                    <button type="button" wire:click="back(1)" class="inline-flex items-center justify-center w-full py-2 mb-4 text-lg font-medium leading-7 text-blue-500 border border-blue-500 rounded-md shadow-sm xl:w-auto hover:text-gray-100 px-7 h-14 hover:bg-blue-700 hover:border-blue-700 lg:mb-4 md:mr-4 dark:border-blue-300 dark:hover:text-gray-100 dark:hover:bg-blue-400 dark:hover:border-blue-400 dark:text-blue-200">
                                    Volver</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


    {{-- Final --}}




    {{--         <div class="row setup-content {{ $currentStep != 4 ? 'hidden' : '' }}" id="step-3">
            <div class="col-xs-12">
                <div class="col-md-12">
                    <h3> Step 3</h3>
                    <table class="table">
                        <tr>
                            <td>Product Name:</td>
                            <td><strong>{{$nombre_emprendedor}}</strong></td>
                        </tr>
                        <tr>
                            <td>Product Amount:</td>
                            <td><strong>{{$numero_contacto_emprendedor}}</strong></td>
                        </tr>
                        <tr>
                            <td>Product status:</td>
                            <td><strong>{{$status ? 'Active' : 'DeActive'}}</strong></td>
                        </tr>
                        <tr>
                            <td>Product Description:</td>
                            <td><strong>{{$correo_emprendedor}}</strong></td>
                        </tr>
                        <tr>
                            <td>Product Description:</td>
                            <td><strong>{{$identificacion_emprendedor}}</strong></td>
                        </tr>
                        <tr>
                            <td>Product Description:</td>
                            <td><strong>{{$ciudad_municipio_emprendedor}}</strong></td>
                        </tr>
                        <tr>
                            <td>Product Description:</td>
                            <td><strong>{{$tipo_identificacion_emprendedor}}</strong></td>
                        </tr>
                    </table>
                    <button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>
                    <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
                </div>
            </div>
        </div> --}}
</div>


</form>



