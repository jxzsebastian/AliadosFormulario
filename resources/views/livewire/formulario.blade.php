<div class="space-y-12">

    @if(!empty($successMessage))
    <div class="alert alert-success">
       {{ $successMessage }}
    </div>
    @endif

{{--     <div class="text-center">
        <!-- progressbar -->
        <ul class="progressbar">
            <li class=""><a href="#step-1" type="button">Step 1</a></li>
            <li class="{{ $currentStep != 2 ? '' : 'active' }}"><a href="#step-2" type="button">Step 2</a></li>
            <li class="{{ $currentStep != 3 ? '' : 'active' }}"><a href="#step-3" type="button" disabled="disabled">Step 3</a></li>
        </ul>
    </div> --}}
    <div class="w-full py-6">
        <div class="flex">

            <div class="w-1/4">
                <div class="relative mb-2">
                    <div class="absolute flex align-center items-center align-middle content-center"
                        style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                    </div>

                    <div
                        class="w-10 h-10 mx-auto {{ $currentStep != 1 ? '' : 'bg-green-400' }}  bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
                        <span class="text-center   {{ $currentStep != 1 ? '' : 'text-white' }} text-gray-600 w-full">
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
                        class="w-10 h-10 mx-auto {{ $currentStep != 2 ? '' : 'bg-green-400' }}  bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center">
                        <span class="text-center {{ $currentStep != 2 ? '' : 'text-white' }} text-gray-600 w-full">
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
        {{-- Informacion de Persona --}}
        <div class="border-b border-gray-900/10 pb-12  {{ $currentStep != 1 ? 'hidden' : '' }}" id="step-1">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Informacion </h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Ingresar los datos.</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 setup-content">
                <div class="sm:col-span-3">
                    <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Nombre del emprendedor(a)
                    </label>
                    <div class="mt-2">
                        <input type="text" wire:model="nombre_emprendedor" id="first-name" autocomplete="given-name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('nombre_emprendedor') <span class="error">{{ $message }}</span> @enderror
                        </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="numero_contacto_emprendedor"
                        class="block text-sm font-medium leading-6 text-gray-900">Teléfono de contacto</label>
                    <div class="mt-2">
                        <input type="text" wire:model="numero_contacto_emprendedor" id="numero_contacto_emprendedor"
                            autocomplete="family-name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('numero_contacto_emprendedor') <span class="error">{{ $message }}</span> @enderror

                        </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Correo Electrónico de Contacto</label>
                    <div class="mt-2">
                        <input id="email" wire:model="correo_emprendedor" type="email" autocomplete="email"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('correo_emprendedor') <span class="error">{{ $message }}</span> @enderror

                        </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="ciudad_municipio_emprendedor" class="block text-sm font-medium leading-6 text-gray-900">Ciudad o Municipio donde esta ubicado</label>
                    <div class="mt-2">
                        <input id="text" type="" wire:model="ciudad_municipio_emprendedor" autocomplete="ciudad_municipio_emprendedor" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('ciudad_municipio_emprendedor') <span class="error">{{ $message }}</span> @enderror

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
                        @error('tipo_identificacion_emprendedor') <span class="error">{{ $message }}</span> @enderror

                    </div>
                </div>

                <div class="sm:col-span-5">
                    <label for="identificacion_emprendedor"
                        class="block text-sm font-medium leading-6 text-gray-900">Numero de Identificacion</label>

                    <div class="mt-2">
                        <input type="text" wire:model="identificacion_emprendedor" id="identificacion_emprendedor"
                            autocomplete="address-level1"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('identificacion_emprendedor') <span class="error">{{ $message }}</span> @enderror

                        </div>
                </div>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" wire:click="pasoPrimeroInformacionUsuario">Siguiente</button>

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
                                <label for="especializacion_tecnologica"
                                    class="font-medium text-gray-900">Especialización Tecnológica</label>
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
                    @error('niveles_educacion_emprendedor') <span class="error">{{ $message }}</span> @enderror

                </fieldset>

                <fieldset>
                    <legend class="text-sm font-semibold leading-6 text-gray-900">Ocupacion: </legend>
                    <p class="mt-1 text-sm leading-6 text-gray-600">¿Cuál es su ocupación?</p>
                    <div class="mt-6 space-y-6">
                        <div class="flex items-center gap-x-3">
                            <input id="empleado" value="empleado" wire:model="ocupacion" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="empleado"
                                class="block text-sm font-medium leading-6 text-gray-900">Empleado</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="trabajador_independiente" value="trabajador_independiente" wire:model="ocupacion"
                                type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="trabajador_independiente"
                                class="block text-sm font-medium leading-6 text-gray-900">Trabajador
                                Independiente</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="egresado_sena" value="egresado_sena" wire:model="ocupacion" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="egresado_sena"
                                class="block text-sm font-medium leading-6 text-gray-900">Egresado SENA</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="estudiante_universitario" value="estudiante_universitario" wire:model="ocupacion"
                                type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="estudiante_universitario"
                                class="block text-sm font-medium leading-6 text-gray-900">Estudiante
                                Universitario</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="instructor_sena" value="instructor_sena" wire:model="ocupacion" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="instructor_sena"
                                class="block text-sm font-medium leading-6 text-gray-900">Instructor Sena</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="aprendiz_sena" value="aprendiz_sena" wire:model="ocupacion" type="radio"
                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="aprendiz_sena"
                                class="block text-sm font-medium leading-6 text-gray-900">Aprendiz Sena</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="investigador_universidad" value="investigador_universidad" wire:model="ocupacion"
                                type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="investigador_universidad"
                                class="block text-sm font-medium leading-6 text-gray-900">Investigador
                                Universidad</label>
                        </div>
                        @error('ocupacion') <span class="error">{{ $message }}</span> @enderror

                        <div class="flex items-center gap-x-3">
                            <input id="otro_ocupacion" value="otro" wire:model="ocupacion"
                            type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                            <label for="otro_ocupacion" class="block text-sm font-medium leading-6 text-gray-900">Otro</label>
                            <input type="text" wire:model="otra_ocupacion" id="input-otro-ocupacion" autocomplete=""
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>

                    </div>
                </fieldset>

                <button type="button" class="text-base mr-2 font-semibold leading-6 text-gray-900" wire:click="back(1)">Volver</button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" wire:click="pasoSegundoOcupacionEscolaridad">Siguiente</button>

            </div>


        </div>
        {{-- Informacion de Ocupacion y Escolaridad --}}


        <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
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
        </div>
    </div>
