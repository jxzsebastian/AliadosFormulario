@extends('layouts.sidebar')
@section('title', 'Usuarios Remitidos')

@section('content')

    <main>
        <div class=" px-4 py-5 border-b border-gray-200 dark:border-gray-600 sm:px-6">
            <div class="-ml-4 -mt-2 flex items-center justify-between flex-wrap sm:flex-nowrap">
                <div class="ml-4 mt-2">
                    <h3 class="text-lg leading-6 font-medium dark:text-gray-200 text-gray-900">Usuarios Remitidos</h3>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-1s00">A continuación podras ver los usuarios que han
                        sido
                        remitidos.</p>
                </div>

            </div>
        </div>


        <div class="mt-8 mb-5">
            <h2 class="sr-only">Usuarios Remitidos</h2>

            <div class="max-w-9xl mx-auto sm:px-2 lg:px-8">
                <div class="max-w-7xl mx-auto space-y-8 sm:px-4 lg:max-w-8xl lg:px-0">
                    <div class="mt-6 lg:flex lg:items-center lg:justify-between">
                        <div
                            class="inline-flex overflow-hidden bg-white border divide-x rounded-lg dark:bg-gray-900 rtl:flex-row-reverse dark:border-gray-700 dark:divide-gray-700">
                            <a href="{{ route('usuario.remitidos', ['estado' => 'Todos']) }}" type="button"
                                class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200
                         sm:text-sm dark:bg-gray-800 dark:text-gray-300 @if (request()->input('estado') === 'Todos' || (!request()->input('estado') && !request()->input('filtro'))) ) {{ 'bg-gray-100' }} @endif">
                                Ver Todos
                            </a>
                            <a href="{{ route('usuario.remitidos', ['estado' => 'Remitido']) }}"
                                class="px-5 py-2 text-xs @if (request()->input('estado') === 'Remitido') {{ 'bg-gray-100' }} @endif font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                                En Remisión
                            </a>
                            <a href="{{ route('usuario.remitidos', ['estado' => 'Restablecido']) }}"
                                class="px-5 py-2 text-xs @if (request()->input('estado') === 'Restablecido') {{ 'bg-gray-100' }} @endif font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                                Restablecidos
                            </a>
                            <a href="{{ route('usuario.remitidos', ['estado' => 'Finalizado']) }}"
                                class="px-5 py-2 text-xs @if (request()->input('estado') === 'Finalizado') {{ 'bg-gray-100' }} @endif font-medium text-gray-600 transition-colors duration-200 sm:text-sm  dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                                Finalizados
                            </a>
                        </div>
                        <form action="{{ route('usuario.remitidos') }}" method="GET"
                            class="relative flex items-center mt-4 md:mt-0">
                            <span class="absolute">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor"
                                    class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </span>
                            <input id="filtro" name="filtro" type="text"
                                placeholder="Documento de Identidad o Nombre"
                                class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-96 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">

                            <button type="submit"
                                class="inline-flex items-center py-1.5 px-3 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg
                                    class="-ml-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                    @if (!$emprendedores->isEmpty())
                        <div id="demo" class="flex flex-col mt-6" x-data="{ openRows: [] }">
                            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class=" inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                    <div class="max-h-full	border-gray-300 dark:border-gray-700 md:rounded-lg">
                                        <table id="paginated-list"
                                            class=" wrapper border border-gray-300 dark:border-gray-700 rounded-lg min-w-full max-w-full divide-y divide-gray-300 dark:divide-gray-700">
                                            <thead class="bg-gray-50 dark:bg-gray-800">
                                                <tr>
                                                    <th scope="col"
                                                        class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                        Emprendedor
                                                    </th>

                                                    <th scope="col"
                                                        class="px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                        Estado
                                                    </th>

                                                    <th scope="col"
                                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                        Caracterizacion y Remisión
                                                    </th>

                                                    <th scope="col"
                                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                        <span class="sr-only">See</span>
                                                    </th>

                                                    <th scope="col" class="relative py-3.5 px-4">
                                                        <span class="sr-only">Edit</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody
                                                class="wrapper bg-white divide-y divide-gray-300 dark:divide-gray-700 dark:bg-gray-900">
                                                @foreach ($emprendedores as $emprendedor)
                                                    @foreach ($emprendedor->remisiones as $remision)
                                                    @endforeach

                                                    @foreach ($remision->historialSeguimiento as $estado)
                                                    @endforeach

                                                    <div class="item">
                                                        <tr>
                                                            <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                                                <a href="{{ route('lista.show', $emprendedor->id) }}">
                                                                    <h2 class="font-medium text-gray-800 dark:text-white ">
                                                                        {{ $emprendedor->nombre_emprendedor }}</h2>
                                                                    <span
                                                                        class="flex items-center text-sm font-normal text-gray-600 dark:text-gray-400">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            height="1em" viewBox="0 0 576 512">
                                                                            <path
                                                                                d="M512 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H512zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM208 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H176zM376 144c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376z" />
                                                                        </svg>
                                                                        <p class="mx-2">
                                                                            {{ $emprendedor->correo_emprendedor }}
                                                                        </p>
                                                                    </span>

                                                                    <span
                                                                        class="flex items-center text-sm font-normal text-gray-600 dark:text-gray-400"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            class="text-gray-600 dark:text-gray-400"
                                                                            height="1em" viewBox="0 0 576 512">
                                                                            <path
                                                                                d="M512 80c8.8 0 16 7.2 16 16V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V96c0-8.8 7.2-16 16-16H512zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM208 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128zm-32 32c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H304c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H176zM376 144c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24h80c13.3 0 24-10.7 24-24s-10.7-24-24-24H376z" />
                                                                        </svg>
                                                                        <p class="mx-2">
                                                                            <strong>{{ $emprendedor->tipo_identificacion_emprendedor }}:
                                                                            </strong>{{ $emprendedor->identificacion_emprendedor }}
                                                                        </p>
                                                                    </span>
                                                                </a>
                                                            </td>
                                                            <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                                                                <div
                                                                    class="inline px-3 py-1 text-sm font-normal rounded-full
                                                                @switch(True)
                                                                    @case($estado->estado == 'Finalizado')
                                                                    text-emerald-500 gap-x-2 bg-emerald-100/60
                                                                    @break
                                                                    @case($estado->estado == 'Remitido')
                                                                    text-blue-500 gap-x-2 bg-blue-100/60
                                                                    @break
                                                                    @case($estado->estado == 'Restablecido')
                                                                    text-orange-500 gap-x-2 bg-orange-100/60
                                                                    @break
                                                                    @default
                                                                @endswitch
                                                                dark:bg-gray-800">
                                                                    {{ $estado->estado }}
                                                                </div>
                                                            </td>
                                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                                <div>
                                                                    <p class=" text-sm text-gray-600">
                                                                        Caracterizado el <strong><time
                                                                                datetime="{{ $emprendedor->created_at }}">{{ \Carbon\Carbon::parse($emprendedor->created_at)->isoFormat('MMMM Do YYYY, h:mm a') }}
                                                                            </time> </strong>

                                                                    </p>
                                                                    <p class="text-sm text-sm text-gray-600 mt-2">
                                                                        Remitido: <strong class=""><time
                                                                                datetime="{{ $remision->created_at }}">{{ \Carbon\Carbon::parse($remision->created_at)->diffForHumans() }}</time></strong>

                                                                    </p>
                                                                    <p class="text-sm text-sm text-gray-600 mt-2">
                                                                        Programa SENA Actual: <strong
                                                                            class="">{{ $estado->programa_sena_actual }}</strong>

                                                                    </p>
                                                                </div>
                                                            </td>

                                                            <td class="py-4 text-sm whitespace-nowrap">
                                                                <button
                                                                    class=" lg:hidden -m-2 p-2 flex items-center text-gray-400 dark:bg-gray-800 hover:text-gray-500"
                                                                    id="menu-0-button" aria-expanded="false"
                                                                    aria-haspopup="true"
                                                                    @click="openRows[{{ $loop->index }}] = !openRows[{{ $loop->index }}]"
                                                                    type="button">
                                                                    <span class="sr-only">Ver Seguimiento</span>

                                                                    <span class="inline-block mx-2">
                                                                        <svg class="w-4 h-4 transition-transform transform"
                                                                            :class="{
                                                                                'rotate-180': openRows[
                                                                                    {{ $loop->index }}]
                                                                            }"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none" viewBox="0 0 24 24"
                                                                            stroke="currentColor">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M19 9l-7 7-7-7" />
                                                                        </svg>
                                                                    </span>
                                                                </button>


                                                                <div
                                                                    class="hidden lg:col-span-2 lg:flex lg:items-center lg:justify-end lg:space-x-4 mr-5">

                                                                    <a class="flex items-center justify-center bg-white py-2 px-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium dark:bg-gray-800 dark:text-white dark:border-gray-900 text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                                                        @click="openRows[{{ $loop->index }}] = !openRows[{{ $loop->index }}]">
                                                                        <span> Ver Seguimiento </span>
                                                                        <span class="inline-block mx-2">
                                                                            <svg class="w-4 h-4 transition-transform transform"
                                                                                :class="{
                                                                                    'rotate-180': openRows[
                                                                                        {{ $loop->index }}]
                                                                                }"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                fill="none" viewBox="0 0 24 24"
                                                                                stroke="currentColor">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="2" d="M19 9l-7 7-7-7" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>

                                                                </div>
                                                            </td>

                                                            <td class="pr-4 py-4 text-sm whitespace-nowrap">
                                                                <div x-data="{ openMenuMobile: false }"
                                                                    class="relative flex justify-end z-100">
                                                                    <div>
                                                                        <button @click="openMenuMobile = true"
                                                                            type="button"
                                                                            class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 hover:bg-gray-100"
                                                                            id="menu-0-button" aria-expanded="false"
                                                                            aria-haspopup="true">
                                                                            <span class="sr-only">Opciones</span>
                                                                            <!-- Heroicon name: outline/dots-vertical -->
                                                                            <svg class="w-6 h-6"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                fill="none" viewBox="0 0 24 24"
                                                                                stroke="currentColor" aria-hidden="true">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="2"
                                                                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                                            </svg>
                                                                        </button>
                                                                    </div>

                                                                    <div x-show="openMenuMobile"
                                                                        @click.outside="openMenuMobile = false"
                                                                        @click.away="openMenuMobile = false"
                                                                        @keydown.escape="openMenuMobile = false"
                                                                        x-transition:enter="transition ease-out duration-100"
                                                                        x-transition:enter-start="transform opacity-0 scale-95"
                                                                        x-transition:enter-end="transform opacity-100 scale-100"
                                                                        x-transition:leave="transition ease-in duration-75"
                                                                        x-transition:leave-start="transform opacity-100 scale-100"
                                                                        x-transition:leave-end="transform opacity-0 scale-95"
                                                                        class="z-50 origin-bottom-right absolute right-0  mt-3  w-40 rounded-md shadow-lg bg-white dark:bg-slate-900 dark:text-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                                                        role="menu" aria-orientation="vertical"
                                                                        aria-labelledby="menu-0-button" tabindex="-1">
                                                                        <div class="py-1" role="none">
                                                                            <a href="{{ route('lista.show', $emprendedor->id) }}"
                                                                                class="hover:bg-gray-100 dark:hover:bg-slate-800 cursor-pointer dark:text-white text-gray-700 block px-4 py-2 text-sm"
                                                                                role="menuitem" tabindex="-1"
                                                                                id="menu-0-item-0">
                                                                                Ver Información</a>
                                                                        </div>
                                                                        <div class="py-1" role="none">
                                                                            <a type="button"
                                                                                onclick="openModal({{ json_encode($emprendedor) }})"
                                                                                class="hover:bg-gray-100 dark:hover:bg-slate-800 cursor-pointer text-gray-700 dark:text-white block px-4 py-2 text-sm"
                                                                                role="menuitem" tabindex="-1"
                                                                                id="menu-0-item-0">
                                                                                Editar
                                                                                Seguimiento</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr x-show="openRows[{{ $loop->index }}]"
                                                            x-transition:enter="transition ease-out duration-200"
                                                            x-transition:enter-start="opacity-0 "
                                                            x-transition:enter-end="opacity-100"
                                                            x-transition:leave="transition ease-in duration-150"
                                                            x-transition:leave-start="opacity-100"
                                                            x-transition:leave-end="opacity-0" x-cloak
                                                            @keydown.escape="openRows[{{ $loop->index }}] = false"
                                                            role="list">
                                                            <td colspan="5" class="max-w-xl">
                                                                <h4 class="sr-only">Items</h4>
                                                                <div class="flow-root">
                                                                    <ul class="m-6 listitems">
                                                                        <li class="item">
                                                                            <div class="relative pb-8">
                                                                                <span
                                                                                    class="absolute top-5 left-5 -ml-px h-full w-0.5 bg-gray-200 dark:text-gray-400"
                                                                                    aria-hidden="true"></span>
                                                                                <div class="relative flex space-x-3">
                                                                                    <div>
                                                                                        <span
                                                                                            class="h-10 w-10 rounded-full bg-cyan-500 flex items-center justify-center ring-8 ring-white dark:ring-slate-800">
                                                                                            <!-- Heroicon name: solid/check -->
                                                                                            <svg class="h-5 w-5 text-white"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 20 20"
                                                                                                fill="currentColor"
                                                                                                aria-hidden="true">
                                                                                                <path fill-rule="evenodd"
                                                                                                    d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                                                                    clip-rule="evenodd" />
                                                                                            </svg>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div
                                                                                        class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                                                        <div>
                                                                                            <p
                                                                                                class="text-sm text-gray-500">
                                                                                                Remitido Por
                                                                                                <a href="#"
                                                                                                    class="font-medium text-gray-900 dark:text-gray-400">{{ $remision->historialSeguimiento->first()->usuario->name }}</a>
                                                                                            </p>
                                                                                        </div>
                                                                                        <div
                                                                                            class="text-right text-sm whitespace-nowrap text-gray-500">
                                                                                            <time
                                                                                                datetime="{{ \Carbon\Carbon::parse($remision->historialSeguimiento->first()->created_at)->isoFormat('MMMM Do YYYY, h:mm a') }}">{{ \Carbon\Carbon::parse($remision->historialSeguimiento->first()->created_at)->isoFormat('MMMM Do YYYY, h:mm a') }}</time>

                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </li>

                                                                        @foreach ($remision->historialSeguimiento as $key => $segumiento)
                                                                            <li class="item">
                                                                                <div class="relative pb-8">
                                                                                    <span
                                                                                        class="absolute top-5 left-5 -ml-px h-full w-0.5 dark:bg-slate-700 bg-gray-200"
                                                                                        aria-hidden="true"></span>
                                                                                    <div
                                                                                        class="relative flex items-start space-x-3">
                                                                                        <div class="relative">
                                                                                            <img class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white dark:ring-slate-800"
                                                                                                src="https://images.unsplash.com/photo-1520785643438-5bf77931f493?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80"
                                                                                                alt="">

                                                                                            <span
                                                                                                class="absolute -bottom-0.5 -right-1 bg-white dark:bg-slate-800 rounded-lg px-0.5 py-px">
                                                                                                <svg class="h-5 w-5 text-gray-400"
                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                    viewBox="0 0 20 20"
                                                                                                    fill="currentColor"
                                                                                                    aria-hidden="true">
                                                                                                    <path
                                                                                                        fill-rule="evenodd"
                                                                                                        d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                                                                                        clip-rule="evenodd" />
                                                                                                </svg>
                                                                                            </span>
                                                                                        </div>
                                                                                        <div class="min-w-0 flex-1">
                                                                                            <div>
                                                                                                <div class="text-sm">
                                                                                                    <a
                                                                                                        class="font-medium text-gray-900 dark:text-gray-200">
                                                                                                        {{ $segumiento->usuario->name }}
                                                                                                        -<span
                                                                                                            class="text-gray-500">
                                                                                                            {{ $segumiento->usuario->programa_sena }}
                                                                                                        </span></a>
                                                                                                </div>

                                                                                                <p
                                                                                                    class="mt-0.5 text-sm text-gray-500 dark:text-gray-400">
                                                                                                    Actualizo la Remision
                                                                                                    el:
                                                                                                    <strong>
                                                                                                        {{ \Carbon\Carbon::parse($segumiento->created_at)->isoFormat('MMMM Do YYYY, h:mm a') }}</strong>
                                                                                                </p>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mt-2 text-sm text-gray-700">
                                                                                                <span>
                                                                                                    <p
                                                                                                        class="mt-0.5 dark:text-gray-200">
                                                                                                        <strong
                                                                                                            class="font-medium text-gray-900 dark:text-gray-400">
                                                                                                            Nota:
                                                                                                        </strong>{{ $segumiento->notas }}
                                                                                                    </p>
                                                                                                    <p
                                                                                                        class="mt-0.5 dark:text-gray-200">
                                                                                                        <strong
                                                                                                            class="font-medium text-gray-900 dark:text-gray-400">
                                                                                                            Seguimiento:
                                                                                                        </strong>{{ $segumiento->seguimiento }}
                                                                                                    </p>
                                                                                                </span>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                            @if (
                                                                                $key + 1 < count($remision->historialSeguimiento) &&
                                                                                    $remision->historialSeguimiento[$key + 1]->estado !== $segumiento->estado)
                                                                                <li class="item">
                                                                                    <div class="relative pb-8">
                                                                                        <span
                                                                                            class="absolute top-5 left-5 -ml-px h-full w-0.5 dark:bg-slate-700 bg-gray-200"
                                                                                            aria-hidden="true"></span>
                                                                                        <div
                                                                                            class="relative flex space-x-3">
                                                                                            <div>
                                                                                                <span
                                                                                                    class="h-10 w-10 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white dark:ring-slate-800">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="currentColor"
                                                                                                        class="h-6 w-6 text-white">
                                                                                                        <path
                                                                                                            fill-rule="evenodd"
                                                                                                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                                                                                            clip-rule="evenodd" />
                                                                                                    </svg>

                                                                                                </span>
                                                                                            </div>
                                                                                            <div
                                                                                                class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                                                                <div>
                                                                                                    <div class="text-sm">
                                                                                                        <p
                                                                                                            class="text-sm text-gray-500">
                                                                                                            Estado Cambiado
                                                                                                            A: <a
                                                                                                                href="#"
                                                                                                                class="font-medium text-gray-900 dark:text-gray-400">{{ $remision->historialSeguimiento[$key + 1]->estado }}</a>
                                                                                                        <p
                                                                                                            class="text-sm text-gray-500">
                                                                                                            Autor del
                                                                                                            Cambio: <a
                                                                                                                href="#"
                                                                                                                class="font-medium text-gray-900 dark:text-gray-400">{{ $remision->historialSeguimiento[$key + 1]->first()->usuario->name }}</a>
                                                                                                        </p>
                                                                                                    </div>

                                                                                                    <p
                                                                                                        class="mt-0.5 text-sm text-gray-500 dark:text-gray-400">
                                                                                                        Actualización de la
                                                                                                        Remision:
                                                                                                        <time
                                                                                                            datetime="{{ \Carbon\Carbon::parse($remision->historialSeguimiento[$key + 1]->latest('created_at')->first()->created_at)->isoFormat('MMMM Do YYYY, h:mm a') }}">
                                                                                                            {{ \Carbon\Carbon::parse($remision->historialSeguimiento[$key + 1]->latest('created_at')->first()->created_at)->isoFormat('MMMM Do YYYY, h:mm a') }}</time>
                                                                                                    </p>

                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            @endif
                                                                            @if (
                                                                                $key + 1 < count($remision->historialSeguimiento) &&
                                                                                    $remision->historialSeguimiento[$key + 1]->programa_sena_actual !== $segumiento->programa_sena_actual)
                                                                                <li class="item">
                                                                                    <div class="relative pb-8">
                                                                                        <span
                                                                                            class="absolute top-5 left-5 -ml-px h-full w-0.5 dark:bg-slate-700 bg-gray-200"
                                                                                            aria-hidden="true"></span>
                                                                                        <div
                                                                                            class="relative flex space-x-3">
                                                                                            <div>
                                                                                                <span
                                                                                                    class="h-10 w-10 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white dark:ring-slate-800">
                                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="currentColor"
                                                                                                        class="h-6 w-6 text-white">
                                                                                                        <path
                                                                                                            fill-rule="evenodd"
                                                                                                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                                                                                            clip-rule="evenodd" />
                                                                                                    </svg>

                                                                                                </span>
                                                                                            </div>
                                                                                            <div
                                                                                                class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                                                                <div>
                                                                                                    <div class="text-sm">
                                                                                                        <p
                                                                                                            class="text-sm text-gray-500">
                                                                                                            Programa Sena
                                                                                                            Cambiado A: <a
                                                                                                                href="#"
                                                                                                                class="font-medium text-gray-900 dark:text-gray-400">{{ $remision->historialSeguimiento[$key + 1]->programa_sena_actual }}</a>
                                                                                                        <p
                                                                                                            class="text-sm text-gray-500">
                                                                                                            Autor del
                                                                                                            Cambio: <a
                                                                                                                href="#"
                                                                                                                class="font-medium text-gray-900 dark:text-gray-400">{{ $remision->historialSeguimiento[$key + 1]->first()->usuario->name }}</a>
                                                                                                        </p>
                                                                                                    </div>

                                                                                                    <p
                                                                                                        class="mt-0.5 text-sm text-gray-500 dark:text-gray-400">
                                                                                                        Actualización de la
                                                                                                        Remision:
                                                                                                        <time
                                                                                                            datetime="{{ \Carbon\Carbon::parse($remision->historialSeguimiento[$key + 1]->latest('created_at')->first()->created_at)->isoFormat('MMMM Do YYYY, h:mm a') }}">
                                                                                                            {{ \Carbon\Carbon::parse($remision->historialSeguimiento[$key + 1]->latest('created_at')->first()->created_at)->isoFormat('MMMM Do YYYY, h:mm a') }}</time>
                                                                                                    </p>

                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            @endif
                                                                        @endforeach

                                                                    </ul>

                                                                    <div id="pagination" class="mt-6"></div>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </div>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    {{--  {{ $emprendedores->links() }} --}}
                                </div>
                            </div>
                        </div>
                        {{ $emprendedores->links() }}

                </div>
            </div>
        </div>

        <x-editar-seguimiento />
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
            <h3 class="mt-2 text-sm font-medium text-gray-900 dark:text-white">No Existen Emprendedores Remitidos</h3>
            <p class="mt-1 text-sm text-gray-500  dark:text-white">No existen Emprendedores Remitidos en esta Consulta.</p>
        </div>

        @endif

    </main>

    @if (session('edit') == 'ok')
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "success",
                title: "Editado con Éxito"
            });
        </script>
    @endif

    @if (session('remitido') == 'ok')
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "success",
                title: "Remitido con Éxito"
            });
        </script>
    @endif



@endsection
