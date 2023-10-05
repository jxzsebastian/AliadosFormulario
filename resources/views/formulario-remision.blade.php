@foreach ($emprendedor as $emprendedor)
@endforeach
@foreach ($emprendedor->ideas as $idea)
@endforeach


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

        <div class="border-b border-gray-900/10 pb-12" >

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 setup-content">
                <div class="sm:col-span-3">
                    <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Nombre del
                        emprendedor(a)
                    </label>
                    <div class="mt-2">
                        <input value="{{$emprendedor->nombre_emprendedor}}" type="text" wire:model.defer="nombre_emprendedor" id="first-name"
                            autocomplete="given-name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400  sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="numero_contacto_emprendedor"
                        class="block text-sm font-medium leading-6 text-gray-900">Numero de Identificacion</label>
                    <div class="mt-2">
                        <input value="{{$emprendedor->identificacion_emprendedor}}" type="text" wire:model.defer="numero_contacto_emprendedor"
                            id="numero_contacto_emprendedor" autocomplete="family-name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400  sm:text-sm sm:leading-6">

                    </div>
                </div>

                <div class="sm:col-span-full">
                    <label for="" class="block text-sm font-medium leading-6 text-gray-900">Idea</label>
                    <div class="mt-2">
                        <input value="{{$idea->nombre_idea ?? 'No existe idea Registrada'}}" id=""type="" autocomplete=""
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400  sm:text-sm sm:leading-6">

                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label for=""
                        class="block text-sm font-medium leading-6 text-gray-900">Estrategia de Origen</label>
                    <div class="mt-2">
                        <input value="{{$emprendedor->programa_sena_ingreso}}" id="" type="text" autocomplete=""
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400  sm:text-sm sm:leading-6">

                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for=""
                        class="block text-sm font-medium leading-6 text-gray-900">Estrategia de Llegada</label>
                    <div class="mt-2">
                        <input id="" type="text" autocomplete=""
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400  sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for=""
                        class="block text-sm font-medium leading-6 text-gray-900">Contacto de Recepción</label>
                    <div class="mt-2">
                        <input id="" type="text" autocomplete=""
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400  sm:text-sm sm:leading-6">

                    </div>
                </div>
                <div class="col-span-3">
                    <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Notas</label>
                    <div class="mt-2">
                        <textarea id="about" name="about" rows="3"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>

                <div class="col-span-3">
                    <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Seguimiento</label>
                    <div class="mt-2">
                        <textarea id="about" name="about" rows="3"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>

            </div>

            <div class="flex justify-end w-full mt-5 ">
                <a href="{{route('listado')}}" type="button" class=" rounded-md bg-gray-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-1 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Cancelar</a>
                <button type="button" class=" rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-1 focus-visible:outline-offset-2 focus-visible:outline-blue-600 mx-2">Siguiente</button>
            </div>

        </div>


    </div>

@endsection
