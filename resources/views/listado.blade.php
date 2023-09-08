@extends('layouts.sidebar')

@section('title', 'Home Page')

@section('content')

    <!-- component -->
        <!-- component -->
<section class="container px-4 mx-auto">
    <div class="flex flex-col">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Hora Registro
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Status
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Emprendedor
                                </th>
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    ¿Registro alguna Idea?
                                </th>
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    ¿Necesita Asesoria del Sena?
                                </th>

                                <th scope="col" class="relative py-3.5 px-4">
                                    <span class="sr-only">Acciones</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                @foreach ( $emprendedores as $emprendedor )

                            <tr>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap"> {{$emprendedor->created_at}}</td>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>

                                        <h2 class="text-sm font-normal">Paid</h2>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                    <div class="flex items-center gap-x-2">
                                        <img class="object-cover w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">
                                        <div>
                                            <h2 class="text-sm font-medium text-gray-800 dark:text-white ">{{$emprendedor->nombre_emprendedor}}</h2>
                                            <p class="text-xs font-normal text-gray-600 dark:text-gray-400">Email: {{$emprendedor->correo_emprendedor}}</p>
                                            <p class="text-xs font-normal text-gray-600 dark:text-gray-400">Numero de Contacto: {{$emprendedor->numero_contacto_emprendedor}}</p>
                                            <p class="text-xs font-normal text-gray-600 dark:text-gray-400">Ciudad/Municipio: {{$emprendedor->ciudad_municipio_emprendedor}}</p>
                                            <p class="text-xs font-normal text-gray-600 dark:text-gray-400">Tipo de Identificación: {{$emprendedor->tipo_identificacion_emprendedor}}</p>
                                            <p class="text-xs font-normal text-gray-600 dark:text-gray-400">Numero de Documento: {{$emprendedor->identificacion_emprendedor}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap ">
                                    @if ($emprendedor->ideas->count() > 0)
                                        @foreach ($emprendedor->ideas as $idea)
                                            {{ $idea->nombre_idea }}
                                        @endforeach
                                    @else
                                    <p>El emprendedor no tiene ideas registradas.</p>
                                @endif
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                    @if ($emprendedor->necesidad_asesoria_sena == "Ninguna")
                                        No
                                    @else
                                        Si
                                    @endif
                                </td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex items-center gap-x-6">
                                        <a href="{{route('lista.show', $emprendedor->id)}}" class="text-green-500 transition-colors duration-200 dark:hover:text-green-500 dark:text-gray-300 hover:text-green-500 focus:outline-none">
                                            Ver Informacion
                                        </a>

                                    </div>
                                </td>
                            </tr>
                @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


        @livewireScripts
        <script>
            document.addEventListener('livewire:load', function() {
                Livewire.on('updateStep', function(step) {
                    // Actualiza el componente con el nuevo estado
                    Livewire.emit('updateStep', step);
                });
            });
        </script>
    @endsection
