<form wire:submit.prevent="submit">

    <div class="space-y-12 mx-auto">
        <div class="flex flex-wrap w-full mb-10">
            <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 ">RIIES- CARACTERIZACIÓN DE
                    USUARIOS</h1>
                <div class="h-1 w-20 bg-blue-500 rounded"></div>
            </div>
        </div>
        @if (session('success') == 'success')
            <div class="flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                        clip-rule="evenodd"></path>
                </svg>
                <div>
                    <span class="font-medium">Completado!</span> El formulario ha sido guardado exitosamente!
                </div>
            </div>
        @endif

        {{-- Informacion de Persona --}}
        <div class="border-b border-gray-900/10 pb-12  {{ $currentStep != 1 ? 'hidden' : '' }}" id="step-1">
            <h2 class="text-base font-semibold leading-7    ">Información </h2>
            <p class="mt-1 text-sm leading-6 text-gray-600 dark:text-gray-300">Ingresar los datos requeridos.</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 setup-content">
                <div class="sm:col-span-3">
                    <label for="first-name" class="block text-sm font-medium leading-6 ">Nombre del
                        emprendedor(a)
                    </label>
                    <div class="mt-2">
                        <input type="text" wire:model.defer="nombre_emprendedor" id="first-name"
                            autocomplete="given-name"
                            class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">
                        @error('nombre_emprendedor')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="numero_contacto_emprendedor"
                        class="block text-sm font-medium leading-6 ">Teléfono de contacto</label>
                    <div class="mt-2">
                        <input type="text" wire:model.defer="numero_contacto_emprendedor"
                            id="numero_contacto_emprendedor" autocomplete="family-name"
                            class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">
                        @error('numero_contacto_emprendedor')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror

                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="email" class="block text-sm font-medium leading-6 ">Correo Electrónico
                        de
                        Contacto</label>
                    <div class="mt-2">
                        <input id="email" wire:model.defer="correo_emprendedor" type="email" autocomplete="email"
                            class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">
                        @error('correo_emprendedor')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror

                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="ciudad_municipio_emprendedor"
                        class="block text-sm font-medium leading-6 ">Ciudad o Municipio donde esta
                        ubicado</label>
                    <div class="mt-2">
                        <input id="ciudad_municipio_emprendedor" type="text"
                            wire:model.defer="ciudad_municipio_emprendedor" autocomplete="ciudad_municipio_emprendedor"
                            class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">
                        @error('ciudad_municipio_emprendedor')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror

                    </div>
                </div>

                <div class="sm:col-span-1">
                    <label for="country" class="block text-sm font-medium leading-6 ">Tipo de
                        identificacion</label>
                    <div class="mt-2">
                        <select id="" wire:model.defer="tipo_identificacion_emprendedor" autocomplete="-name"
                            class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:max-w-xs sm:text-sm sm:leading-6">
                            <option value="" selected> Seleccione una opcion</option>
                            <option value="Cedula de Ciudadania">Cédula de Ciudadanía</option>
                            <option value="Registro Civil de Nacimiento">Registro Civil de Nacimiento</option>
                            <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                            <option value="Tarjeta de Extranjeria">Tarjeta de Extranjería</option>
                            <option value="Cedula de Extranjeria">Cédula de Extranjería</option>
                            <option value="Pasaporte">Pasaporte</option>
                        </select>
                        @error('tipo_identificacion_emprendedor')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror

                    </div>
                </div>

                <div class="sm:col-span-5">
                    <label for="identificacion_emprendedor"
                        class="block text-sm font-medium leading-6 ">Numero
                        de Identificacion</label>

                    <div class="mt-2">
                        <input type="text" wire:model.defer="identificacion_emprendedor"
                            id="identificacion_emprendedor" autocomplete="address-level1"
                            class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">
                        @error('identificacion_emprendedor')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror

                    </div>
                </div>
                <button type="button"
                    class="rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                    wire:click="pasoPrimeroInformacionUsuario">Siguiente</button>

            </div>
        </div>
        {{-- Informacion de Persona --}}

        {{-- Informacion de Ocupacion y Escolaridad --}}

        <div class="border-b border-gray-900/10 pb-12   {{ $currentStep != 2 ? 'hidden' : '' }}" id="step-2">
            <h2 class="text-base font-semibold leading-7 ">Ocupacion y Escolaridad</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Escoja los niveles de educacion que ha cursado.</p>

            <div class="mt-10 space-y-10">
                <fieldset>
                    <div class="mt-6 space-y-6">

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="ninguno" value="Ninguno" wire:model.defer="niveles_educacion_emprendedor"
                                    type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 ">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="ninguno" class="font-medium ">Ninguno</label>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="bachiller" value="Bachiller"
                                    wire:model.defer="niveles_educacion_emprendedor" type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 ">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="bachiller" class="font-medium ">Bachiller</label>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="tecnico" value="Tecnico"
                                    wire:model.defer="niveles_educacion_emprendedor" type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 ">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="tecnico" class="font-medium ">Técnico</label>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="tecnologo" value="Tecnologo"
                                    wire:model.defer="niveles_educacion_emprendedor" type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 ">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="tecnologo" class="font-medium ">Tecnólogo</label>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="profesional" value="Profesional"
                                    wire:model.defer="niveles_educacion_emprendedor" type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 ">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="profesional" class="font-medium ">Profesional</label>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="especializacion_tecnica_profesional"
                                    value="Especializacion Tecnica Profesional"
                                    wire:model.defer="niveles_educacion_emprendedor" type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 ">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="especializacion_tecnica_profesional"
                                    class="font-medium ">Especialización Técnica Profesional</label>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="especializacion_tecnologica" value="Especializacion Tecnologica"
                                    wire:model.defer="niveles_educacion_emprendedor" type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 ">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="especializacion_tecnologica"
                                    class="font-medium ">Especialización
                                    Tecnológica</label>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="especializacion_profesional" value="Especializaciones Profesionales"
                                    wire:model.defer="niveles_educacion_emprendedor" type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 ">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="especializacion_profesional"
                                    class="font-medium ">Especializaciones Profesionales</label>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="maestria" value="Maestria"
                                    wire:model.defer="niveles_educacion_emprendedor" type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 ">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="maestria" class="font-medium ">Maestría</label>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="doctorado" value="Doctorado"
                                    wire:model.defer="niveles_educacion_emprendedor" type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 ">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="doctorado" class="font-medium ">Doctorado</label>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="posdoctorado" value="Posdoctorado"
                                    wire:model.defer="niveles_educacion_emprendedor" type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 ">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="posdoctorado" class="font-medium ">Posdoctorado</label>
                            </div>
                        </div>
                    </div>
                    @error('niveles_educacion_emprendedor')
                        <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                    @enderror

                </fieldset>

                <fieldset>
                    <legend class="text-sm font-semibold leading-6 ">Ocupacion: </legend>
                    <p class="mt-1 text-sm leading-6 text-gray-600">¿Cuál es su ocupación?</p>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input id="empleado" value="Empleado" wire:model.defer="ocupacion_emprendedor"
                                name="ocupacion_emprendedor" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="empleado"
                                class="block text-sm font-medium leading-6 ">Empleado</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="trabajador_independiente" value="Trabajador Independiente"
                                wire:model.defer="ocupacion_emprendedor" name="ocupacion_emprendedor" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="trabajador_independiente"
                                class="block text-sm font-medium leading-6 ">Trabajador
                                Independiente</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="egresado_sena" value="Egresado SENA" wire:model.defer="ocupacion_emprendedor"
                                name="ocupacion_emprendedor" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="egresado_sena"
                                class="block text-sm font-medium leading-6 ">Egresado
                                SENA</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="estudiante_universitario" value="Estudiante Univestitario"
                                wire:model.defer="ocupacion_emprendedor" name="ocupacion_emprendedor" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="estudiante_universitario"
                                class="block text-sm font-medium leading-6 ">Estudiante
                                Universitario</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="instructor_sena" value="Instructor SENA"
                                wire:model.defer="ocupacion_emprendedor" name="ocupacion_emprendedor" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="instructor_sena"
                                class="block text-sm font-medium leading-6 ">Instructor Sena</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="aprendiz_sena" value="Aprendiz SENA" wire:model.defer="ocupacion_emprendedor"
                                name="ocupacion_emprendedor" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="aprendiz_sena"
                                class="block text-sm font-medium leading-6 ">Aprendiz
                                Sena</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="investigador_universidad" value="Investigador Universidad"
                                wire:model.defer="ocupacion_emprendedor" name="ocupacion_emprendedor" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="investigador_universidad"
                                class="block text-sm font-medium leading-6 ">Investigador
                                Universidad</label>
                        </div>
                        @error('ocupacion_emprendedor')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror

                        <div class="flex items-center gap-x-3">
                            <input id="otro_ocupacion_emprendedor" value="otro"
                                wire:model.defer="ocupacion_emprendedor" name="ocupacion_emprendedor" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="otro_ocupacion_emprendedor"
                                class="block text-sm font-medium leading-6 ">Otro</label>
                            <input type="text" wire:model.defer="otra_ocupacion_emprendedor"
                                id="input-otro-ocupacion_emprendedor" autocomplete=""
                                class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">
                        </div>

                    </div>
                </fieldset>

                <button type="button" class="text-base mr-2 font-semibold leading-6 "
                    wire:click="back(1)">Volver</button>
                <button type="button"
                    class="rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                    wire:click="pasoSegundoOcupacionEscolaridad">Siguiente</button>

            </div>


        </div>
        {{-- Informacion de Ocupacion y Escolaridad --}}


        {{-- Formulario si es Empleado --}}
        <div class="border-b border-gray-900/10 pb-12  {{ $currentStep != 3 ? 'hidden' : '' }}" id="step-3">
            <div class="mt-10 space-y-10">
                <fieldset>
                    <h2 class="text-base font-semibold leading-7 ">Empleado </h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Su idea de negocio es...</p>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input id="proyecto_propio_idea" value="Un proyecto a nombre propio"
                                wire:model.defer="empleado_idea_negocio" type="radio" name="empleado_idea_negocio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">

                            <label for="proyecto_propio_idea"
                                class="block text-sm font-medium leading-6 ">Un
                                proyecto a nombre propio</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="proyecto_empresa_empleado"
                                value="Una idea de proyecto de la empresa para la cual es empleado"
                                wire:model.defer="empleado_idea_negocio" name="empleado_idea_negocio" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">

                            <label for="proyecto_empresa_empleado"
                                class="block text-sm font-medium leading-6 ">Una idea
                                de proyecto de la empresa para la cual es empleado</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="otro_idea_negocio" value="otro" wire:model.defer="empleado_idea_negocio"
                                type="radio" name="empleado_idea_negocio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="otro_idea_negocio"
                                class="block text-sm font-medium leading-6 ">Otro</label>
                            <input type="text" wire:model.defer="otro_idea_negocio" autocomplete=""
                                class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">
                        </div>
                        @error('empleado_idea_negocio')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror

                    </div>
                </fieldset>
                <button type="button" class="text-base mr-2 font-semibold leading-6 "
                    wire:click="back()">Volver</button>
                <button type="button"
                    class="rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                    wire:click="pasoSiOcupacionEmpleado">Siguiente</button>
            </div>
        </div>
        {{-- Formulario si es Empleado --}}


        {{-- Tipo de Usuario --}}
        <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 4 ? 'hidden' : '' }}" id="step-4">
            <div class="mt-10 space-y-10">
                <fieldset>
                    <h2 class="text-base font-semibold leading-7 ">Tipo de Usuario </h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">En la actualidad que opción te define mejor.</p>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input id="tipo_usuario_emprendedor" value="Emprendedor" wire:model.defer="tipo_usuario"
                                type="radio" name="tipo_usuario" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="tipo_usuario_emprendedor"
                                class="block text-sm font-medium leading-6 ">Emprendedor</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="tipo_usuario_empresa" value="Empresa" wire:model.defer="tipo_usuario"
                                type="radio" name="tipo_usuario" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="tipo_usuario_empresa"
                                class="block text-sm font-medium leading-6 ">Empresa</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="otro_tipo_usuario" value="otro" wire:model.defer="tipo_usuario"
                                type="radio" name="tipo_usuario" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="otro_tipo_usuario"
                                class="block text-sm font-medium leading-6 ">Otro</label>
                            <input type="text" wire:model.defer="otro_tipo_usuario" autocomplete=""
                                class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    @error('tipo_usuario')
                        <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                    @enderror

                </fieldset>
                <button type="button" class="text-base mr-2 font-semibold leading-6 "
                    wire:click="back(3)">Volver</button>
                <button type="button"
                    class="rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                    wire:click="pasoTipoUsuario">Siguiente</button>
            </div>
        </div>
        {{-- Tipo de Usuario --}}


        {{-- Tipo de Empresa --}}
        <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 5 ? 'hidden' : '' }}" id="step-4">
            <div class="mt-10 space-y-10">
                <fieldset>
                    <h2 class="text-base font-semibold leading-7 ">Tipo de Empresa </h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">¿Cuál es su tipo de empresa?</p>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input id="tipo_empresa_persona_natural" value="Persona Natural"
                                wire:model.defer="tipo_empresa" type="radio" name="tipo_empresa"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="tipo_empresa_persona_natural"
                                class="block text-sm font-medium leading-6 ">Persona Natural</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="tipo_empresa_juridica" value="Persona Juridica"
                                wire:model.defer="tipo_empresa" type="radio" name="tipo_empresa"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="tipo_empresa_juridica"
                                class="block text-sm font-medium leading-6 ">Persona
                                Juridica</label>
                        </div>
                    </div>
                    @error('tipo_empresa')
                        <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                    @enderror

                </fieldset>

                <button type="button" class="text-base mr-2 font-semibold leading-6 "
                    wire:click="back(1)">Volver</button>
                <button type="button"
                    class="rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                    wire:click="pasoSiTipoUsuarioEmpresa">Siguiente</button>

            </div>
        </div>
        {{--  SI PERSONA JURIDICA --}}
        <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 6 ? 'hidden' : '' }}" id="step-6">
            <div class="mt-10 space-y-10">
                <fieldset>
                    <h2 class="text-base font-semibold leading-7 ">Tipo de persona jurídica</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Seleccione su tipo de persona jurídica.</p>
                    <div class="mt-6 space-y-6">
                        <select id="" wire:model.defer="tipo_persona_juridica" autocomplete=""
                            class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:max-w-xs sm:text-sm sm:leading-6">
                            <option value="">Seleccione una Opción</option>
                            <option value="Sociedad Anónima">Sociedad Anónima</option>
                            <option value="Sociedad por acciones simplificadas SAS">Sociedad por acciones simplificadas
                                SAS
                            </option>
                            <option value="Sociedad de responsabilidad limitada LTDA">Sociedad de responsabilidad
                                limitada LTDA
                            </option>
                            <option value="Sociedad en comandita simple y por acciones">Sociedad en comandita simple y
                                por acciones
                            </option>
                            <option value="Sociedad Colectiva">Sociedad Colectiva</option>
                            <option value="Sociedades comerciales de beneficio e interés colectivo">Sociedades
                                comerciales de beneficio e
                                interés colectivo</option>
                            <option value="Empresa unipersonal">Empresa unipersonal</option>
                            <option value="Entidad sin ánimo de lucro ESAL">Entidad sin ánimo de lucro ESAL</option>
                            <option value="Fundación">Fundación</option>
                        </select>
                    </div>
                    @error('tipo_persona_juridica')
                        <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                    @enderror

                </fieldset>
                <button type="button" class="text-base mr-2 font-semibold leading-6 "
                    wire:click="back(1)">Volver</button>
                <button type="button"
                    class="rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                    wire:click="pasoSiTipoEmpresaJuridica">Siguiente</button>

            </div>
        </div>
        {{--  SI PERSONA JURIDICA --}}

        {{-- Tipo de Empresa --}}

        {{-- Datos de la empresa --}}
        <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 7 ? 'hidden' : '' }}" id="step-7">
            <div class="mt-10 space-y-10">
                <fieldset>
                    <h2 class="text-base font-semibold leading-7 ">Datos Empresa </h2>
                    <div class="mt-6 space-y-6">

                        <div class="col-span-full">
                            <label for="empresa_nit" class="block text-sm font-medium leading-6 ">Escriba
                                el
                                número del Número de Identificación Tributaria de la empresa</label>
                            <div class="mt-2">
                                <input type="text" wire:model.defer="empresa_nit" id="empresa_nit"
                                    autocomplete="empresa_nit"
                                    class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">

                                @error('empresa_nit')
                                    <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                                @enderror

                            </div>


                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <h2 class="text-base font-semibold leading-7 ">Tamaño de la empresa</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Revise la tabla los valores de ventas por sector
                        para
                        2022 y responda en que tamaño de empresa se encuentra.</p>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input id="microempresa" value="Microempresa" wire:model.defer="empresa_tamaño"
                                type="radio" name="empresa_tamaño"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="microempresa"
                                class="block text-sm font-medium leading-6 ">Microempresa</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="empresa_pequeña" value="Pequeña Empresa" wire:model.defer="empresa_tamaño"
                                type="radio" name="empresa_tamaño"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="empresa_pequeña"
                                class="block text-sm font-medium leading-6 ">Pequeña
                                Empresa</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="empresa_mediana" value="Mediana empresa" wire:model.defer="empresa_tamaño"
                                type="radio" name="empresa_tamaño"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="empresa_mediana"
                                class="block text-sm font-medium leading-6 ">Mediana
                                empresa</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="empresa_grande" value="Gran empresa" wire:model.defer="empresa_tamaño"
                                type="radio" name="empresa_tamaño"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="empresa_grande" class="block text-sm font-medium leading-6 ">Gran
                                empresa</label>
                        </div>
                        @error('empresa_tamaño')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror

                    </div>
                </fieldset>

                <fieldset>
                    <h2 class="text-base font-semibold leading-7 ">Su empresa cuenta con una unidad de
                        innovación o desarrollo de producto
                    </h2>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input id="empresa_innovacion_desarrollo_producto_si" value="Si"
                                wire:model.defer="empresa_innovacion_desarrollo_producto" type="radio"
                                name="empresa_innovacion_desarrollo_producto"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="empresa_innovacion_desarrollo_producto_si"
                                class="block text-sm font-medium leading-6 ">Si</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="empresa_innovacion_desarrollo_producto_no" value="No"
                                wire:model.defer="empresa_innovacion_desarrollo_producto" type="radio"
                                name="empresa_innovacion_desarrollo_producto"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="empresa_innovacion_desarrollo_producto_no"
                                class="block text-sm font-medium leading-6 ">No</label>
                        </div>
                        @error('empresa_innovacion_desarrollo_producto')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror

                    </div>
                </fieldset>

                <fieldset>
                    <h2 class="text-base font-semibold leading-7 ">En la actualidad cuenta con un proyecto
                        de
                        desarrollo de producto o servicios del cual ya tiene avances y requiere desarrollar prototipos
                    </h2>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input id="empresa_proyecto_desarrollo_avances_requiere_prototipos_si"
                                wire:model.defer="empresa_proyecto_desarrollo_avances_requiere_prototipos"
                                value="Si" type="radio"
                                name="empresa_proyecto_desarrollo_avances_requiere_prototipos"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="empresa_proyecto_desarrollo_avances_requiere_prototipos_si"
                                class="block text-sm font-medium leading-6 ">Si</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="empresa_proyecto_desarrollo_avances_requiere_prototipos_no"
                                wire:model.defer="empresa_proyecto_desarrollo_avances_requiere_prototipos"
                                value="No" type="radio"
                                name="empresa_proyecto_desarrollo_avances_requiere_prototipos"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="empresa_proyecto_desarrollo_avances_requiere_prototipos_no"
                                class="block text-sm font-medium leading-6 ">No</label>
                        </div>
                        @error('empresa_proyecto_desarrollo_avances_requiere_prototipos')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror

                    </div>
                </fieldset>

                <button type="button" class="text-base mr-2 font-semibold leading-6 "
                    wire:click="back(1)">Volver</button>
                <button type="button"
                    class="rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                    wire:click="pasoDatosEmpresa">Siguiente</button>


            </div>
        </div>
        {{-- Datos de la empresa --}}


        {{-- Necesidades de Usuarios sin Proyecto concreto --}}
        <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 8 ? 'hidden' : '' }}" id="step-8">
            <div class="mt-10 space-y-10">
                <fieldset>
                    <h2 class="text-base font-semibold leading-7 ">Necesidades de Usuarios sin Proyecto
                        concreto
                    </h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">¿Cuál es la necesidad de asesoría por la cuál se
                        acerca
                        a los programas del SENA?</p>

                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input id="asesoria_networking" wire:model.defer="necesidad_asesoria_sena"
                                value="Networking" type="checkbox" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="asesoria_networking"
                                class="block text-sm font-medium leading-6 ">Networking (generar
                                redes)</label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="asesoria_mejorar_modelo_negocio"
                                value="Hacer cambios o mejoras al modelo de negocio"
                                wire:model.defer="necesidad_asesoria_sena" type="checkbox"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="asesoria_mejorar_modelo_negocio"
                                class="block text-sm font-medium leading-6 ">Hacer cambios o mejoras al
                                modelo
                                de negocio
                            </label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="asesoria_desarrollo_nuevos_productos"
                                value="Desarrollo de nuevos productos o servicios"
                                wire:model.defer="necesidad_asesoria_sena" type="checkbox"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="asesoria_desarrollo_nuevos_productos"
                                class="block text-sm font-medium leading-6 ">Desarrollo de nuevos
                                productos o
                                servicios
                            </label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="asesoria_fuentes_financiacion_convocatorias"
                                value="Conocer posibles fuentes de financiación o convocatorias del sistema CT+i"
                                wire:model.defer="necesidad_asesoria_sena" type="checkbox"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="asesoria_fuentes_financiacion_convocatorias"
                                class="block text-sm font-medium leading-6 ">Conocer posibles fuentes de
                                financiación o convocatorias del sistema CT+i
                            </label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="asesoia_fortalecer_empresa"
                                value="Fortalecimiento de mi empresa en temas empresariales"
                                wire:model.defer="necesidad_asesoria_sena" type="checkbox"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="asesoia_fortalecer_empresa"
                                class="block text-sm font-medium leading-6 ">Fortalecimiento de mi empresa
                                en
                                temas empresariales (Gerenciales, financieros, de mercados, etc)
                            </label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="asesoria_aprender_tecnologias" value="Conocer o aprender sobre tecnologías 4.0"
                                wire:model.defer="necesidad_asesoria_sena" type="checkbox"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="asesoria_aprender_tecnologias"
                                class="block text-sm font-medium leading-6 ">Conocer o aprender sobre
                                tecnologías 4.0
                            </label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="asesoria_formacion_temas_especializados"
                                value="Formación en temas especializados"
                                wire:model.defer="necesidad_asesoria_sena" type="checkbox"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="asesoria_formacion_temas_especializados"
                                class="block text-sm font-medium leading-6 ">Formación en temas
                                especializados
                            </label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="asesoria_oferta_sena" value="Conocer la oferta SENA"
                                wire:model.defer="necesidad_asesoria_sena" type="checkbox"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="asesoria_oferta_sena"
                                class="block text-sm font-medium leading-6 ">Conocer la oferta SENA
                            </label>
                        </div>
                        @error('necesidad_asesoria_sena')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>
                <button type="button" class="text-base mr-2 font-semibold leading-6 "
                    wire:click="back(1)">Volver</button>
                <button type="button"
                    class="rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                    wire:click="pasoUsuariosSinProyectoConcreto">Siguiente</button>

            </div>

        </div>
        {{-- Necesidades de Usuarios sin Proyecto concreto --}}


        {{-- Formulario Emprendedores --}}
        <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 10 ? 'hidden' : '' }}" id="step-10">
            <div class="mt-10 space-y-10">
                <fieldset>
                    <h2 class="text-base font-semibold leading-7 ">Emprendedores </h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">En que nivel clasificaría su idea de emprendimiento
                        o
                        idea de proyecto</p>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input id="no_idea_innovacion"
                                value="Aun no tengo una idea de negocio o proyecto de innovacion concreto"
                                wire:model.defer="emprendedores_nivel_idea" type="radio"
                                name="emprendedores_nivel_idea" class="h-4 w-4 border-gray-300 text-indigo-600 ">

                            <label for="no_idea_innovacion"
                                class="block text-sm font-medium leading-6 ">Aún
                                no tengo una idea de negocio o proyecto de innovación concreto
                            </label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="idea_sin_prototipo"
                                value="Solo tengo una idea/proyecto pero nunca he realizado un prototipo"
                                wire:model.defer="emprendedores_nivel_idea" type="radio"
                                name="emprendedores_nivel_idea" class="h-4 w-4 border-gray-300 text-indigo-600 ">

                            <label for="idea_sin_prototipo"
                                class="block text-sm font-medium leading-6 ">Solo
                                tengo una idea/proyecto pero nunca he realizado un prototipo</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="idea_prototipo_funcional"
                                value="Tengo una idea de la cual ya he realizado un prototipo funcional pero sin ventas"
                                wire:model.defer="emprendedores_nivel_idea" type="radio"
                                name="emprendedores_nivel_idea" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="idea_prototipo_funcional"
                                class="block text-sm font-medium leading-6 ">Tengo una idea de la cual ya
                                he
                                realizado un prototipo funcional pero sin ventas</label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="proyecto_empresa_empleadora" value="Es un proyecto para la empresa empleadora"
                                wire:model.defer="emprendedores_nivel_idea" type="radio"
                                name="emprendedores_nivel_idea" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="proyecto_empresa_empleadora"
                                class="block text-sm font-medium leading-6 ">Es un proyecto para la
                                empresa
                                empleadora</label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="producto_elaborado_funcional"
                                value="Tengo un producto elaborado con el que he realizado ventas efectivas (unidad productiva)"
                                wire:model.defer="emprendedores_nivel_idea" type="radio"
                                name="emprendedores_nivel_idea" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="producto_elaborado_funcional"
                                class="block text-sm font-medium leading-6 ">Tengo un producto elaborado
                                con
                                el que he realizado ventas efectivas (unidad productiva)</label>
                        </div>
                        @error('emprendedores_nivel_idea')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>
                <button type="button" class="text-base mr-2 font-semibold leading-6 "
                    wire:click="back(1)">Volver</button>
                <button type="button"
                    class="rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                    wire:click="pasoFormularioEmprendedores">Siguiente</button>

            </div>
        </div>
        {{-- Formulario Emprendedores --}}

        {{-- Elementos de la Idea/proyecto --}}
        <div class="border-b border-gray-900/10 pb-12  {{ $currentStep != 11 ? 'hidden' : '' }}" id="step-11">
            <div class="mt-10 space-y-10">
                <h2 class="text-base font-semibold leading-7 ">Elementos de la Idea/proyecto </h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">En la actualidad que opción te define mejor.</p>
                <div class="mt-6 space-y-6">
                    <div class="col-span-full">
                        <label for="nombre_emprendimiento"
                            class="block text-sm font-medium leading-6 ">Nombre de la Idea</label>
                        <div class="mt-2">
                            <input type="text" wire:model.defer="nombre_idea" id="nombre_idea"
                                autocomplete="nombre_idea"
                                class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">
                            @error('nombre_idea')
                                <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="sm:col-span-3 mt-4">
                            <label for="descripcion_idea"
                                class="block text-sm font-medium leading-6 ">Describa brevemente en que
                                consiste la idea</label>
                            <div class="mt-2">
                                <input id="descripcion_idea" wire:model.defer="descripcion_idea"
                                    autocomplete="descripcion_idea"
                                    class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">
                                @error('descripcion_idea')
                                    <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                    </div>
                </div>

                <fieldset>
                    <div class="col-span-full mt-5">
                        <label for="" class="mb-4 block text-sm font-medium leading-6 ">Califique
                            en
                            que nivel valora actualmente el siguiente elemento</label>
                        <ul class="items-center w-full text-sm font-medium text-black bg-white border border-gray-400 rounded-lg sm:flex">

                            <li class="w-full">
                                <div class="flex items-center pl-3">
                                    <label for=""
                                        class="w-full py-3 ml-2 text-sm font-medium text-black">Modelo
                                        de Negocio</label>
                                </div>
                            </li>

                            <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                <div class="flex items-center pl-3">
                                    <input id="modelo_negocio_no_desarrollado" type="radio" name="modelo_negocio"
                                        value="No desarrollado" wire:model.defer="modelo_negocio"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="modelo_negocio_no_desarrollado"
                                        class="w-full py-3 ml-2 text-sm font-medium text-black">No desarrollado
                                    </label>
                                </div>
                            </li>

                            <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                <div class="flex items-center pl-3">
                                    <input id="modelo_negocio_desarrollado_conceptual" type="radio"
                                        name="modelo_negocio" value="Desarrollado a nivel conceptual"
                                        wire:model.defer="modelo_negocio"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="modelo_negocio_desarrollado_conceptual"
                                        class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado a nivel
                                        conceptual (canvas de negocio)</label>
                                </div>
                            </li>

                            <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                <div class="flex items-center pl-3">
                                    <input id="modelo_negocio_desarrollado" type="radio" name="modelo_negocio"
                                        value="Desarrollado y probado con ejercicios de validacion"
                                        wire:model.defer="modelo_negocio"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="modelo_negocio_desarrollado"
                                        class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado y probado
                                        con
                                        ejercicios de validación </label>
                                </div>
                            </li>

                            <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                <div class="flex items-center pl-3">
                                    <input id="modelo_negocio_desarrollado_probando" type="radio"
                                        name="modelo_negocio"
                                        value="Desarrollado y probando en la practica con ventas efectivas"
                                        wire:model.defer="modelo_negocio"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="modelo_negocio_desarrollado_probando"
                                        class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado y se esta
                                        probando en la práctica con ventas efectivas </label>
                                </div>
                            </li>
                        </ul>
                        @error('modelo_negocio')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>

                <fieldset>
                    <div class="col-span-full mt-5">
                        <label for="" class="mb-4 block text-sm font-medium leading-6 ">Califique
                            en
                            que nivel valora actualmente el siguiente elemento</label>


                        <ul
                            class="items-center w-full text-sm font-medium text-black bg-white border border-gray-400 rounded-lg sm:flex">

                            <li class="w-full">
                                <div class="flex items-center pl-3">
                                    <label for=""
                                        class="w-full py-2 ml-2 text-sm font-medium text-black">Producto
                                        o Servicio </label>
                                </div>
                            </li>

                            <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                <div class="flex items-center pl-3">
                                    <input id="producto_servicio_no_desarrollado" type="radio"
                                        name="producto_servicio" value="No desarrollado"
                                        wire:model.defer="producto_servicio"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="producto_servicio_no_desarrollado"
                                        class="w-full py-3 ml-2 text-sm font-medium text-black">No desarrollado
                                    </label>
                                </div>
                            </li>

                            <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                <div class="flex items-center pl-3">
                                    <input id="producto_servicio_desarrollado_conceptual" type="radio"
                                        name="producto_servicio" value="Desarrollado a nivel de prototipo conceptual"
                                        wire:model.defer="producto_servicio"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="producto_servicio_desarrollado_conceptual"
                                        class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado a nivel de
                                        prototipo conceptual (gráficos, mockup)</label>
                                </div>
                            </li>

                            <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                <div class="flex items-center pl-3">
                                    <input id="producto_servicio_desarrollado" type="radio"
                                        name="producto_servicio"
                                        value="Desarrollado a nivel de modelo de comprobación validado con usuario"
                                        wire:model.defer="producto_servicio"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="producto_servicio_desarrollado"
                                        class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado a nivel de
                                        modelo de comprobación validado con usuario</label>
                                </div>
                            </li>

                            <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                <div class="flex items-center pl-3">
                                    <input id="producto_servicio_desarrollado_prototipo_funcional" type="radio"
                                        name="producto_servicio" value="Desarrollado a nivel de prototipo funcional"
                                        wire:model.defer="producto_servicio"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="producto_servicio_desarrollado_prototipo_funcional"
                                        class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado a nivel de
                                        prototipo funcional (a escala) </label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                <div class="flex items-center pl-3">
                                    <input id="producto_servicio_desarrollado_producto_minimo_viable" type="radio"
                                        name="producto_servicio"
                                        value="Desarrollado a nivel de producto mínimo viable"
                                        wire:model.defer="producto_servicio"
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
                                        name="producto_servicio"
                                        value="Desarrollado y desplegado actualmente con ventas en el mercado Producto o Servicio"
                                        wire:model.defer="producto_servicio"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="producto_servicio_desarrollado_desplegado"
                                        class="w-full py-3 ml-2 text-sm font-medium text-black">Desarrollado y
                                        desplegado
                                        actualmente con ventas en el mercado Producto o Servicio </label>
                                </div>
                            </li>
                        </ul>
                        @error('producto_servicio')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>

                <fieldset>
                    <div class="col-span-full mt-5">
                        <label for="" class="mb-4 block text-sm font-medium leading-6 ">Califique
                            en
                            que nivel valora actualmente el siguiente elemento</label>

                        <ul
                            class="items-center w-full text-sm font-medium text-black bg-white border border-gray-400 rounded-lg sm:flex">

                            <li class="w-full">
                                <div class="flex items-center pl-3">
                                    <label for=""
                                        class="w-full py-2 ml-2 text-sm font-medium text-black">Nivel de
                                        validación del producto o servicio</label>
                                </div>
                            </li>

                            <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                <div class="flex items-center pl-3">
                                    <input id="no_validacion_producto" type="checkbox"
                                        value="No he validado con externos" wire:model.defer="validacion_producto"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="no_validacion_producto"
                                        class="w-full py-3 ml-2 text-sm font-medium text-black">No he validado con
                                        externos
                                    </label>
                                </div>
                            </li>

                            <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                <div class="flex items-center pl-3">
                                    <input id="validacion_producto_tecnicas" type="checkbox"
                                        value="He realizado validaciones tecnicas con usuarios"
                                        wire:model.defer="validacion_producto"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="validacion_producto_tecnicas"
                                        class="w-full py-3 ml-2 text-sm font-medium text-black">He realizado
                                        validaciones
                                        técnicas con usuarios</label>
                                </div>
                            </li>

                            <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                <div class="flex items-center pl-3">
                                    <input id="validacion_producto_ejercicios_entrevistas" type="checkbox"
                                        value="He realizado ejercicios de entrevistas, focus group o similares documentados"
                                        wire:model.defer="validacion_producto"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="validacion_producto_ejercicios_entrevistas"
                                        class="w-full py-3 ml-2 text-sm font-medium text-black">He realizado ejercicios
                                        de
                                        entrevistas, focus group o similares documentados</label>
                                </div>
                            </li>

                            <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                <div class="flex items-center pl-3">
                                    <input id="validacion_producto_compra_firmadas" type="checkbox"
                                        value="Tengo intenciones de compra firmadas"
                                        wire:model.defer="validacion_producto"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="validacion_producto_compra_firmadas"
                                        class="w-full py-3 ml-2 text-sm font-medium text-black">Tengo intenciones de
                                        compra
                                        firmadas </label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                <div class="flex items-center pl-3">
                                    <input id="validacion_producto_estudios_mercado" type="checkbox"
                                        value="He desarrollado estudios de mercado"
                                        wire:model.defer="validacion_producto"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="validacion_producto_estudios_mercado"
                                        class="w-full py-3 ml-2 text-sm font-medium text-black">He desarrollado
                                        estudios de
                                        mercado </label>
                                </div>
                            </li>
                            <li class="w-full border-b border-gray-600 sm:border-b-0 sm:border-r">
                                <div class="flex items-center pl-3">
                                    <input id="validacion_producto_ventas_efectivas" type="checkbox"
                                        value="He desarrollado ventas efectivas"
                                        wire:model.defer="validacion_producto"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="validacion_producto_ventas_efectivas"
                                        class="w-full py-3 ml-2 text-sm font-medium text-black">He desarrollado ventas
                                        efectivas
                                    </label>
                                </div>
                            </li>
                        </ul>
                        @error('validacion_producto')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>

                <fieldset>
                    <div class="col-span-full mt-5">
                        <label for="idea_genera_ventas" class="block text-sm font-medium leading-6 ">Su
                            idea
                            de negocios o proyecto de innovación actualmente genera ventas permanentes</label>
                        <div class="mt-6 space-y-6">

                            <div class="flex items-center gap-x-3">
                                <input id="idea_genera_ventas_permanentes_si" value="Si"
                                    wire:model.defer="idea_genera_ventas" type="radio" name="idea_genera_ventas"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 ">
                                <label for="idea_genera_ventas_permanentes_si"
                                    class="block text-sm font-medium leading-6 ">Si</label>
                            </div>

                            <div class="flex items-center gap-x-3">
                                <input id="idea_genera_ventas_permanentes_no" value="No"
                                    wire:model.defer="idea_genera_ventas" type="radio" name="idea_genera_ventas"
                                    class="h-4 w-4 border-gray-300 text-indigo-600 ">
                                <label for="idea_genera_ventas_permanentes_no"
                                    class="block text-sm font-medium leading-6 ">No</label>
                            </div>
                            @error('idea_genera_ventas')
                                <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </fieldset>

                <button type="button" class="text-base mr-2 font-semibold leading-6 "
                    wire:click="back(1)">Volver</button>
                <button type="button"
                    class="rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                    wire:click="pasoFormularioIdeaProyecto">Siguiente</button>
            </div>
        </div>
        {{-- Elementos de la Idea/proyecto --}}


        {{-- Ventas Pomedio Mes --}}
        <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 12 ? 'hidden' : '' }}" id="step-12">
            <div class="mt-10 space-y-10">
                <fieldset>
                    <h2 class="text-base font-semibold leading-7 ">Ingresos o ventas promedio mes</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Ingresar el promedio de ventas que tiene por mes.
                    </p>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input type="text" wire:model.defer="ventas_promedio_mes" id=""
                                autocomplete=""
                                class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">

                        </div>
                        @error('ventas_promedio_mes')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>
                <button type="button" class="text-base mr-2 font-semibold leading-6 "
                    wire:click="back(11)">Volver</button>
                <button type="button"
                    class="rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                    wire:click="pasoVentasPorMesIdea">Siguiente</button>

            </div>
        </div>
        {{-- Ventas Pomedio Mes --}}

        {{-- Generacion de Empleos --}}
        <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 13 ? 'hidden' : '' }}" id="step-13">
            <div class="mt-10 space-y-10">
                <fieldset>
                    <h2 class="text-base font-semibold leading-7 ">Su idea que Cantidad de empleos genera
                        actualmente</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Ingresar la cantidad de empleos que genera.</p>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input type="text" wire:model.defer="idea_cantidad_empleados_genera" id=""
                                autocomplete=""
                                class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">

                        </div>
                        @error('idea_cantidad_empleados_genera')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>
                <button type="button" class="text-base mr-2 font-semibold leading-6 "
                    wire:click="back(11)">Volver</button>
                <button type="button"
                    class="rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                    wire:click="pasoEmpleadosGenera">Siguiente</button>
            </div>
        </div>
        {{-- Generacion de Empleos --}}

        {{-- Programa o servicio por el que ingresa --}}
        <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 9 ? 'hidden' : '' }}" id="step-9">
            <div class="mt-10 space-y-10">
                <fieldset>
                    <h2 class="text-base font-semibold leading-7 ">Programa o servicio por el que ingresa
                    </h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">A Cuál de las unidades SENA ingresó como proyecto.
                    </p>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center">
                            <select id="" wire:model.defer="programa_sena_ingreso" autocomplete=""
                                class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:max-w-xs sm:text-sm sm:leading-6">
                                <option value="">Seleccione una Opcion</option>
                                <option value="Centros de Formacion">Centros de Formacion</option>
                                <option value="Emprendimiento">Emprendimiento</option>
                                <option value="Hub Innovacion">Hub de Innovacion</option>
                                <option value="Tecnoparque">Tecnoparque</option>
                                <option value="Extensionismo">Extensionismo</option>

                            </select>
                        </div>
                        @error('programa_sena_ingreso')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>
                <button type="button" class="text-base mr-2 font-semibold leading-6 "
                    wire:click="back(1)">Volver</button>
                <button type="button"
                    class="rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                    wire:click="pasoProgramaIngreso">Siguiente</button>

            </div>
        </div>
        {{-- Programa o servicio por el que ingresa --}}

        {{-- Seleccion:Tecnoparque --}}
        <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 14 ? 'hidden' : '' }}" id="step-14">
            <h2 class="text-base font-semibold leading-7 ">Tecnoparque Servicios</h2>
            <div class="mt-10 space-y-10">

                {{-- Tecnoparque Postulado --}}
                <fieldset>
                    <legend class="text-sm font-semibold leading-6 ">A que Tecnoparque postuló su idea
                        inicialmente
                    </legend>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input id="tecnoparque_medellin" wire:model.defer="tecnoparque_postulado"
                                value="Tecnoparque Medellin" type="radio" name="tecnoparque_postulado"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="tecnoparque_medellin"
                                class="block text-sm font-medium leading-6 ">Tecnoparque Nodo
                                Medellín</label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="tecnoparque_rionegro" value="Tecnoparque Rionegro"
                                wire:model.defer="tecnoparque_postulado" type="radio" name="tecnoparque_postulado"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="tecnoparque_rionegro"
                                class="block text-sm font-medium leading-6 ">Tecnoparque Nodo Rionegro
                            </label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="otro_tecnoparque_postulado" value="otro"
                                wire:model.defer="tecnoparque_postulado" type="radio"
                                name="tecnoparque_postulado" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="otro_tecnoparque_postulado"
                                class="block text-sm font-medium leading-6 ">Otro</label>
                            <input type="text" wire:model.defer="otro_tecnoparque_postulado"
                                id="input-otro-tecnoparque_postulado" autocomplete=""
                                class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">
                        </div>
                        @error('tecnoparque_postulado')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>
                {{-- Tecnoparque Postulado --}}

                {{-- Servicios accedidos inicialmente en tecnoparque --}}
                <fieldset>
                    <legend class="text-sm font-semibold leading-6 ">Indique a que servicios accedió el
                        usuario inicialmente en el Tecnoparque
                    </legend>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input id="fortalecimiento_servicio_tecnoparque"
                                wire:model.defer="servicios_accedidos_tecnoparque" value="Fortalecimiento"
                                type="radio" name="servicios_accedidos_tecnoparque"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="fortalecimiento_servicio_tecnoparque"
                                class="block text-sm font-medium leading-6 ">Fortalecimiento</label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="desarrollo_tecnologico_servicio_tecnoparque"
                                value="Proyecto para desarrollo tecnológico"
                                wire:model.defer="servicios_accedidos_tecnoparque" type="radio"
                                name="servicios_accedidos_tecnoparque"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="desarrollo_tecnologico_servicio_tecnoparque"
                                class="block text-sm font-medium leading-6 ">Proyecto para desarrollo
                                tecnológico
                            </label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="proyecto_articulacion_servicio" value="Proyecto en proceso de articulación"
                                wire:model.defer="servicios_accedidos_tecnoparque" type="radio"
                                name="servicios_accedidos_tecnoparque"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="proyecto_articulacion_servicio"
                                class="block text-sm font-medium leading-6 ">Proyecto en proceso de
                                articulación
                            </label>
                        </div>
                        @error('servicios_accedidos_tecnoparque')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>
                {{-- Servicios accedidos inicialmente en tecnoparque --}}

                {{-- línea técnica o líneas técnicas se adscribe la idea --}}
                <fieldset>
                    <legend class="text-sm font-semibold leading-6 ">A que línea técnica o líneas
                        técnicas se
                        adscribe la idea
                    </legend>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input id="linea_biotecnologia" wire:model.defer="linea_tecnica_adscribe_tecnoparque"
                                value="Biotecnología" type="checkbox"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="linea_biotecnologia"
                                class="block text-sm font-medium leading-6 ">Biotecnología</label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="linea_ingenieria_diseño" value="Ingeniería y Diseño"
                                wire:model.defer="linea_tecnica_adscribe_tecnoparque" type="checkbox"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="linea_ingenieria_diseño"
                                class="block text-sm font-medium leading-6 ">Ingeniería y Diseño
                            </label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="linea_electronica_telecomunicaciones"
                                value="Electrónica y telecomunicaciones"
                                wire:model.defer="linea_tecnica_adscribe_tecnoparque" type="checkbox"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="linea_electronica_telecomunicaciones"
                                class="block text-sm font-medium leading-6 ">Electrónica y
                                telecomunicaciones
                            </label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="linea_tecnologia_virtuales" value="Tecnologías virtuales"
                                wire:model.defer="linea_tecnica_adscribe_tecnoparque" type="checkbox"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="linea_tecnologia_virtuales"
                                class="block text-sm font-medium leading-6 ">Tecnologías virtuales
                            </label>
                        </div>
                        @error('linea_tecnica_adscribe_tecnoparque')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>
                {{-- línea técnica o líneas técnicas se adscribe la idea --}}

                {{-- Cuales condiciones cumple la idea --}}
                <fieldset>
                    <legend class="text-sm font-semibold leading-6 ">Señale cuáles condiciones cumple la
                        idea
                        que llega al Tecnoparque
                    </legend>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input id="condicion_modelo_comprobacion" wire:model.defer="condiciones_cumplidas_idea"
                                value="Cuenta con un modelo de comprobación" type="checkbox"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="condicion_modelo_comprobacion"
                                class="block text-sm font-medium leading-6 ">Cuenta con un modelo de
                                comprobación (trl 4 o trl 5)</label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="condicion_idea_postulada_tecnoparque"
                                value="Ya postuló la idea en la plataforma tecnoparque"
                                wire:model.defer="condiciones_cumplidas_idea" type="checkbox"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="condicion_idea_postulada_tecnoparque"
                                class="block text-sm font-medium leading-6 ">Ya postuló la idea en la
                                plataforma tecnoparque
                            </label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="condicion_usuario_demostro_capacidades"
                                value="El usuario demostró tener capacidades técnicas de cocreación"
                                wire:model.defer="condiciones_cumplidas_idea" type="checkbox"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="condicion_usuario_demostro_capacidades"
                                class="block text-sm font-medium leading-6 ">El usuario demostró tener
                                capacidades técnicas de cocreación
                            </label>
                        </div>
                        @error('condiciones_cumplidas_idea')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>
                {{-- Cuales condiciones cumple la idea --}}

                <button type="button" class="text-base mr-2 font-semibold leading-6 "
                    wire:click="back(9)">Volver</button>
                <button type="button"
                    class="rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                    wire:click="pasoServicioTecnoparque">Siguiente</button>
            </div>
        </div>
        {{-- Seleccion:Tecnoparque --}}

        {{-- Seleccion: Emprendimiento Servicios --}}
        <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 15 ? 'hidden' : '' }}" id="step-15">
            <div class="mt-10 space-y-10">

                <fieldset>
                    <legend class="text-sm font-semibold leading-6 ">Emprendimiento Servicios
                    </legend>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Indique a que servicios accedió el usuario
                        inicialmente en el Centro de Desarrollo Empresarial o Programa de Emprendimiento
                    </p>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input id="fomento" wire:model.defer="emprendimiento_servicios" value="Fomento"
                                type="radio" name="emprendimiento_servicios"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="fomento"
                                class="block text-sm font-medium leading-6 ">Fomento</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="creacion_empresa_fondo_emprender" value="Creación de empresa Fondo Emprender"
                                wire:model.defer="emprendimiento_servicios" type="radio"
                                name="emprendimiento_servicios" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="creacion_empresa_fondo_emprender"
                                class="block text-sm font-medium leading-6 ">Creación de empresa Fondo
                                Emprender
                            </label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="creacion_empresa_otras_fuentes"
                                value="Creación de empresa otras fuentes de financiación"
                                wire:model.defer="emprendimiento_servicios" type="radio"
                                name="emprendimiento_servicios" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="creacion_empresa_otras_fuentes"
                                class="block text-sm font-medium leading-6 ">Creación de empresa otras
                                fuentes de financiación
                            </label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="fortalecimiento_empresarial" value="Fortalecimiento empresarial"
                                wire:model.defer="emprendimiento_servicios" type="radio"
                                name="emprendimiento_servicios" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="fortalecimiento_empresarial"
                                class="block text-sm font-medium leading-6 ">Fortalecimiento empresarial
                            </label>
                        </div>
                        @error('emprendimiento_servicios')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror

                        <button type="button" class="text-base mr-2 font-semibold leading-6 "
                            wire:click="back(9)">Volver</button>
                        <button type="button"
                            class="rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
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
                    <legend class="text-sm font-semibold leading-6 ">Centro de Formación Servicios
                    </legend>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Indique a que servicios accedió el usuario
                        inicialmente en el centro de formación
                    </p>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input id="agencia_publica_empleo" wire:model.defer="centro_formacion_servicios"
                                value="Agencia Publica de Empleo" type="radio" name="centro_formacion_servicios"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="agencia_publica_empleo"
                                class="block text-sm font-medium leading-6 ">Agencia Publica de
                                Empleo</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="certificado_competencias_laborales"
                                value="Certificación de competencias laborales"
                                wire:model.defer="centro_formacion_servicios" type="radio"
                                name="centro_formacion_servicios" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="certificado_competencias_laborales"
                                class="block text-sm font-medium leading-6 ">Certificación de
                                competencias
                                laborales
                            </label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="formacion" value="Formación" wire:model.defer="centro_formacion_servicios"
                                type="radio" name="centro_formacion_servicios"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="formacion"
                                class="block text-sm font-medium leading-6 ">Formación
                            </label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="investigacion" value="Investigación"
                                wire:model.defer="centro_formacion_servicios" type="radio"
                                name="centro_formacion_servicios" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="investigacion"
                                class="block text-sm font-medium leading-6 ">Investigación
                            </label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="servicios_tecnologicos" value="Servicios Tecnológicos"
                                wire:model.defer="centro_formacion_servicios" type="radio"
                                name="centro_formacion_servicios" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="servicios_tecnologicos"
                                class="block text-sm font-medium leading-6 ">Servicios Tecnológicos
                            </label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="otro_centro_formacion_servicios" value="otro"
                                wire:model.defer="centro_formacion_servicios" type="radio"
                                name="centro_formacion_servicios" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="otro_centro_formacion_servicios"
                                class="block text-sm font-medium leading-6 ">Otro</label>
                            <input type="text" wire:model.defer="otro_centro_formacion_servicios"
                                id="input-otro-centro_formacion_servicios" autocomplete=""
                                class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">
                        </div>
                        @error('centro_formacion_servicios')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>

                <button type="button" class="text-base mr-2 font-semibold leading-6 "
                    wire:click="back(9)">Volver</button>
                <button type="button"
                    class="rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                    wire:click="pasoServicioCentrosFormacion">Siguiente</button>
            </div>
        </div>
        {{-- Seleccion: Centro de Formación Servicios --}}


        {{-- Seleccion: Hub de Innovación Servicios --}}
        <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 17 ? 'hidden' : '' }}" id="step-17">
            <h2 class="text-base font-semibold leading-7 ">Hub de Innovación Servicios</h2>
            <div class="mt-10 space-y-10">

                {{-- Indicar que servicios solicita en el Hub de Innovación --}}
                <fieldset>
                    <legend class="text-sm font-semibold leading-6 ">Hub de Innovación Servicios

                    </legend>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Indique a que servicios solicita acceso en el Hub
                        de
                        Innovación</p>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input id="fortalecimiento_capacidades" wire:model.defer="hub_innovacion_servicios"
                                value="Fortalecimiento de Capacidades" type="radio"
                                name="hub_innovacion_servicios" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="fortalecimiento_capacidades"
                                class="block text-sm font-medium leading-6 ">Fortalecimiento de
                                Capacidades</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="desarrollo_soluciones" value="Desarrollo de Soluciones"
                                wire:model.defer="hub_innovacion_servicios" type="radio"
                                name="hub_innovacion_servicios" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="desarrollo_soluciones"
                                class="block text-sm font-medium leading-6 ">Desarrollo de Soluciones
                            </label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="relacionamiento" value="Relacionamiento"
                                wire:model.defer="hub_innovacion_servicios" type="radio"
                                name="hub_innovacion_servicios" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="relacionamiento"
                                class="block text-sm font-medium leading-6 ">Relacionamiento
                            </label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="otro_hub_innovacion_servicios" value="otro"
                                wire:model.defer="hub_innovacion_servicios" type="radio"
                                name="hub_innovacion_servicios" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="otro_hub_innovacion_servicios"
                                class="block text-sm font-medium leading-6 ">Otro</label>
                            <input type="text" wire:model.defer="otro_hub_innovacion_servicios"
                                id="input-otro-hub_innovacion_servicios" autocomplete=""
                                class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">
                        </div>
                        @error('hub_innovacion_servicios')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>
                {{-- Indicar que servicios solicita en el Hub de Innovación --}}

                {{-- Indicar que línea tecnológicas esta suscrita la idea --}}
                <fieldset>
                    <legend class="text-sm font-semibold leading-6 ">En que línea o líneas tecnológicas
                        esta
                        suscrita la idea</legend>
                    <div class="mt-6 space-y-6">

                        <div class="flex items-center gap-x-3">
                            <input id="linea_iot" wire:model.defer="linea_tecnologica_hub" value="IoT"
                                type="checkbox" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="linea_iot" class="block text-sm font-medium leading-6 ">IoT
                                (internet de las cosas)</label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="linea_diseño_prototipado" value="Diseño & Prototipado"
                                wire:model.defer="linea_tecnologica_hub" type="checkbox"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="linea_diseño_prototipado"
                                class="block text-sm font-medium leading-6 ">Diseño & Prototipado

                            </label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="linea_desarrollo_software_web" value="Desarrollo de software Web-App"
                                wire:model.defer="linea_tecnologica_hub" type="checkbox"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="linea_desarrollo_software_web"
                                class="block text-sm font-medium leading-6 ">Desarrollo de software
                                (Web-App)
                            </label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="linea_realidades_extendidas" value="Realidades Extendidas"
                                wire:model.defer="linea_tecnologica_hub" type="checkbox"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="linea_realidades_extendidas"
                                class="block text-sm font-medium leading-6 ">Realidades Extendidas
                                (Realidad
                                Virtual/Realidad Aumentada)

                            </label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="linea_inteligencia_artifical" value="Inteligencia Artificial"
                                wire:model.defer="linea_tecnologica_hub" type="checkbox"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="linea_inteligencia_artifical"
                                class="block text-sm font-medium leading-6 ">Inteligencia Artificial
                                (Machine
                                Learning/Deep Learning)

                            </label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="linea_marketing_digital" value="Marketing digital"
                                wire:model.defer="linea_tecnologica_hub" type="checkbox"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="linea_marketing_digital"
                                class="block text-sm font-medium leading-6 ">Marketing digital
                                (fortalecimiento de Marca)

                            </label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="linea_big_data" value="BigData" wire:model.defer="linea_tecnologica_hub"
                                type="checkbox" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="linea_big_data"
                                class="block text-sm font-medium leading-6 ">Big
                                Data

                            </label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="linea_manufactura" value="Manufactura Aditiva"
                                wire:model.defer="linea_tecnologica_hub" type="checkbox"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="linea_manufactura"
                                class="block text-sm font-medium leading-6 ">Manufactura Aditiva
                            </label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="linea_nula" value="Ninguna Tecnología 4.0"
                                wire:model.defer="linea_tecnologica_hub" type="checkbox"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="linea_nula"
                                class="block text-sm font-medium leading-6 ">Ninguna
                                Tecnología 4.0
                            </label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="otro_linea_tecnologica_hub" value="otro"
                                wire:model.defer="otro_linea_tecnologica_hub" type="radio"
                                name="otro_linea_tecnologica_hub" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="otro_linea_tecnologica_hub"
                                class="block text-sm font-medium leading-6 ">Otro</label>
                            <input type="text" wire:model.defer="otro_linea_tecnologica_hub"
                                id="input-otro-linea_tecnologica_hub" autocomplete=""
                                class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">
                        </div>
                        @error('linea_tecnologica_hub')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>
                {{-- Indicar que línea tecnológicas esta suscrita la idea --}}

                {{-- Indicar conocimientos tecnicos en la linea seleccionada --}}
                <fieldset>
                    <legend class="text-sm font-semibold leading-6 ">Cuentas con conocimientos técnicos
                        en
                        las líneas seleccionadas (punto anterior)
                    </legend>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input id="conocimientos_lineas_seleccionada_no"
                                wire:model.defer="conocimientos_lineas_seleccionada" value="No" type="radio"
                                name="conocimientos_lineas_seleccionada"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="conocimientos_lineas_seleccionada_no"
                                class="block text-sm font-medium leading-6 ">No</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="conocimientos_lineas_seleccionada_basico" value="Basico"
                                wire:model.defer="conocimientos_lineas_seleccionada" type="radio"
                                name="conocimientos_lineas_seleccionada"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="conocimientos_lineas_seleccionada_basico"
                                class="block text-sm font-medium leading-6 ">Basico
                            </label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="conocimientos_lineas_seleccionada_medio" value="Medio"
                                wire:model.defer="conocimientos_lineas_seleccionada" type="radio"
                                name="conocimientos_lineas_seleccionada"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="conocimientos_lineas_seleccionada_medio"
                                class="block text-sm font-medium leading-6 ">Medio
                            </label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="conocimientos_lineas_seleccionada_avanzado" value="Avanzados"
                                wire:model.defer="conocimientos_lineas_seleccionada" type="radio"
                                name="conocimientos_lineas_seleccionada"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="conocimientos_lineas_seleccionada_avanzado"
                                class="block text-sm font-medium leading-6 ">Avanzados
                            </label>
                        </div>
                        @error('conocimientos_lineas_seleccionada')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>
                {{-- Indicar conocimientos tecnicos en la linea seleccionada --}}

                {{-- Indicar Puntualmente cual es tu necesidad de apoyo para el proyecto --}}
                <fieldset>
                    <h2 class="text-base font-semibold leading-7 ">Puntualmente cual es tu necesidad de
                        apoyo
                        para el proyecto
                    </h2>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input type="text" wire:model.defer="necesidad_puntual_proyecto"
                                id="necesidad_puntual_proyecto" autocomplete=""
                                class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">
                        </div>
                        @error('necesidad_puntual_proyecto')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>
                {{-- Indicar Puntualmente cual es tu necesidad de apoyo para el proyecto --}}

                {{-- Indicar si se cuenta con equipo de trabajo --}}
                <fieldset>
                    <h2 class="text-base font-semibold leading-7 ">Cuentas con equipo de trabajo (otras
                        personas vinculadas con el desarrollo de la idea)
                    </h2>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input type="text" wire:model.defer="cuenta_equipo_trabajo"
                                id="cuenta_equipo_trabajo" autocomplete=""
                                class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">
                        </div>
                        @error('cuenta_equipo_trabajo')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>
                {{-- Indicar si se cuenta con equipo de trabajo --}}


                <button type="button" class="text-base mr-2 font-semibold leading-6 "
                    wire:click="back(9)">Volver</button>
                <button type="button"
                    class="rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
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
                    <h2 class="text-base font-semibold leading-7 ">Aprendiz en formación y egresado</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">En que centro de formación es aprendiz actualmente
                        o
                        fue egresado</p>
                    <div class="mt-6 space-y-6">

                        <div class="flex items-center gap-x-3">
                            <input id="centro_recursos_naturales_renovables"
                                value="CENTRO DE LOS RECURSOS NATURALES RENOVABLES LA SALADA"
                                wire:model.defer="centro_formacion_actual_aprendiz"
                                name="centro_formacion_actual_aprendiz" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="centro_recursos_naturales_renovables"
                                class="block text-sm font-medium leading-6 ">
                                CENTRO DE LOS RECURSOS NATURALES RENOVABLES LA SALADA</label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="centro_diseño_manufactura_cuero"
                                value="CENTRO DE DISEÑO Y MANUFACTURA DEL CUERO"
                                wire:model.defer="centro_formacion_actual_aprendiz"
                                name="centro_formacion_actual_aprendiz" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="centro_diseño_manufactura_cuero"
                                class="block text-sm font-medium leading-6 ">
                                CENTRO DE DISEÑO Y MANUFACTURA DEL CUERO</label>
                        </div>


                        <div class="flex items-center gap-x-3">
                            <input id="centro_comercio" value="CENTRO DE COMERCIO"
                                wire:model.defer="centro_formacion_actual_aprendiz"
                                name="centro_formacion_actual_aprendiz" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="centro_comercio" class="block text-sm font-medium leading-6 ">
                                CENTRO DE COMERCIO</label>
                        </div>


                        <div class="flex items-center gap-x-3">
                            <input id="centro_formacion_diseño_confeccion_moda"
                                value="CENTRO DE FORMACIÓN EN DISEÑO, CONFECCIÓN Y MODA"
                                wire:model.defer="centro_formacion_actual_aprendiz"
                                name="centro_formacion_actual_aprendiz" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="centro_formacion_diseño_confeccion_moda"
                                class="block text-sm font-medium leading-6 ">
                                CENTRO DE FORMACIÓN EN DISEÑO, CONFECCIÓN Y MODA</label>
                        </div>


                        <div class="flex items-center gap-x-3">
                            <input id="centro_innovacion_agroindustria_aviacion"
                                value="CENTRO DE LA INNOVACIÓN, LA AGROINDUSTRIA Y LA AVIACIÓN​"
                                wire:model.defer="centro_formacion_actual_aprendiz"
                                name="centro_formacion_actual_aprendiz" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="centro_innovacion_agroindustria_aviacion"
                                class="block text-sm font-medium leading-6 ">
                                CENTRO DE LA INNOVACIÓN, LA AGROINDUSTRIA Y LA AVIACIÓN​</label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="centro_servicios_salud" value="CENTRO DE SERVICIOS DE SALUD"
                                wire:model.defer="centro_formacion_actual_aprendiz"
                                name="centro_formacion_actual_aprendiz" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="centro_servicios_salud"
                                class="block text-sm font-medium leading-6 ">
                                CENTRO DE SERVICIOS DE SALUD</label>
                        </div>


                        <div class="flex items-center gap-x-3">
                            <input id="centro_servicios_gestion_empresarial"
                                value="CENTRO DE SERVICIOS Y GESTIÓN EMPRESARIAL"
                                wire:model.defer="centro_formacion_actual_aprendiz"
                                name="centro_formacion_actual_aprendiz" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="centro_servicios_gestion_empresarial"
                                class="block text-sm font-medium leading-6 ">
                                CENTRO DE SERVICIOS Y GESTIÓN EMPRESARIAL</label>
                        </div>


                        <div class="flex items-center gap-x-3">
                            <input id="centro_tecnologia_manufactura_avanzada"
                                value="CENTRO DE TECNOLOGÍA DE LA MANUFACTURA AVANZADA"
                                wire:model.defer="centro_formacion_actual_aprendiz"
                                name="centro_formacion_actual_aprendiz" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="centro_tecnologia_manufactura_avanzada"
                                class="block text-sm font-medium leading-6 ">
                                CENTRO DE TECNOLOGÍA DE LA MANUFACTURA AVANZADA</label>
                        </div>


                        <div class="flex items-center gap-x-3">
                            <input id="centro_desarrollo_habitat_construccion"
                                value="CENTRO PARA EL DESARROLLO DEL HÁBITAT Y LA CONSTRUCCIÓN"
                                wire:model.defer="centro_formacion_actual_aprendiz"
                                name="centro_formacion_actual_aprendiz" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="centro_desarrollo_habitat_construccion"
                                class="block text-sm font-medium leading-6 ">
                                CENTRO PARA EL DESARROLLO DEL HÁBITAT Y LA CONSTRUCCIÓN</label>
                        </div>


                        <div class="flex items-center gap-x-3">
                            <input id="centro_tecnologico_mobiliario" value="CENTRO TECNOLÓGICO DEL MOBILIARIO"
                                wire:model.defer="centro_formacion_actual_aprendiz"
                                name="centro_formacion_actual_aprendiz" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="centro_tecnologico_mobiliario"
                                class="block text-sm font-medium leading-6 ">
                                CENTRO TECNOLÓGICO DEL MOBILIARIO</label>
                        </div>


                        <div class="flex items-center gap-x-3">
                            <input id="complejo_tecnologico_agroindustrial"
                                value="COMPLEJO TECNOLÓGICO AGROINDUSTRIAL, PECUARIO Y TURÍSTICO"
                                wire:model.defer="centro_formacion_actual_aprendiz"
                                name="centro_formacion_actual_aprendiz" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="complejo_tecnologico_agroindustrial"
                                class="block text-sm font-medium leading-6 ">
                                COMPLEJO TECNOLÓGICO AGROINDUSTRIAL, PECUARIO Y TURÍSTICO</label>
                        </div>


                        <div class="flex items-center gap-x-3">
                            <input id="complejo_tecnoogico_minero_agroempresarial"
                                value="COMPLEJO TECNOLÓGICO MINERO AGROEMPRESARIAL"
                                wire:model.defer="centro_formacion_actual_aprendiz"
                                name="centro_formacion_actual_aprendiz" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="complejo_tecnoogico_minero_agroempresarial"
                                class="block text-sm font-medium leading-6 ">
                                COMPLEJO TECNOLÓGICO MINERO AGROEMPRESARIAL</label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="centro_textil_gestion_industrial"
                                value="CENTRO TEXTIL Y DE GESTIÓN INDUSTRIAL​"
                                wire:model.defer="centro_formacion_actual_aprendiz"
                                name="centro_formacion_actual_aprendiz" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="centro_textil_gestion_industrial"
                                class="block text-sm font-medium leading-6 ">
                                CENTRO TEXTIL Y DE GESTIÓN INDUSTRIAL​</label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="complejo_tecnologico_turistico_agroindustrial_occidente_antioqueño"
                                value="COMPLEJO TECNOLÓGICO TURÍSTICO Y AGROINDUSTRIAL DEL OCCIDENTE ANTIOQUEÑO​​"
                                wire:model.defer="centro_formacion_actual_aprendiz"
                                name="centro_formacion_actual_aprendiz" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="complejo_tecnologico_turistico_agroindustrial_occidente_antioqueño"
                                class="block text-sm font-medium leading-6 ">
                                COMPLEJO TECNOLÓGICO TURÍSTICO Y AGROINDUSTRIAL DEL OCCIDENTE ANTIOQUEÑO​​</label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="centro_formacion_minero_ambiental_bagre"
                                value="CENTRO DE FORMACIÓN MINERO AMBIENTAL EL BAGRE​​"
                                wire:model.defer="centro_formacion_actual_aprendiz"
                                name="centro_formacion_actual_aprendiz" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="centro_formacion_minero_ambiental_bagre"
                                class="block text-sm font-medium leading-6 ">
                                CENTRO DE FORMACIÓN MINERO AMBIENTAL EL BAGRE​​</label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="complejo_tecnologico_gestion_agroempresarial"
                                value="COMPLEJO TECNOLÓGICO PARA LA GESTIÓN AGROEMPRESARIAL​​"
                                wire:model.defer="centro_formacion_actual_aprendiz"
                                name="centro_formacion_actual_aprendiz" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="complejo_tecnologico_gestion_agroempresarial"
                                class="block text-sm font-medium leading-6 ">
                                COMPLEJO TECNOLÓGICO PARA LA GESTIÓN AGROEMPRESARIAL​​</label>
                        </div>

                        @error('centro_formacion_actual_aprendiz')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror


                    </div>
                </fieldset>
                {{-- Opcion centro de formación es aprendiz o fue --}}

                {{-- Programa de formación está adscrito o estuvo --}}
                <fieldset>
                    <h2 class="text-base font-semibold leading-7 ">A que programa de formación está
                        adscrito
                        o estuvo adscrito</h2>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input type="text" wire:model.defer="programa_formacion_adscrito" id=""
                                autocomplete=""
                                class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">
                        </div>
                        @error('programa_formacion_adscrito')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>
                {{-- Programa de formación está adscrito o estuvo --}}

                {{-- interés emprendedor se da por --}}
                <fieldset class="mt-6 space-y-6">
                    <h2 class="text-base font-semibold leading-7 ">Su interés emprendedor se da por..
                    </h2>
                    <div class="flex items-center gap-x-3">
                        <input id="proyecto_aula" wire:model.defer="interes_emprendedor_es" type="radio"
                            name="interes_emprendedor_es"
                            value="Proyecto de aula que me lleva a querer participar en programas de emprendimiento"
                            class="h-4 w-4 border-gray-300 text-indigo-600 ">
                        <label for="proyecto_aula" class="block text-sm font-medium leading-6 ">
                            Proyecto de aula que me lleva a querer participar en programas de emprendimiento</label>
                    </div>

                    <div class="flex items-center gap-x-3">
                        <input id="idea_no_surgida_proyectos"
                            value="Tengo una idea pero no surgió en los proyectos de clase"
                            wire:model.defer="interes_emprendedor_es" type="radio" name="interes_emprendedor_es"
                            class="h-4 w-4 border-gray-300 text-indigo-600 ">
                        <label for="idea_no_surgida_proyectos"
                            class="block text-sm font-medium leading-6 ">
                            Tengo una idea pero no surgió en los proyectos de clase</label>
                    </div>


                    <div class="flex items-center gap-x-3">
                        <input id="asistencia_charla_interesado"
                            value="Asistí a una charla y me interesé por los programas de emprendimiento pero aun no tengo idea"
                            wire:model.defer="interes_emprendedor_es" type="radio" name="interes_emprendedor_es"
                            class="h-4 w-4 border-gray-300 text-indigo-600 ">
                        <label for="asistencia_charla_interesado"
                            class="block text-sm font-medium leading-6 ">
                            Asistí a una charla y me interesé por los programas de emprendimiento pero aun no tengo
                            idea</label>
                    </div>
                    <div class="flex items-center gap-x-3">
                        <input id="idea_aprendiz_formacion"
                            value="Fue una idea que surgió cuando era aprendiz en formación"
                            wire:model.defer="interes_emprendedor_es" type="radio" name="interes_emprendedor_es"
                            class="h-4 w-4 border-gray-300 text-indigo-600 ">
                        <label for="idea_aprendiz_formacion"
                            class="block text-sm font-medium leading-6 ">
                            Fue una idea que surgió cuando era aprendiz en formación</label>
                    </div>
                    @error('interes_emprendedor_es')
                        <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                    @enderror
                </fieldset>
                {{-- interés emprendedor se da por --}}
                <button type="button" class="text-base mr-2 font-semibold leading-6 "
                    wire:click="back()">Volver</button>
                <button type="button"
                    class="rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                    wire:click="pasoSiAprendizEgresadoSENA">Siguiente</button>
            </div>
        </div>
        {{-- Formulario si es Aprendiz en formación y egresado --}}


        {{-- Formulario si es Instructor Sena --}}
        <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 19 ? 'hidden' : '' }}" id="step-19">
            <div class="mt-10 space-y-10">

                {{-- Opcion centro de formación es aprendiz o fue --}}
                <fieldset>
                    <h2 class="text-base font-semibold leading-7 ">Instructor Sena</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">A que centro pertenece</p>
                    <div class="mt-6 space-y-6">

                        <div class="flex items-center gap-x-3">
                            <input id="instructor_centro_recursos_naturales_renovables"
                                value="CENTRO DE LOS RECURSOS NATURALES RENOVABLES LA SALADA"
                                wire:model.defer="centro_formacion_actual_instructor"
                                name="centro_formacion_actual_instructor" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="instructor_centro_recursos_naturales_renovables"
                                class="block text-sm font-medium leading-6 ">
                                CENTRO DE LOS RECURSOS NATURALES RENOVABLES LA SALADA</label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="instructor_centro_diseño_manufactura_cuero"
                                value="CENTRO DE DISEÑO Y MANUFACTURA DEL CUERO"
                                wire:model.defer="centro_formacion_actual_instructor"
                                name="centro_formacion_actual_instructor" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="instructor_centro_diseño_manufactura_cuero"
                                class="block text-sm font-medium leading-6 ">
                                CENTRO DE DISEÑO Y MANUFACTURA DEL CUERO</label>
                        </div>


                        <div class="flex items-center gap-x-3">
                            <input id="instructor_centro_comercio" value="CENTRO DE COMERCIO"
                                wire:model.defer="centro_formacion_actual_instructor"
                                name="centro_formacion_actual_instructor" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="instructor_centro_comercio"
                                class="block text-sm font-medium leading-6 ">
                                CENTRO DE COMERCIO</label>
                        </div>


                        <div class="flex items-center gap-x-3">
                            <input id="instructor_centro_formacion_diseño_confeccion_moda"
                                value="CENTRO DE FORMACIÓN EN DISEÑO, CONFECCIÓN Y MODA"
                                wire:model.defer="centro_formacion_actual_instructor"
                                name="centro_formacion_actual_instructor" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="instructor_centro_formacion_diseño_confeccion_moda"
                                class="block text-sm font-medium leading-6 ">
                                CENTRO DE FORMACIÓN EN DISEÑO, CONFECCIÓN Y MODA</label>
                        </div>


                        <div class="flex items-center gap-x-3">
                            <input id="instructor_centro_innovacion_agroindustria_aviacion"
                                value="CENTRO DE LA INNOVACIÓN, LA AGROINDUSTRIA Y LA AVIACIÓN​"
                                wire:model.defer="centro_formacion_actual_instructor"
                                name="centro_formacion_actual_instructor" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="instructor_centro_innovacion_agroindustria_aviacion"
                                class="block text-sm font-medium leading-6 ">
                                CENTRO DE LA INNOVACIÓN, LA AGROINDUSTRIA Y LA AVIACIÓN​</label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="instructor_centro_servicios_salud" value="CENTRO DE SERVICIOS DE SALUD"
                                wire:model.defer="centro_formacion_actual_instructor"
                                name="centro_formacion_actual_instructor" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="instructor_centro_servicios_salud"
                                class="block text-sm font-medium leading-6 ">
                                CENTRO DE SERVICIOS DE SALUD</label>
                        </div>


                        <div class="flex items-center gap-x-3">
                            <input id="instructor_centro_servicios_gestion_empresarial"
                                value="CENTRO DE SERVICIOS Y GESTIÓN EMPRESARIAL"
                                wire:model.defer="centro_formacion_actual_instructor"
                                name="centro_formacion_actual_instructor" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="instructor_centro_servicios_gestion_empresarial"
                                class="block text-sm font-medium leading-6 ">
                                CENTRO DE SERVICIOS Y GESTIÓN EMPRESARIAL</label>
                        </div>


                        <div class="flex items-center gap-x-3">
                            <input id="instructor_centro_tecnologia_manufactura_avanzada"
                                value="CENTRO DE TECNOLOGÍA DE LA MANUFACTURA AVANZADA"
                                wire:model.defer="centro_formacion_actual_instructor"
                                name="centro_formacion_actual_instructor" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="instructor_centro_tecnologia_manufactura_avanzada"
                                class="block text-sm font-medium leading-6 ">
                                CENTRO DE TECNOLOGÍA DE LA MANUFACTURA AVANZADA</label>
                        </div>


                        <div class="flex items-center gap-x-3">
                            <input id="instructor_centro_desarrollo_habitat_construccion"
                                value="CENTRO PARA EL DESARROLLO DEL HÁBITAT Y LA CONSTRUCCIÓN"
                                wire:model.defer="centro_formacion_actual_instructor"
                                name="centro_formacion_actual_instructor" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="instructor_centro_desarrollo_habitat_construccion"
                                class="block text-sm font-medium leading-6 ">
                                CENTRO PARA EL DESARROLLO DEL HÁBITAT Y LA CONSTRUCCIÓN</label>
                        </div>


                        <div class="flex items-center gap-x-3">
                            <input id="instructor_centro_tecnologico_mobiliario"
                                value="CENTRO TECNOLÓGICO DEL MOBILIARIO"
                                wire:model.defer="centro_formacion_actual_instructor"
                                name="centro_formacion_actual_instructor" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="instructor_centro_tecnologico_mobiliario"
                                class="block text-sm font-medium leading-6 ">
                                CENTRO TECNOLÓGICO DEL MOBILIARIO</label>
                        </div>


                        <div class="flex items-center gap-x-3">
                            <input id="instructor_complejo_tecnologico_agroindustrial"
                                value="COMPLEJO TECNOLÓGICO AGROINDUSTRIAL, PECUARIO Y TURÍSTICO"
                                wire:model.defer="centro_formacion_actual_instructor"
                                name="centro_formacion_actual_instructor" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="instructor_complejo_tecnologico_agroindustrial"
                                class="block text-sm font-medium leading-6 ">
                                COMPLEJO TECNOLÓGICO AGROINDUSTRIAL, PECUARIO Y TURÍSTICO</label>
                        </div>


                        <div class="flex items-center gap-x-3">
                            <input id="instructor_complejo_tecnoogico_minero_agroempresarial"
                                value="COMPLEJO TECNOLÓGICO MINERO AGROEMPRESARIAL"
                                wire:model.defer="centro_formacion_actual_instructor"
                                name="centro_formacion_actual_instructor" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="instructor_complejo_tecnoogico_minero_agroempresarial"
                                class="block text-sm font-medium leading-6 ">
                                COMPLEJO TECNOLÓGICO MINERO AGROEMPRESARIAL</label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="instructor_centro_textil_gestion_industrial"
                                value="CENTRO TEXTIL Y DE GESTIÓN INDUSTRIAL​"
                                wire:model.defer="centro_formacion_actual_instructor"
                                name="centro_formacion_actual_instructor" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="instructor_centro_textil_gestion_industrial"
                                class="block text-sm font-medium leading-6 ">
                                CENTRO TEXTIL Y DE GESTIÓN INDUSTRIAL​</label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="instructor_complejo_tecnologico_turistico_agroindustrial_occidente_antioqueño"
                                wire:model.defer="centro_formacion_actual_instructor"
                                name="centro_formacion_actual_instructor"
                                value="COMPLEJO TECNOLÓGICO TURÍSTICO Y AGROINDUSTRIAL DEL OCCIDENTE ANTIOQUEÑO​​"
                                type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="instructor_complejo_tecnologico_turistico_agroindustrial_occidente_antioqueño"
                                class="block text-sm font-medium leading-6 ">
                                COMPLEJO TECNOLÓGICO TURÍSTICO Y AGROINDUSTRIAL DEL OCCIDENTE ANTIOQUEÑO​​</label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="instructor_centro_formacion_minero_ambiental_bagre"
                                value="CENTRO DE FORMACIÓN MINERO AMBIENTAL EL BAGRE​​"
                                wire:model.defer="centro_formacion_actual_instructor"
                                name="centro_formacion_actual_instructor" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="instructor_centro_formacion_minero_ambiental_bagre"
                                class="block text-sm font-medium leading-6 ">
                                CENTRO DE FORMACIÓN MINERO AMBIENTAL EL BAGRE​​</label>
                        </div>

                        <div class="flex items-center gap-x-3">
                            <input id="instructor_complejo_tecnologico_gestion_agroempresarial"
                                value="COMPLEJO TECNOLÓGICO PARA LA GESTIÓN AGROEMPRESARIAL​​"
                                wire:model.defer="centro_formacion_actual_instructor"
                                name="centro_formacion_actual_instructor" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="instructor_complejo_tecnologico_gestion_agroempresarial"
                                class="block text-sm font-medium leading-6 ">
                                COMPLEJO TECNOLÓGICO PARA LA GESTIÓN AGROEMPRESARIAL​​</label>
                        </div>
                        @error('centro_formacion_actual_instructor')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>

                <fieldset>
                    <h2 class="text-base font-semibold leading-7 ">Hace parte de un grupo de
                        investigación de
                        SENNOVA </h2>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input id="sennova_si" value="Si" wire:model.defer="parte_sennova"
                                name="parte_sennova" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="sennova_si"
                                class="block text-sm font-medium leading-6 ">Si</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="sennova_no" value="No" wire:model.defer="parte_sennova"
                                name="parte_sennova" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="sennova_no"
                                class="block text-sm font-medium leading-6 ">No</label>
                        </div>
                        @error('parte_sennova')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>
                <button type="button" class="text-base mr-2 font-semibold leading-6 "
                    wire:click="back()">Volver</button>
                <button type="button"
                    class="rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                    wire:click="pasoSiInstructorSENA">Siguiente</button>

            </div>
        </div>
        {{-- Formulario si es Instructor Sena --}}


        {{-- Formulario si es Instructor Sena es de Sennova --}}
        <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 20 ? 'hidden' : '' }}" id="step-20">
            <div class="mt-10 space-y-10">
                <fieldset>
                    <h2 class="text-base font-semibold leading-7 ">Investigadores Sennova</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">Su participación en el grupo es</p>

                    <div class="mt-6 space-y-6">

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="sennova_coordinador" value="Coordinador"
                                    wire:model.defer="participacion_sennova" type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 ">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="sennova_coordinador"
                                    class="font-medium ">Coordinador</label>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="sennova_investigador" value="Investigador"
                                    wire:model.defer="participacion_sennova" type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 ">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="sennova_investigador"
                                    class="font-medium ">Investigador</label>
                            </div>
                        </div>

                        <div class="relative flex gap-x-3">
                            <div class="flex h-6 items-center">
                                <input id="sennova_lider_semillero" value="Líder de semillero"
                                    wire:model.defer="participacion_sennova" type="checkbox"
                                    class="h-4 w-4 rounded border-gray-300 text-indigo-600 ">
                            </div>
                            <div class="text-sm leading-6">
                                <label for="sennova_lider_semillero" class="font-medium ">Líder de
                                    semillero
                                </label>
                            </div>
                        </div>
                        @error('participacion_sennova')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>

                <fieldset>
                    <h2 class="text-base font-semibold leading-7 ">El grupo cuenta con un Semillero de
                        Investigación </h2>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input id="semillero_senova_si" value="Si"
                                wire:model.defer="sennova_semillero_investigacion" type="radio"
                                name="sennova_semillero_investigacion"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="semillero_senova_si"
                                class="block text-sm font-medium leading-6 ">Si</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="semillero_sennova_no" value="No"
                                wire:model.defer="sennova_semillero_investigacion" type="radio"
                                name="sennova_semillero_investigacion"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="semillero_sennova_no"
                                class="block text-sm font-medium leading-6 ">No</label>
                        </div>
                        @error('sennova_semillero_investigacion')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>

                <button type="button" class="text-base mr-2 font-semibold leading-6 "
                    wire:click="back()">Volver</button>
                <button type="button"
                    class="rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                    wire:click="pasoSiInstructorSENNOVA">Siguiente</button>
            </div>
        </div>
        {{-- Formulario si es Instructor Sena es de Sennova --}}

        {{-- Si forma parte de semillero - Semillero Informacion --}}
        <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 21 ? 'hidden' : '' }}" id="step-21">
            <h2 class="text-base font-semibold leading-7 ">Semillero </h2>
            <div class="mt-10 space-y-10">
                <fieldset>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="nombre_semillero"
                                class="block text-sm font-medium leading-6 ">Nombre del semillero</label>
                            <div class="mt-2">
                                <input type="text" wire:model.defer="nombre_semillero" id="nombre_semillero"
                                    autocomplete="nombre_semillero"
                                    class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">
                            </div>
                            @error('nombre_semillero')
                                <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="semillero_cantidad_integrantes"
                                class="block text-sm font-medium leading-6 ">Cantidad de
                                integrantes</label>
                            <div class="mt-2">
                                <input type="number" wire:model.defer="semillero_cantidad_integrantes"
                                    id="semillero_cantidad_integrantes"
                                    autocomplete="semillero_cantidad_integrantes"
                                    class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">
                            </div>
                            @error('semillero_cantidad_integrantes')
                                <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="semillero_tema_trabajo"
                                class="block text-sm font-medium leading-6 ">Temas de trabajo</label>
                            <div class="mt-2">
                                <input type="text" wire:model.defer="semillero_tema_trabajo"
                                    id="semillero_tema_trabajo" autocomplete="semillero_tema_trabajo"
                                    class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">
                            </div>
                            @error('semillero_tema_trabajo')
                                <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </fieldset>
                <button type="button" class="text-base mr-2 font-semibold leading-6 "
                    wire:click="back(1)">Volver</button>
                <button type="button"
                    class="rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                    wire:click="pasoSiSennovaSemillero">Siguiente</button>

            </div>
        </div>
        {{-- Si forma parte de semillero - Semillero Informacion --}}

        {{-- Formulario si es investigador de universidad --}}
        <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 22 ? 'hidden' : '' }}" id="step-22">
            <h2 class="text-base font-semibold leading-7 ">Investigadores Universidades </h2>
            <div class="mt-10 space-y-10">
                <fieldset>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="investigador_universidad_nombre"
                                class="block text-sm font-medium leading-6 ">Nombre de la Universidad en
                                la
                                que es investigador</label>
                            <div class="mt-2">
                                <input type="text" wire:model.defer="investigador_universidad_nombre"
                                    id="investigador_universidad_nombre"
                                    autocomplete="investigador_universidad_nombre"
                                    class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">
                            </div>
                            @error('investigador_universidad_nombre')
                                <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="investigador_universidad_grupo_investigacion"
                                class="block text-sm font-medium leading-6 ">Grupo de
                                Investigación</label>
                            <div class="mt-2">
                                <input type="text"
                                    wire:model.defer="investigador_universidad_grupo_investigacion"
                                    id="investigador_universidad_grupo_investigacion"
                                    autocomplete="investigador_universidad_grupo_investigacion"
                                    class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">
                            </div>
                            @error('investigador_universidad_grupo_investigacion')
                                <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </fieldset>

                <fieldset>
                    <div class="mt-6 space-y-6">
                        <h2 class="text-base font-semibold leading-7 ">En la actualidad tiene una idea
                            con
                            capacidad de convertirse en un producto o un prototipo </h2>

                        <div class="flex items-center gap-x-3">
                            <input id="investigador_idea_capacidad_producto_si" value="Si"
                                wire:model.defer="investigador_idea_capacidad_producto" type="radio"
                                name="investigador_idea_capacidad_producto"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="investigador_idea_capacidad_producto_si"
                                class="block text-sm font-medium leading-6 ">Si</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="investigador_idea_capacidad_producto_no" value="No"
                                wire:model.defer="investigador_idea_capacidad_producto" type="radio"
                                name="investigador_idea_capacidad_producto"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="investigador_idea_capacidad_producto_no"
                                class="block text-sm font-medium leading-6 ">No</label>
                        </div>
                        @error('investigador_idea_capacidad_producto')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>
                <button type="button" class="text-base mr-2 font-semibold leading-6 "
                    wire:click="back()">Volver</button>
                <button type="button"
                    class="rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                    wire:click="pasoSiInvestigadorUniversidad">Siguiente</button>
            </div>



        </div>
        {{-- Formulario si es investigador de universidad --}}

        {{-- Nivel del Proyecto de Empresa --}}
        <div class="border-b border-gray-900/10 pb-12 {{ $currentStep != 23 ? 'hidden' : '' }}" id="step-23">
            <div class="mt-10 space-y-10">
                <fieldset>
                    <h2 class="text-base font-semibold leading-7 ">Nivel del Proyecto de Empresa</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">En que nivel clasificaría su proyecto.</p>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input id="proyecto_investigacion" wire:model.defer="nivel_proyecto_empresa"
                                value="Idea que está a nivel de articulo de investigación" type="radio"
                                name="nivel_proyecto_empresa" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="proyecto_investigacion"
                                class="block text-sm font-medium leading-6 ">Es una idea que está a nivel
                                de
                                articulo de investigación</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="proyecto_formulado_concepto" wire:model.defer="nivel_proyecto_empresa"
                                value="Proyecto de investigación del cual ya hemos formulado un concepto"
                                type="radio" name="nivel_proyecto_empresa"
                                class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="proyecto_formulado_concepto"
                                class="block text-sm font-medium leading-6 ">Es un proyecto de
                                investigación
                                del cual ya hemos formulado un concepto</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="proyecto_prototipos_basicos"
                                value="Proyecto del cual ya se tienen prototipos básicos"
                                wire:model.defer="nivel_proyecto_empresa" type="radio"
                                name="nivel_proyecto_empresa" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="proyecto_prototipos_basicos"
                                class="block text-sm font-medium leading-6 ">Es un proyecto del cual ya
                                se
                                tienen prototipos básicos</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="proyecto_prototipos_funcionales"
                                value="Proyecto del cual ya se tienen prototipos funcionales a escala real"
                                wire:model.defer="nivel_proyecto_empresa" type="radio"
                                name="nivel_proyecto_empresa" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="proyecto_prototipos_funcionales"
                                class="block text-sm font-medium leading-6 ">Es un proyecto del cual ya
                                se
                                tienen prototipos funcionales a escala real</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="producto_mercado_mejorable"
                                value="Producto en el mercado pero susceptible de mejoras"
                                wire:model.defer="nivel_proyecto_empresa" type="radio"
                                name="nivel_proyecto_empresa" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="producto_mercado_mejorable"
                                class="block text-sm font-medium leading-6 ">Es un producto en el mercado
                                pero susceptible de mejoras</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="otro_nivel_proyecto_empresa" value="otro"
                                wire:model.defer="nivel_proyecto_empresa" type="radio"
                                name="nivel_proyecto_empresa" class="h-4 w-4 border-gray-300 text-indigo-600 ">
                            <label for="otro_nivel_proyecto_empresa"
                                class="block text-sm font-medium leading-6 ">Otro</label>
                            <input type="text" wire:model.defer="otro_nivel_proyecto_empresa"
                                id="input-otro-nivel_proyecto_empresa" autocomplete=""
                                class="block w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset dark:text-gray-900 dark:bg-gray-300  sm:text-sm sm:leading-6">
                        </div>
                        @error('nivel_proyecto_empresa')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </fieldset>

                <button type="button" class="text-base mr-2 font-semibold leading-6 "
                    wire:click="back(1)">Volver</button>
                <button type="button"
                    class="rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                    wire:click="pasoNivelProyecto">Siguiente</button>
            </div>
        </div>
        {{-- Nivel del Proyecto de Empresa --}}

        {{-- Final --}}
        <div class=" {{ $currentStep != 24 ? 'displayNone' : '' }}" id="step-24">
            <section class="flex items-center h-full  font-poppins  ">
                <div class="justify-center flex-1 mx-auto max-w-full ">
                    <div class="px-4 py-4 mx-4 bg-white   md:p-10 ">
                        <div class="items-center ">

                            <div class="bg-white">
                                <div class="">
                                    <div class=" mx-auto sm:px-2 lg:px-4">
                                        <div class="max-w-2xl mx-auto px-4 lg:max-w-full lg:px-0">
                                            <h1 class="text-xl font-bold   sm:text-2xl">
                                                Tu información Ingresada</h1>
                                            <p class="mt-2 text-sm text-gray-500">A continuacion podras ver aquellos datos que rellenaste, en dado caso de equivocación puedes volver y cambiarlos.</p>
                                        </div>
                                    </div>

                                    <div class="mt-12">
                                        <h2 class="sr-only">Recent orders</h2>
                                        <div class="max-w-7xl mx-auto sm:px-2 lg:px-8">
                                            <div class="max-w-2xl mx-auto space-y-8 sm:px-4 lg:max-w-full lg:px-0">
                                                <div
                                                    class="bg-white border-t border-b border-gray-200 shadow-sm sm:rounded-lg sm:border">
                                                    <h3 class="sr-only">Order placed on <time
                                                            datetime="2021-07-06">Jul 6, 2021</time></h3>

                                                    <!-- Products -->
                                                    <h4 class="sr-only">Items</h4>
                                                    <ul  role="list" class="divide-y divide-gray-200">
                                                        {{-- Informacion de Emprendedor --}}
                                                        <li class="p-4 sm:p-6">
                                                            <div class="flex items-center sm:items-start">
                                                                <div class="flex-1 ml-2 text-sm">
                                                                    <div class="">
                                                                        <div class="font-medium  sm:flex ">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 " width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M11 11h2v6h-2zm0-4h2v2h-2z"></path></svg>
                                                                            <h5>Informacion personal:</h5>
                                                                          </div>
                                                                        <span class=" ml-6 text-gray-700 sm:block sm:mt-1 ">
                                                                            <p><strong>Nombre:</strong> {{$nombre_emprendedor}}</p>
                                                                            <p><strong>Numero:</strong> {{$numero_contacto_emprendedor}}</p>
                                                                            <p><strong>Correo:</strong> {{$correo_emprendedor}}</p>
                                                                            <p><strong>Tipo de Identificacion:</strong> {{$tipo_identificacion_emprendedor}}</p>
                                                                            <p><strong>Numero de Identificacion:</strong> {{$identificacion_emprendedor}}</p>
                                                                            <p><strong>Ciudad o Municipio:</strong> {{$ciudad_municipio_emprendedor}}</p>
                                                                            <p><strong>Ocupacion:</strong> {{$ocupacion_emprendedor}}</p>
                                                                            <p><strong>Educacion:</strong> {{implode(', ', $niveles_educacion_emprendedor);}}</p>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        {{-- Informacion de Emprendedor --}}


                                                        {{-- Informacion de Ocupacion --}}
                                                        <li class="p-4 sm:p-6">
                                                            <div class="flex items-center sm:items-start">
                                                                <div class="flex-1 ml-2 text-sm">
                                                                    <div class="">
                                                                        <div class="font-medium  sm:flex ">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 " width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M11 11h2v6h-2zm0-4h2v2h-2z"></path></svg>
                                                                            <h5><strong>Informacion Ocupacion: </strong> {{$ocupacion_emprendedor}}</h5>
                                                                          </div>

                                                                        @if(isset($pasosCompletados['pasoSiOcupacionEmpleado']) && $pasosCompletados['pasoSiOcupacionEmpleado'])
                                                                            <span class=" ml-6 text-gray-700 sm:block sm:mt-1 ">
                                                                                <p><strong>Idea de Negocio: </strong> {{$empleado_idea_negocio}}</p>
                                                                            </span>
                                                                        @endif

                                                                        @if(isset($pasosCompletados['pasoSiAprendizEgresadoSENA']) && $pasosCompletados['pasoSiAprendizEgresadoSENA'])
                                                                        <span class=" ml-6 text-gray-700 sm:block sm:mt-1 ">
                                                                            <p><strong>Centro de Formacion:</strong> {{$centro_formacion_actual_aprendiz}}</p>
                                                                            <p><strong>Programa de Formacion Adscrito:</strong>{{ $programa_formacion_adscrito }}</p>
                                                                            <p><strong>Interes Emprendedor:</strong> {{ $interes_emprendedor_es }}</p>
                                                                        </span>
                                                                        @endif


                                                                        @if(isset($pasosCompletados['pasoSiInstructorSENA']) && $pasosCompletados['pasoSiInstructorSENA'])
                                                                        <span class=" ml-6 text-gray-700 sm:block sm:mt-1 ">
                                                                            <p><strong>Centro de Formacion:</strong> {{$centro_formacion_actual_instructor}}</p>
                                                                            <p><strong>¿Hace parte de SENNOVA?:</strong>{{ $parte_sennova }}</p>
                                                                                @if(isset($pasosCompletados['pasoSiInstructorSENNOVA']) && $pasosCompletados['pasoSiInstructorSENNOVA'])
                                                                                    <p><strong>Participacion en SENNOVA: </strong>{{ implode(', ', $participacion_sennova); }}</p>
                                                                                    <p><strong>El grupo cuenta con un Semillero de Investigación?</strong>{{$sennova_semillero_investigacion }}</p>
                                                                                @endif
                                                                                @if(isset($pasosCompletados['pasoSiSennovaSemillero']) && $pasosCompletados['pasoSiSennovaSemillero'])
                                                                                    <p><strong>Cantidad de Integrantes del Semillero</strong>{{ $semillero_cantidad_integrantes }}</p>
                                                                                    <p><strong>Temas de Trabajo</strong> {{ $semillero_tema_trabajo }}</p>
                                                                                @endif
                                                                        </span>
                                                                        @endif


                                                                        @if(isset($pasosCompletados['pasoSiInvestigadorUniversidad']) && $pasosCompletados['pasoSiInvestigadorUniversidad'])
                                                                        <span class=" ml-6 text-gray-700 sm:block sm:mt-1 ">
                                                                            <p><strong>Nombre de la Universidad:</strong>
                                                                                {{ $investigador_universidad_nombre }}</p>
                                                                            <p><strong>Nombre del Grupo de Investigación:</strong>
                                                                                {{ $investigador_universidad_grupo_investigacion }}</p>
                                                                            <p><strong>¿Tiene una idea con capacidad de convertirse en un producto o un prototipo? </strong>
                                                                                {{ $investigador_idea_capacidad_producto }}</p></span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        {{-- Informacion de Ocupacion --}}

                                                        {{-- Tipo de Usuario --}}
                                                        @if(isset($pasosCompletados['pasoTipoUsuario']) && $pasosCompletados['pasoTipoUsuario'])
                                                            <li class="p-4 sm:p-6">
                                                            <div class="flex items-center sm:items-start">
                                                                <div class="flex-1 ml-2 text-sm">
                                                                    <div class="">
                                                                        <div class="font-medium  sm:flex ">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 " width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M11 11h2v6h-2zm0-4h2v2h-2z"></path></svg>
                                                                            <h5>Tipo de Usuario</h5>
                                                                          </div>

                                                                        <span class=" ml-6 text-gray-700 sm:block sm:mt-1 ">
                                                                            <p><strong>Tipo de Usuario:</strong> {{$tipo_usuario}}</p>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endif
                                                        {{-- Tipo de Usuario --}}


                                                        {{-- Tipo usuario Empresa  --}}
                                                        @if(isset($pasosCompletados['pasoSiTipoUsuarioEmpresa']) && $pasosCompletados['pasoSiTipoUsuarioEmpresa'])
                                                            <li class="p-4 sm:p-6">
                                                                <div class="flex items-center sm:items-start">
                                                                    <div class="flex-1 ml-2 text-sm">
                                                                        <div class="">
                                                                            <div class="font-medium  sm:flex ">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 " width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M11 11h2v6h-2zm0-4h2v2h-2z"></path></svg>
                                                                                <h5>Tipo de Empresa</h5>
                                                                            </div>

                                                                            <span class=" ml-6 text-gray-700 sm:block sm:mt-1 ">
                                                                                <p><strong>Tipo de Empresa:</strong> {{$tipo_empresa}}</p>
                                                                                @if(isset($pasosCompletados['pasoSiTipoEmpresaJuridica']) && $pasosCompletados['pasoSiTipoEmpresaJuridica'])<p><strong>Tipo persona juridica:</strong> {{ $tipo_persona_juridica }}</p>@endif
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        @endif
                                                        {{-- Tipo usuario Empresa  --}}


                                                        {{-- Asesoria SENA --}}
                                                        @if(isset($pasosCompletados['pasoUsuariosSinProyectoConcreto']) && $pasosCompletados['pasoUsuariosSinProyectoConcreto'])
                                                            <li class="p-4 sm:p-6">
                                                            <div class="flex items-center sm:items-start">
                                                                <div class="flex-1 ml-2 text-sm">
                                                                    <div class="">
                                                                        <div class="font-medium  sm:flex ">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 " width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M11 11h2v6h-2zm0-4h2v2h-2z"></path></svg>
                                                                            <h5>Asesoria Por Parte del SENA</h5>
                                                                          </div>

                                                                        <span class=" ml-6 text-gray-700 sm:block sm:mt-1 ">
                                                                            <p><strong>Asesoria Necesitada:</strong> {{implode(', ', $necesidad_asesoria_sena);}}</p>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </li>
                                                        @endif
                                                        {{-- Asesoria SENA --}}

                                                        {{-- Idea --}}
                                                        @if(isset($pasosCompletados['pasoFormularioIdeaProyecto']) && $pasosCompletados['pasoFormularioIdeaProyecto'])
                                                            <li class="p-4 sm:p-6">
                                                            <div class="flex items-center sm:items-start">
                                                                <div class="flex-1 ml-2 text-sm">
                                                                    <div class="">
                                                                        <div class="font-medium  sm:flex ">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 " width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M11 11h2v6h-2zm0-4h2v2h-2z"></path></svg>
                                                                            <h5>Informacion de la Idea: {{$nombre_idea}}</h5>
                                                                          </div>

                                                                        <span class=" ml-6 text-gray-700 sm:block sm:mt-1 ">
                                                                            <p><strong>Nombre de la Idea:</strong> {{ $nombre_idea }}</p>
                                                                            <p><strong>Descripción de la Idea:</strong> {{ $descripcion_idea }}</p>
                                                                            <p><strong>Modelo de Negocio:</strong> {{ $modelo_negocio }}</p>
                                                                            <p><strong>Producto o Servicio:</strong> {{ $producto_servicio }}</p>
                                                                            <p><strong>Validación del Producto:</strong> {{implode(', ', $validacion_producto);}}</p>
                                                                            <p><strong>¿La Idea Genera Ventas?</strong> {{ $idea_genera_ventas }}</p>
                                                                            @if(isset($pasosCompletados['pasoVentasPorMesIdea']) && $pasosCompletados['pasoVentasPorMesIdea'])<p><strong>Ventas Promedio por Mes:</strong> {{ $ventas_promedio_mes }}</p>@endif
                                                                            @if(isset($pasosCompletados['pasoEmpleadosGenera']) && $pasosCompletados['pasoEmpleadosGenera'])<p><strong>Cantidad de Empleados que Genera:</strong>{{ $idea_cantidad_empleados_genera }}</p>@endif
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </li>
                                                        @endif
                                                        {{-- Idea --}}

                                                        {{-- Nivel Idea Emprendedor --}}
                                                            @if(isset($pasosCompletados['pasoFormularioEmprendedores']) && $pasosCompletados['pasoFormularioEmprendedores'])
                                                                <li class="p-4 sm:p-6">
                                                                <div class="flex items-center sm:items-start">
                                                                    <div class="flex-1 ml-2 text-sm">
                                                                        <div class="">
                                                                            <div class="font-medium  sm:flex ">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 " width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M11 11h2v6h-2zm0-4h2v2h-2z"></path></svg>
                                                                                <h5>Nivel de la Idea del Emprendedor</h5>
                                                                            </div>

                                                                            <span class=" ml-6 text-gray-700 sm:block sm:mt-1 ">
                                                                                <p><strong>Nivel de la Idea del Emprendedor:</strong>{{ $emprendedores_nivel_idea }}</p>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </li>
                                                            @endif
                                                        {{-- Nivel Idea Emprendedor --}}

                                                        {{--  Detalles de la Empresa --}}
                                                            @if(isset($pasosCompletados['pasoDatosEmpresa']) && $pasosCompletados['pasoDatosEmpresa'])
                                                                <li class="p-4 sm:p-6">
                                                                <div class="flex items-center sm:items-start">
                                                                    <div class="flex-1 ml-2 text-sm">
                                                                        <div class="">
                                                                            <div class="font-medium  sm:flex ">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 " width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M11 11h2v6h-2zm0-4h2v2h-2z"></path></svg>
                                                                                <h5>Informacion de la Empresa: </h5>
                                                                            </div>

                                                                            <span class=" ml-6 text-gray-700 sm:block sm:mt-1 ">
                                                                                <p><strong>NIT de la Empresa:</strong>{{ $empresa_nit }}</p>
                                                                                <p><strong>Tamaño de la Empresa:</strong>{{ $empresa_tamaño }}</p>
                                                                                <p><strong>¿La empresa cuenta con una unidad de innovación o desarrollo de producto?:</strong>{{ $empresa_innovacion_desarrollo_producto }}</p>
                                                                                <p><strong>¿Cuenta con un proyecto de desarrollo de producto o servicios del cual ya tiene avances y requiere desarrollar prototipos? :</strong>{{ $empresa_proyecto_desarrollo_avances_requiere_prototipos }}</p>
                                                                            </span>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                </li>
                                                            @endif
                                                        {{--  Detalles de la Empresa --}}

                                                        {{-- Nivel Idea Proyecto Empresa --}}
                                                        @if(isset($pasosCompletados['pasoNivelProyecto']) && $pasosCompletados['pasoNivelProyecto'])
                                                            <li class="p-4 sm:p-6">
                                                                <div class="flex items-center sm:items-start">
                                                                    <div class="flex-1 ml-2 text-sm">
                                                                        <div class="">
                                                                            <div class="font-medium  sm:flex ">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 " width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M11 11h2v6h-2zm0-4h2v2h-2z"></path></svg>
                                                                                <h5>Nivel de la Idea de la Empresa</h5>
                                                                            </div>

                                                                            <span class=" ml-6 text-gray-700 sm:block sm:mt-1 ">
                                                                                <p><strong>Nivel de la Idea de la Empresa:</strong>{{ $nivel_proyecto_empresa }}</p>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        @endif
                                                        {{-- Nivel Idea Empresa --}}

                                                    {{-- Servicio SENA Ingresado  --}}
                                                    @if(isset($pasosCompletados['pasoProgramaIngreso']) && $pasosCompletados['pasoProgramaIngreso'])
                                                    <li class="p-4 sm:p-6">
                                                        <div class="flex items-center sm:items-start">
                                                            <div class="flex-1 ml-2 text-sm">
                                                                <div class="">
                                                                    <div class="font-medium  sm:flex ">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 " width="20" height="20" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z"></path><path d="M11 11h2v6h-2zm0-4h2v2h-2z"></path></svg>
                                                                        <h5>Servicio SENA Ingresado : {{$programa_sena_ingreso}}</h5>
                                                                    </div>

                                                                    <span class=" ml-6 text-gray-700 sm:block sm:mt-1 ">
                                                                        @switch(True)
                                                                            @case(isset($pasosCompletados['pasoServicioTecnoparque']) && $pasosCompletados['pasoServicioTecnoparque'])
                                                                            <p><strong>TecnoParque Postulado:</strong> {{$tecnoparque_postulado }}</p>
                                                                            <p><strong>Servicios Accedidos en TecnoParque:</strong>
                                                                                {{$servicios_accedidos_tecnoparque }}</p>
                                                                            <p><strong>Línea Técnica a la que Adscribe TecnoParque:</strong>
                                                                                {{implode(', ', $linea_tecnica_adscribe_tecnoparque); }}</p>
                                                                            <p><strong>Condiciones Cumplidas para la Idea:</strong>
                                                                                {{implode(', ', $condiciones_cumplidas_idea);  }}</p>
                                                                                @break

                                                                            @case(isset($pasosCompletados['pasoServicioEmprendimiento']) && $pasosCompletados['pasoServicioEmprendimiento'])
                                                                                <p><strong>Servicios de Emprendimiento:</strong>{{ $emprendimiento_servicios }}</p>
                                                                                @break

                                                                            @case(isset($pasosCompletados['pasoServicioCentrosFormacion']) && $pasosCompletados['pasoServicioCentrosFormacion'])
                                                                                <p><strong>Servicios del Centro de Formación:</strong>{{ $centro_formacion_servicios }}</p>
                                                                                @break

                                                                            @case(isset($pasosCompletados['pasoServicioEmprendimiento']) && $pasosCompletados['pasoServicioEmprendimiento'])
                                                                            <p><strong>Servicios de Emprendimiento:</strong>{{ $emprendimiento_servicios }}</p>
                                                                                @break

                                                                            @case(isset($pasosCompletados['pasoServicioHubInnovacion']) && $pasosCompletados['pasoServicioHubInnovacion'])
                                                                                <p><strong>Servicios del Hub de Innovación:</strong>
                                                                                    {{ $hub_innovacion_servicios }}</p>
                                                                                <p><strong>Línea Tecnológica del Hub:</strong> {{ implode(', ', $linea_tecnologica_hub); }}</p>
                                                                                <p><strong>Conocimientos en Líneas Seleccionadas:</strong>
                                                                                    {{ $conocimientos_lineas_seleccionada }}</p>
                                                                                <p><strong>Necesidad Puntual del Proyecto:</strong>
                                                                                    {{ $necesidad_puntual_proyecto }}</p>
                                                                                <p><strong>Cuenta con Equipo de Trabajo:</strong> {{ $cuenta_equipo_trabajo }}
                                                                                </p>
                                                                            @break

                                                                            @default
                                                                            <p><strong>Servicio Accedido:</strong>{{ $programa_sena_ingreso }}</p>
                                                                                @break

                                                                        @endswitch
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endif
                                                {{-- Servicio SENA Ingresado  --}}
                                                        <!-- More products... -->
                                                    </ul>
                                                </div>

                                                <!-- More orders... -->
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="w-full px-4 mt-4">
                                <div class="flex items-center justify-center lg:justify-end">
                                    <div class="flex flex-wrap items-center lg:justify-end">
                                        <button type="button" wire:click="back(1)" class="inline-flex items-center justify-center w-full py-2 mb-4 text-lg font-medium leading-7 text-gray-500 border border-gray-500 rounded-md shadow-sm xl:w-auto hover:text-gray-100 px-7 h-14 hover:bg-gray-700 hover:border-gray-700 lg:mb-4 md:mr-4 dark:border-gray-300 dark:hover:text-gray-100 dark:hover:bg-gray-400 dark:hover:border-gray-400 dark:text-gray-200">Volver</button>

                                        <button type="submit" class="inline-flex items-center justify-center w-full py-2 mb-4 text-lg font-medium leading-7 text-gray-100 bg-blue-500 border border-transparent rounded-md shadow-sm xl:w-auto hover:bg-blue-700 px-7 h-14 lg:mb-4 md:mr-4 dark:bg-blue-500 dark:hover:text-gray-100 dark:hover:bg-blue-400">Enviar</button>

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
