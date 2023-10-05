@extends('layouts.sidebar')

@section('title', 'Home Page')

@section('content')

    <div class="space-y-12 mx-auto">
        <div class="flex flex-wrap w-full mb-10">
            <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">RIIES- REMISIÓN</h1>
                <div class="h-1 w-20 bg-blue-500 rounded"></div>
            </div>
        </div>

        <div class="border-b border-gray-900/10 pb-12 " id="step-1">

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 setup-content">
                <div class="sm:col-span-3">
                    <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Nombre del
                        emprendedor(a)
                    </label>
                    <div class="mt-2">
                        <input type="text" wire:model.defer="nombre_emprendedor" id="first-name"
                            autocomplete="given-name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset  sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="numero_contacto_emprendedor"
                        class="block text-sm font-medium leading-6 text-gray-900">Numero de Identificacion</label>
                    <div class="mt-2">
                        <input type="text" wire:model.defer="numero_contacto_emprendedor"
                            id="numero_contacto_emprendedor" autocomplete="family-name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset  sm:text-sm sm:leading-6">

                    </div>
                </div>

                <div class="sm:col-span-full">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Idea</label>
                    <div class="mt-2">
                        <input id="email"type="email" autocomplete="email"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset  sm:text-sm sm:leading-6">

                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label for="ciudad_municipio_emprendedor"
                        class="block text-sm font-medium leading-6 text-gray-900">Estrategia de Origes</label>
                    <div class="mt-2">
                        <input id="ciudad_municipio_emprendedor" type="text" autocomplete="ciudad_municipio_emprendedor"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset  sm:text-sm sm:leading-6">

                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="ciudad_municipio_emprendedor"
                        class="block text-sm font-medium leading-6 text-gray-900">Estrategia de Llegada</label>
                    <div class="mt-2">
                        <input id="ciudad_municipio_emprendedor" type="text" autocomplete="ciudad_municipio_emprendedor"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset  sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="ciudad_municipio_emprendedor"
                        class="block text-sm font-medium leading-6 text-gray-900">Contacto de Recepción</label>
                    <div class="mt-2">
                        <input id="ciudad_municipio_emprendedor" type="text" autocomplete="ciudad_municipio_emprendedor"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset  sm:text-sm sm:leading-6">

                    </div>
                </div>
                <div class="col-span-3">
                    <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Notas</label>
                    <div class="mt-2">
                        <textarea id="about" name="about" rows="3"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>

                <div class="col-span-3">
                    <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Seguimiento</label>
                    <div class="mt-2">
                        <textarea id="about" name="about" rows="3"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>
                <button type="button"
                    class="rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Siguiente</button>

            </div>
        </div>


    </div>

@endsection
