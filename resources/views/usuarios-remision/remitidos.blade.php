@extends('layouts.sidebar')
@section('title', 'Home Page')

@section('content')
    <div class=" px-4 py-5 border-b border-gray-200 dark:border-gray-600 sm:px-6">
        <div class="-ml-4 -mt-2 flex items-center justify-between flex-wrap sm:flex-nowrap">
            <div class="ml-4 mt-2">
                <h3 class="text-lg leading-6 font-medium dark:text-gray-200 text-gray-900">Usuarios Remitidos</h3>
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-1s00">A continuación podras ver los usuarios que han sido remitidos.</p>
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
                <div class="flex flex-col mt-6" x-data="{ openRows: [] }">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                            <div class="overflow-hidden border border-gray-300 dark:border-gray-700 md:rounded-lg">
                                <table class="min-w-full max-w-full divide-y divide-gray-300 dark:divide-gray-700">
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
                                                <span class="sr-only">See</span></th>

                                            <th scope="col" class="relative py-3.5 px-4">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-300 dark:divide-gray-700 dark:bg-gray-900">
                                        @foreach ($emprendedores as $emprendedor)
                                                @foreach ($emprendedor->remisiones as $remision)
                                                @endforeach
                                            <div>
                                                <tr>
                                                    <td class="px-4 py-4 text-sm font-medium whitespace-nowrap">
                                                        <div>
                                                            <h2 class="font-medium text-gray-800 dark:text-white ">{{ $emprendedor->nombre_emprendedor }}</h2>
                                                            <p class="text-sm font-normal text-gray-600 dark:text-gray-400">
                                                                {{ $emprendedor->correo_emprendedor }}</p>
                                                                <p class="text-sm font-normal text-gray-600 dark:text-gray-400"> {{ $emprendedor->correo_emprendedor }}</p>
                                                        </div>
                                                    </td>
                                                    <td class="px-12 py-4 text-sm font-medium whitespace-nowrap">
                                                        <div class="inline px-3 py-1 text-sm font-normal rounded-full
                                                        @switch(True)
                                                            @case($emprendedor->estado == 'Finalizado')
                                                            text-emerald-500 gap-x-2 bg-emerald-100/60
                                                            @break
                                                            @case($emprendedor->estado == 'Remitido')
                                                            text-blue-500 gap-x-2 bg-blue-100/60
                                                            @break
                                                            @default
                                                        @endswitch
                                                        dark:bg-gray-800">
                                                            {{ $emprendedor->estado }}
                                                        </div>
                                                    </td>
                                                    <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                        <div>
                                                            <p class="text-sm text-sm text-gray-600">
                                                                Caracterizado el <strong><time
                                                                        datetime="{{ $emprendedor->created_at }}">{{ \Carbon\Carbon::parse($emprendedor->created_at)->isoFormat('MMMM Do YYYY, h:mm a') }}
                                                                    </time> </strong>

                                                            </p>
                                                            <p class="text-sm text-sm text-gray-600 mt-2">
                                                                Remitido: <strong class=""><time
                                                                        datetime="{{ $remision->created_at }}">{{ \Carbon\Carbon::parse($remision->created_at)->diffForHumans() }}</time></strong>

                                                            </p>
                                                        </div>
                                                    </td>

                                                    <td class="py-4 text-sm whitespace-nowrap">
                                                        <button
                                                            class=" lg:hidden -m-2 p-2 flex items-center text-gray-400 dark:bg-gray-800 hover:text-gray-500"
                                                            id="menu-0-button" aria-expanded="false" aria-haspopup="true"  @click="openRows[{{ $loop->index }}] = !openRows[{{ $loop->index }}]"  type="button">
                                                            <span class="sr-only">Ver Seguimiento</span>

                                                            <span class="inline-block mx-2">
                                                                <svg class="w-4 h-4 transition-transform transform"
                                                                    :class="{ 'rotate-180': openRows[{{ $loop->index }}] }"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M19 9l-7 7-7-7" />
                                                                </svg>
                                                            </span>
                                                        </button>


                                                        <div
                                                            class="hidden lg:col-span-2 lg:flex lg:items-center lg:justify-end lg:space-x-4 mr-5">

                                                            <a
                                                                class="flex items-center justify-center bg-white py-2 px-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium dark:bg-gray-800 dark:text-white dark:border-gray-900 text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" @click="openRows[{{ $loop->index }}] = !openRows[{{ $loop->index }}]" >
                                                                <span> Ver Seguimiento </span>
                                                                <span class="inline-block mx-2">
                                                                    <svg class="w-4 h-4 transition-transform transform"
                                                                        :class="{ 'rotate-180': openRows[{{ $loop->index }}] }"
                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                            stroke-width="2" d="M19 9l-7 7-7-7" />
                                                                    </svg>
                                                                </span>
                                                            </a>

                                                        </div>
                                                    </td>

                                                    <td class="pr-4 py-4 text-sm whitespace-nowrap">
                                                        <div x-data="{ openMenuMobile: false }" class="relative flex justify-end z-50">
                                                            <div>
                                                                <button @click="openMenuMobile = true" type="button"
                                                                    class="px-1 py-1 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 hover:bg-gray-100"
                                                                    id="menu-0-button" aria-expanded="false"
                                                                    aria-haspopup="true">
                                                                    <span class="sr-only">Opciones</span>
                                                                    <!-- Heroicon name: outline/dots-vertical -->
                                                                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke="currentColor" aria-hidden="true">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
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
                                                                x-transition:leave-end="transform opacity-0 scale-95" x-cloak
                                                                class="z-50origin-bottom-right absolute right-0  mt-3  w-40 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
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
                                                    </td>


                                                </tr>
                                                <tr x-show="openRows[{{ $loop->index }}]" @click.away="openRows[{{ $loop->index }}] = false"
                                                    x-transition:enter="transition ease-out duration-200"
                                                    x-transition:enter-start="opacity-0 "
                                                    x-transition:enter-end="opacity-100"
                                                    x-transition:leave="transition ease-in duration-150"
                                                    x-transition:leave-start="opacity-100"
                                                    x-transition:leave-end="opacity-0" x-cloak
                                                    @keydown.escape="openRows[{{ $loop->index }}] = false" role="list">
                                                    <td colspan="5" class="max-w-xl">
                                                        <h4 class="sr-only">Items</h4>
                                                        <div class="flow-root">
                                                            <ul  class="m-6">
                                                                <li>
                                                                    <div class="relative pb-8">
                                                                        <span
                                                                            class="absolute top-5 left-5 -ml-px h-full w-0.5 bg-gray-200"
                                                                            aria-hidden="true"></span>
                                                                        <div class="relative flex space-x-3">
                                                                            <div>
                                                                                <span
                                                                                    class="h-10 w-10 rounded-full bg-cyan-500 flex items-center justify-center ring-8 ring-white">
                                                                                    <!-- Heroicon name: solid/check -->
                                                                                    <svg class="h-5 w-5 text-white"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 0 20 20" fill="currentColor"
                                                                                        aria-hidden="true">
                                                                                        <path fill-rule="evenodd"
                                                                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                                            clip-rule="evenodd" />
                                                                                    </svg>
                                                                                </span>
                                                                            </div>
                                                                            <div
                                                                                class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                                                <div>
                                                                                    <p class="text-sm text-gray-500">Remitido Por
                                                                                        <a href="#"
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
                                                                            <span
                                                                                class="absolute top-5 left-5 -ml-px h-full w-0.5 bg-gray-200"
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
                                                                                            viewBox="0 0 20 20"
                                                                                            fill="currentColor"
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

                                                                                        <p class="mt-0.5 text-sm text-gray-500">
                                                                                            Actualizo
                                                                                            la
                                                                                            Remision Hace:
                                                                                            {{ $segumiento->created_at }}
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="mt-2 text-sm text-gray-700">
                                                                                        <span>
                                                                                            <p class="mt-0.5"> <strong
                                                                                                    class="font-medium text-gray-900">
                                                                                                    Nota:
                                                                                                </strong>{{ $segumiento->notas }}
                                                                                            </p>
                                                                                            <p class="mt-0.5"> <strong
                                                                                                    class="font-medium text-gray-900 ">
                                                                                                    Seguimiento:
                                                                                                </strong>{{ $segumiento->seguimiento }}
                                                                                            </p>
                                                                                        </span>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


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
