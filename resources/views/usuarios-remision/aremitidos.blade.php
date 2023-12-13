@extends('layouts.sidebar')
@section('title', 'Usuarios Remitidos')

@section('content')
    <div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
        <div class="-ml-4 -mt-2 flex items-center justify-between flex-wrap sm:flex-nowrap">
            <div class="ml-4 mt-2">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Usuarios Remitidos</h3>
                <p class="mt-1 text-sm text-gray-500">A continuación podras ver los usuarios que han sido remitidos.</p>
            </div>

        </div>
    </div>
    <div class="mt-8 mb-5">
        <h2 class="sr-only">Usuarios Remitidos</h2>

        <div class="max-w-8xl mx-auto sm:px-2 lg:px-8">
            <div class="max-w-6xl mx-auto space-y-8 sm:px-4 lg:max-w-8xl lg:px-0">
                <div class="mt-6 lg:flex lg:items-center lg:justify-between">
                    <div
                        class="inline-flex overflow-hidden bg-white border divide-x rounded-lg dark:bg-gray-900 rtl:flex-row-reverse dark:border-gray-700 dark:divide-gray-700">
                        <a href="{{ route('usuario.remitidos', ['estado' => '']) }}" type="button"
                            class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200
                         sm:text-sm dark:bg-gray-800 dark:text-gray-300 @if (!request()->input('estado') && !request()->input('filtro')) {{ 'bg-gray-100' }} @endif">
                            Ver Todos
                        </a>
                        <a href="{{ route('usuario.remitidos', ['estado' => 'Remitido']) }}"
                            class="px-5 py-2 text-xs @if (request()->input('estado') === 'Remitido') {{ 'bg-gray-100' }} @endif font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                            En Remisión
                        </a>
                        <a href="{{ route('usuario.remitidos', ['estado' => 'Finalizado']) }}"
                            class="px-5 py-2 text-xs @if (request()->input('estado') === 'Finalizado') {{ 'bg-gray-100' }} @endif font-medium text-gray-600 transition-colors duration-200 sm:text-sm  dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                            Finalizados
                        </a>
                    </div>
                    <form action="{{ route('usuario.remitidos') }}" method="GET"
                        class="relative flex items-center mt-4 md:mt-0">
                        <span class="absolute">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </span>
                        <input id="filtro" name="filtro" type="text" placeholder="Documento de Identidad o Nombre"
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
                @foreach ($emprendedores as $emprendedor)
                    @foreach ($emprendedor->remisiones as $remision)
                    @endforeach

                    <section id="resultado-pedido" x-data="{ open: false }"
                        class="bg-white border-t border-b border-gray-300 shadow-sm sm:rounded-lg sm:border ">
                        <ul role="list" class="divide-y divide-gray-200">
                            <li>
                                <div>

                                    <a href="#" class="block hover:bg-gray-50">
                                        <div class="flex items-center justify-between px-4 py-4 sm:px-6">
                                            <div class="min-w-0 flex-1 flex items-center">

                                                <div class="flex-shrink-0">
                                                    <img class="h-12 w-12 rounded-full"
                                                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                        alt="">
                                                </div>

                                                <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                                                    <div>
                                                        <p class="text-sm font-medium text-indigo-600 truncate">
                                                            {{ $emprendedor->nombre_emprendedor }}</p>
                                                        <p class="mt-2 flex items-center text-sm text-gray-500">
                                                            <!-- Heroicon name: solid/mail -->
                                                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                fill="currentColor" aria-hidden="true">
                                                                <path
                                                                    d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                                <path
                                                                    d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                                            </svg>
                                                            <span
                                                                class="truncate">{{ $emprendedor->correo_emprendedor }}</span>
                                                        </p>
                                                        <p class="mt-2 flex items-center text-sm text-gray-500">
                                                            @foreach ($emprendedor->ideas as $idea)
                                                                <span class="truncate">Idea:
                                                                    <strong>{{ $idea->nombre_idea }}</strong> </span>
                                                            @endforeach
                                                        </p>

                                                    </div>
                                                    <div class="hidden lg:block">
                                                        <div>

                                                            <p class="text-sm text-sm text-gray-800">
                                                                Caracterizado el <strong><time
                                                                        datetime="{{ $emprendedor->created_at }}">{{ \Carbon\Carbon::parse($emprendedor->created_at)->isoFormat('MMMM Do YYYY, h:mm a') }}
                                                                    </time> </strong>

                                                            </p>
                                                            <p class="text-sm text-sm text-gray-800 mt-2">
                                                                Remitido: <strong class=""><time
                                                                        datetime="{{ $remision->created_at }}">{{ \Carbon\Carbon::parse($remision->created_at)->diffForHumans() }}</time></strong>

                                                            </p>
                                                            <p class="mt-2 flex items-center text-sm text-gray-500">
                                                                <!-- Heroicon name: solid/check-circle -->
                                                                @switch(True)
                                                                    @case($emprendedor->estado == 'Finalizado')
                                                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400"
                                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                            fill="currentColor" aria-hidden="true">
                                                                            <path fill-rule="evenodd"
                                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                                                clip-rule="evenodd" />
                                                                        </svg>
                                                                    @break

                                                                    @case($emprendedor->estado == 'Remitido')
                                                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-blue-400"
                                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                            fill="currentColor" class="w-6 h-6">
                                                                            <path fill-rule="evenodd"
                                                                                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 01.67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 11-.671-1.34l.041-.022zM12 9a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                                                                clip-rule="evenodd" />
                                                                        </svg>
                                                                    @break

                                                                    @default
                                                                @endswitch
                                                                Estado: {{ $emprendedor->estado }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="flex items-center ">

                                                <button @click="open = ! open" type="button"
                                                    class=" lg:hidden -m-2 p-2 flex items-center text-gray-400 hover:text-gray-500"
                                                    id="menu-0-button" aria-expanded="false" aria-haspopup="true">
                                                    <span class="sr-only">Ver detalles del pedido</span>

                                                    <span class="inline-block mx-2">
                                                        <svg class="w-4 h-4 transition-transform transform"
                                                            :class="{ 'rotate-180': open }"
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M19 9l-7 7-7-7" />
                                                        </svg>
                                                    </span>
                                                </button>


                                                <div
                                                    class="hidden lg:col-span-2 lg:flex lg:items-center lg:justify-end lg:space-x-4 mr-5">

                                                    <a @click="open = ! open"
                                                        class="flex items-center justify-center bg-white py-2 px-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                        <span> Seguimiento </span>
                                                        <span class="inline-block mx-2">
                                                            <svg class="w-4 h-4 transition-transform transform"
                                                                :class="{ 'rotate-180': open }"
                                                                xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M19 9l-7 7-7-7" />
                                                            </svg>
                                                        </span>
                                                    </a>

                                                </div>

                                                <div x-data="{ openMenuMobile: false }" class="relative flex justify-end ">
                                                    <div>

                                                        <button @click="openMenuMobile = true" type="button"
                                                            class="-m-2 p-2 flex items-center text-gray-400 hover:text-gray-500"
                                                            id="menu-0-button" aria-expanded="false"
                                                            aria-haspopup="true">
                                                            <span class="sr-only">Opciones</span>
                                                            <!-- Heroicon name: outline/dots-vertical -->
                                                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                                aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                                            </svg>
                                                        </button>
                                                    </div>

                                                    <div x-show="openMenuMobile" @click.outside="openMenuMobile = false"
                                                        @click.away="openMenuMobile = false"
                                                        @keydown.escape="openMenuMobile = false"
                                                        x-transition:enter="transition ease-out duration-100"
                                                        x-transition:enter-start="transform opacity-0 scale-95"
                                                        x-transition:enter-end="transform opacity-100 scale-100"
                                                        x-transition:leave="transition ease-in duration-75"
                                                        x-transition:leave-start="transform opacity-100 scale-100"
                                                        x-transition:leave-end="transform opacity-0 scale-95" x-cloak
                                                        class="z-10 origin-bottom-right absolute right-0 mt-1 w-40 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
                                                        role="menu" aria-orientation="vertical"
                                                        aria-labelledby="menu-0-button" tabindex="-1">
                                                        <div class="py-1" role="none">
                                                            <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                                            <a href=""
                                                                class="cursor-pointer text-gray-700 block px-4 py-2 text-sm"
                                                                role="menuitem" tabindex="-1" id="menu-0-item-0">
                                                                Editar
                                                                Estado
                                                            </a>
                                                            <a type="button"
                                                                onclick="openModal({{ json_encode($emprendedor) }})"
                                                                class="cursor-pointer text-gray-700 block px-4 py-2 text-sm"
                                                                role="menuitem" tabindex="-1" id="menu-0-item-0">
                                                                Editar
                                                                Seguimiento</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Heroicon name: solid/chevron-right -->

                                            </div>
                                        </div>
                                    </a>

                                    {{-- Historial de Remision --}}
                                    <h4 class="sr-only">Items</h4>
                                    <div class="flow-root">
                                        <ul x-show="open" @click.away="open = false"
                                            x-transition:enter="transition ease-out duration-200"
                                            x-transition:enter-start="opacity-0 "
                                            x-transition:enter-end="opacity-100"
                                            x-transition:leave="transition ease-in duration-150"
                                            x-transition:leave-start="opacity-100"
                                            x-transition:leave-end="opacity-0"
                                            x-cloak
                                            @keydown.escape="open = false" role="list" class="m-6">

                                            <li>
                                                <div class="relative pb-8">
                                                    <span class="absolute top-5 left-5 -ml-px h-full w-0.5 bg-gray-200"
                                                        aria-hidden="true"></span>
                                                    <div class="relative flex space-x-3">
                                                        <div>
                                                            <span
                                                                class="h-10 w-10 rounded-full bg-cyan-500 flex items-center justify-center ring-8 ring-white">
                                                                <!-- Heroicon name: solid/check -->
                                                                <svg class="h-5 w-5 text-white"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                    fill="currentColor" aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                            <div>
                                                                <p class="text-sm text-gray-500">Remitido Por <a
                                                                        href="#"
                                                                        class="font-medium text-gray-900">{{ $remision->historialSeguimiento->first()->usuario->name }}</a>
                                                                </p>
                                                            </div>
                                                            <div
                                                                class="text-right text-sm whitespace-nowrap text-gray-500">
                                                                <time
                                                                    datetime="{{ $remision->historialSeguimiento->first()->created_at }}">{{ $remision->historialSeguimiento->first()->created_at }}</time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            @foreach ($remision->historialSeguimiento as $segumiento)
                                                <li>
                                                    <div class="relative pb-8">
                                                        <span class="absolute top-5 left-5 -ml-px h-full w-0.5 bg-gray-200"
                                                            aria-hidden="true"></span>
                                                        <div class="relative flex items-start space-x-3">
                                                            <div class="relative">
                                                                <img class="h-10 w-10 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white"
                                                                    src="https://images.unsplash.com/photo-1520785643438-5bf77931f493?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80"
                                                                    alt="">

                                                                <span
                                                                    class="absolute -bottom-0.5 -right-1 bg-white rounded-tl px-0.5 py-px">
                                                                    <!-- Heroicon name: solid/chat-alt -->
                                                                    <svg class="h-5 w-5 text-gray-400"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 20 20" fill="currentColor"
                                                                        aria-hidden="true">
                                                                        <path fill-rule="evenodd"
                                                                            d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                                                            clip-rule="evenodd" />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <div class="min-w-0 flex-1">
                                                                <div>
                                                                    <div class="text-sm">
                                                                        <a href="#"
                                                                            class="font-medium text-gray-900">{{ $segumiento->usuario->name }}</a>
                                                                    </div>

                                                                    <p class="mt-0.5 text-sm text-gray-500">Actualizo
                                                                        la
                                                                        Remision Hace: {{ $segumiento->created_at }}
                                                                    </p>
                                                                </div>
                                                                <div class="mt-2 text-sm text-gray-700">
                                                                    <span>
                                                                        <p class="mt-0.5"> <strong
                                                                                class="font-medium text-gray-900">
                                                                                Nota:
                                                                            </strong>{{ $segumiento->notas }}</p>
                                                                        <p class="mt-0.5"> <strong
                                                                                class="font-medium text-gray-900 ">
                                                                                Seguimiento:
                                                                            </strong>{{ $segumiento->seguimiento }}</p>
                                                                    </span>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach

                                            <li>
                                                <div class="relative pb-8">
                                                    <div class="relative flex space-x-3">
                                                        <div>
                                                            <span
                                                                class="h-10 w-10 rounded-full bg-green-500 flex items-center justify-center ring-8 ring-white">
                                                                <!-- Heroicon name: solid/check -->
                                                                <svg class="h-5 w-5 text-white"
                                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                                    fill="currentColor" aria-hidden="true">
                                                                    <path fill-rule="evenodd"
                                                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                            <div>
                                                                <p class="text-sm text-gray-500"><strong>Remision
                                                                        Finalizada</strong> <a href="#"
                                                                        class="font-medium text-gray-900"></a>
                                                                </p>
                                                            </div>
                                                            <div
                                                                class="text-right text-sm whitespace-nowrap text-gray-500">
                                                                <time
                                                                    datetime="{{ $remision->historialSeguimiento->first()->created_at }}">{{ $remision->historialSeguimiento->first()->created_at }}</time>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <!-- mas remisiones... -->
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </section>
                @endforeach

                {{-- {{ $pedidos->links() }} --}}
            </div>
        </div>

    </div>

    <div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
        style="background: rgba(0,0,0,.7);">
        <div
            class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-6xl mx-auto rounded shadow-lg z-50 overflow-y-auto">
            <div class="modal-content py-4 text-left px-6">
                <!--Title-->
                <div class="flex justify-between items-center pb-3">
                    <p class="text-2xl font-bold">Actualizar Seguimiento</p>
                    <div class="modal-close cursor-pointer z-50">
                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18"
                            height="18" viewBox="0 0 18 18">
                            <path
                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                            </path>
                        </svg>
                    </div>
                </div>
                <!--Body-->
                <div class="my-5">
                    <x-editar-seguimiento />
                </div>

            </div>
        </div>
    </div>


@endsection
