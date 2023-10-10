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

        <div class="border-b border-gray-900/10 pb-12">
            <ul>
                <li>
                    <a href="{{route('lista.show', $emprendedor->id)}}" class="block hover:bg-gray-50">
                        <div class="flex items-center px-4 py-4 sm:px-6">
                            <div class="min-w-0 flex-1 flex items-center">

                                <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                                    <div>
                                        <p class="text-sm font-medium text-indigo-600 truncate">{{ $emprendedor->nombre_emprendedor }}</p>
                                        <p class="mt-2 flex items-center text-sm text-gray-500">
                                            <!-- Heroicon name: solid/mail -->
                                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path
                                                    d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                            </svg>
                                            <span class="truncate">{{ $emprendedor->correo_emprendedor }}</span>
                                        </p>
                                    </div>
                                    <div class="hidden md:block">
                                        <div>
                                            <p class="text-sm text-gray-900">Idea: <strong>{{ $idea->nombre_idea ?? 'No existe idea Registrada' }}</strong></p>
                                            <p class="mt-2 flex items-center text-sm text-gray-500">
                                                Estrategia de Origen: <strong>{{ $emprendedor->programa_sena_ingreso }}</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>

                            </div>
                        </div>
                    </a>
                </li>
            </ul>
            <form action="{{route('usuario.remitir')}}" method="POST">
                <input type="hidden" value="{{ $emprendedor->id}}" name="emprendedor_id">
                @csrf
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 setup-content">
                    <div class="sm:col-span-3">
                        <label for="estrategia_llegada" class="block text-sm font-medium leading-6 text-gray-900">Estrategia de
                            Llegada</label>
                        <div class="mt-2">
                            <input id="estrategia_llegada" name="estrategia_llegada" type="text" autocomplete="estrategia_llegada"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400  sm:text-sm sm:leading-6">
                            @error('estrategia_llegada')
                                <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                            @enderror
                            </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="contacto_recepcion" class="block text-sm font-medium leading-6 text-gray-900">Contacto de
                            Recepción</label>
                        <div class="mt-2">
                            <input id="contacto_recepcion" name="contacto_recepcion" type="text" autocomplete="contacto_recepcion"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400  sm:text-sm sm:leading-6">
                                @error('contacto_recepcion')
                                <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-span-3">
                        <label for="notas" class="block text-sm font-medium leading-6 text-gray-900">Notas</label>
                        <div class="mt-2">
                            <textarea id="notas" name="notas" name="notas" rows="3"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                @error('notas')
                                <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                            @enderror
                            </div>
                    </div>

                    <div class="col-span-3">
                        <label for="seguimiento" class="block text-sm font-medium leading-6 text-gray-900">Seguimiento</label>
                        <div class="mt-2">
                            <textarea id="seguimiento" name="seguimiento" rows="3"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                @error('seguimiento')
                                <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                            @enderror
                            </div>
                    </div>

                </div>
                <div class="flex justify-end w-full mt-5 ">
                    <a href="{{ url()->previous() }}" type="button"
                        class=" rounded-md bg-gray-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-1 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Cancelar</a>
                    <button type="submit"
                        class=" rounded-md bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-1 focus-visible:outline-offset-2 focus-visible:outline-blue-600 mx-2">Siguiente</button>
                </div>
            </form>


        </div>


    </div>

@endsection
