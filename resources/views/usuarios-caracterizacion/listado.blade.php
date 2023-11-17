@extends('layouts.sidebar')

@section('title', 'Home Page')

@section('content')
    <section class="container px-4 mx-auto">
        <div class="flex flex-col dark:bg-gray-800">
            <div class="-mx-2 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 ">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-2">
                    <div class=" px-4 py-5 border-b border-gray-200 sm:px-6 mb-4">
                        <div class="-ml-4 -mt-2 flex items-center justify-between flex-wrap sm:flex-nowrap">
                            <div class="ml-4 mt-2">
                                <h3 class="text-lg leading-6 font-medium ">Usuarios Caracterizados</h3>
                                <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">A continuación podras ver los emprendedores que han hecho la caracterización.</p>
                            </div>

                        </div>
                    </div>

                    @if ($emprendedores)
                    <div class="overflow-hidden md:rounded-lg mx-10">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700" id="listado">
                            <thead class="bg-gray-50 dark:bg-gray-800">
                                <tr>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Hora Registro
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Emprendedor
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Estrategia de Origen
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        ¿Registro alguna Idea?
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        ¿Necesita Asesoria del Sena?
                                    </th>

                                    <th scope="col" class="relative py-3.5 px-4">
                                        <span class="sr-only">Acciones</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                @foreach ($emprendedores as $emprendedor)
                                    <tr>
                                        <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            {{ $emprendedor->created_at/* ->isoFormat('MMMM Do YYYY, h:mm:ss a') */ }}</td>
                                        <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            <div class="flex items-center gap-x-2">
                                                <div>
                                                    <h2 class="text-sm font-medium text-gray-800 dark:text-white ">
                                                        {{ $emprendedor->nombre_emprendedor }}</h2>
                                                    <p class="text-xs font-normal text-gray-600 dark:text-gray-400">Email:
                                                        {{ $emprendedor->correo_emprendedor }}</p>
                                                    <p class="text-xs font-normal text-gray-600 dark:text-gray-400">Numero
                                                        de Contacto: {{ $emprendedor->numero_contacto_emprendedor }}</p>
                                                    <p class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                        Ciudad/Municipio: {{ $emprendedor->ciudad_municipio_emprendedor }}
                                                    </p>
                                                    <p class="text-xs font-normal text-gray-600 dark:text-gray-400">Tipo de
                                                        Identificación: {{ $emprendedor->tipo_identificacion_emprendedor }}
                                                    </p>
                                                    <p class="text-xs font-normal text-gray-600 dark:text-gray-400">Numero
                                                        de Documento: {{ $emprendedor->identificacion_emprendedor }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            {{ $emprendedor->programa_sena_ingreso }}</td>

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
                                            @if ($emprendedor->necesidad_asesoria_sena == 'Ninguna')
                                                No
                                            @else
                                                Si
                                            @endif
                                        </td>
                                        <td class="px-4 py-4 text-sm whitespace-nowrap ">
                                            <div class="flex items-center gap-x-6">
                                                <a href="{{ route('lista.show', $emprendedor->id) }}"
                                                    class="text-green-500 transition-colors duration-200 dark:hover:text-green-500 dark:text-gray-300 hover:text-green-500 focus:outline-none">
                                                    Ver Informacion
                                                </a>
                                                <a href="{{ route('usuario.remision', $emprendedor->id) }}"
                                                    class="flex text-blue-500 transition-colors duration-200 dark:hover:text-blue-500 dark:text-gray-300 hover:text-blue-500 focus:outline-none">
                                                    REMITIR
                                                </a>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    @else
                    <div class="text-center mt-12  py-20 rounded-md dark:bg-slate-500">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            class="mx-auto h-12 w-12 text-gray-400 dark:text-gray-200" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path
                                d="M13.707 3.293A.996.996 0 0 0 13 3H4a1 1 0 0 0-1 1v9c0 .266.105.52.293.707l8 8a.997.997 0 0 0 1.414 0l9-9a.999.999 0 0 0 0-1.414l-8-8zM12 19.586l-7-7V5h7.586l7 7L12 19.586z">
                            </path>
                            <circle cx="8.496" cy="8.495" r="1.505"></circle>
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-white">No Existen Emprendedores Caracterizados</h3>
                        <p class="mt-1 text-sm text-gray-500  dark:text-white">No existen Emprendedores Caracterizados en esta Consulta.</p>
                    </div>
                    @endif



                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                // Create a DataTable object
                var table = new DataTable('#listado', {
                    language: {
                        url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json',
                    },
                });
            });

        </script>
    @endsection
