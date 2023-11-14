@extends('layouts.settings')
@section('title', 'Home Page')

@section('content')
    <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
        {{-- Perfil Configuracion --}}
        <section aria-labelledby="payment-details-heading">
            <form action="{{ route('actualizado', $usuario) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white dark:bg-slate-800 py-6 px-4 sm:p-6">

                        @if ($errors->has('name') || $errors->has('email') || $errors->has('country') )
                            <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                role="alert">
                                <svg class="flex-shrink-0 inline w-4 h-4 mr-3 mt-[2px]" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                </svg>
                                <span class="sr-only">Danger</span>
                                <div>
                                    <span class="font-medium">Se han encontrado algunos errores:</span>
                                    <ul class="mt-1.5 ml-4 list-disc list-inside">
                                        @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        <div>
                            <h2 id="payment-details-heading" class="text-lg leading-6 font-medium ">Configurar
                                Usuario</h2>
                            <p class="mt-1 text-sm text-gray-500">En el siguiente formulario podras cambiar la información de
                                tu usuario.</p>
                        </div>
                        @if (session('successs'))
                            <div class='flex flex-row bg-gray-900 h-10 w-[400px] rounded-[30px] mt-5 contrasenia'>
                                <span
                                    class='flex flex-col justify-center text-white font-bold grow-[1] max-w-[90%] text-center'>{{ session('successs') }}</span>
                                <div class='w-[10%] bg-green-600 rounded-r-2xl '></div>
                            </div>
                            <script>
                                $(document).ready(function() {
                                    setTimeout(function() {
                                        $(".contrasenia").fadeOut("slow");
                                    }, 3000);
                                });
                            </script>
                    </div>
                    @endif


                    <div class="mt-6 grid grid-cols-2 gap-6">
                        <div class="col-span-2 sm:col-span-2">
                            <label for="name" class="block text-sm font-medium ">Nombre</label>
                            <input type="text" name="name" value="{{ $usuario->name }}" id="name" autocomplete="name"
                                class="mt-1 block w-full border text-gray-800 border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                        </div>

                        <div class=" gap-6 col-span-2 grid grid-cols-1 sm:grid-cols-2 sm:col-span-2">
                            <div class="">
                                <label for="email" class="block text-sm font-medium ">Correo Electronico</label>
                                <input type="text" name="email" value="{{ $usuario->email }}" id="email"
                                    autocomplete="email"
                                    class="mt-1 block w-full border text-gray-800 border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                            </div>

                            {{-- Mostrar que programa sena tiene --}}
                            <div class=" ">
                                <label for="country" class="block text-sm font-medium ">Programa SENA</label>
                                <select id="country" name="country" autocomplete="country-name"
                                    class="mt-1 block text-gray-800 w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                                    <option value="HUBInnovación" @if ($usuario->programa_sena == 'HUBInnovación') {{ 'selected' }} @endif>
                                        HUB Innovación</option>
                                    <option value="Emprendimiento" @if ($usuario->programa_sena == 'Emprendimiento') {{ 'selected' }} @endif>
                                        Emprendimiento</option>
                                    <option value="Tecnoparque" @if ($usuario->programa_sena == 'Tecnoparque') {{ 'selected' }} @endif>
                                        Tecnoparque</option>
                                    <option value="Extensionismo" @if ($usuario->programa_sena == 'Extensionismo') {{ 'selected' }} @endif>
                                        Extensionismo</option>
                                </select>
                            </div>
                            {{-- Mostrar que programa sena tiene --}}
                        </div>
                    </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 dark:bg-slate-800 text-right sm:px-6">
                        <button type="submit"
                            class="bg-blue-700 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">Guardar</button>
                    </div>
                </div>
            </form>


        </section>
    {{-- Perfil Configuracion --}}

    {{-- Perfil Configuracion --}}

    {{-- Contraseña Configuracion --}}
    <section aria-labelledby="payment-details-heading">


        <form action="{{ route('contra', $usuario) }}" method="POST">
            @csrf
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="bg-white dark:bg-slate-800 py-6 px-4 sm:p-6">

                    @if ($errors->has('current_password') || $errors->has('new_password') || $errors->has('new_password_confirmation'))
                    <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 mr-3 mt-[2px]" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Danger</span>
                        <div>
                            <span class="font-medium">Se han encontrado algunos errores:</span>
                            <ul class="mt-1.5 ml-4 list-disc list-inside">
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                    <div>
                        <h2 id="payment-details-heading" class="text-lg leading-6 font-medium ">Restaurar
                            Contraseña</h2>
                        <p class="mt-1 text-sm text-gray-500">En el siguiente formulario podrás cambiar tu contraseña.</p>
                    </div>

                    <div class="mt-6 grid grid-cols-2 gap-6">
                        <div class="relative col-span-2 sm:col-span-2">
                            <label for="current_password" class="block text-sm font-medium ">Digite su
                                contraseña actual</label>
                            <input type="password" name="current_password" id="current_password"
                                autocomplete="current_password"
                                class="mt-1 block w-full border text-gray-800 border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                            <div onclick="showPassword('current_password')"  class="flex items-center absolute inset-y-11 right-0 mr-3  text-sm leading-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" class="cursor-pointer" onclick=""  viewBox="0 0 24 24" style="fill: rgb(110, 110, 110);transform: ;msFilter:;"><path d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z"></path><path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path></svg>
                            </div>
                        </div>
                        <div class="relative col-span-2 sm:col-span-2">
                            <label for="new_password" class="block text-sm font-medium ">Digite su nueva
                                Contraseña</label>
                            <input type="password" name="new_password" id="new_password" autocomplete="new_password"
                                class="mt-1 block w-full border text-gray-800 border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                            <div onclick="showPassword('new_password')"  class="flex items-center absolute inset-y-11 right-0 mr-3  text-sm leading-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" class="cursor-pointer" onclick=""  viewBox="0 0 24 24" style="fill: rgb(110, 110, 110);transform: ;msFilter:;"><path d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z"></path><path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path></svg>
                            </div>
                        </div>
                        <div class="relative col-span-2 sm:col-span-2">
                            <label for="new_password_confirmation" class="block text-sm font-medium ">Repita su
                                nueva Contraseña</label>
                            <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                                autocomplete="new_password_confirmation"
                                class="mt-1 block w-full border text-gray-800 border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                                <div onclick="showPassword('new_password_confirmation')"  class="flex items-center absolute inset-y-11 right-0 mr-3  text-sm leading-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" class="cursor-pointer" onclick=""  viewBox="0 0 24 24" style="fill: rgb(110, 110, 110);transform: ;msFilter:;"><path d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z"></path><path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path></svg>
                                </div>
                        </div>



                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 dark:bg-slate-800 text-right sm:px-6">
                    <button type="submit"
                        class="bg-blue-700 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">Guardar</button>
                </div>
            </div>
        </form>
        @if (session('success'))
            <div class='flex flex-row bg-gray-900 h-10 w-[400px] rounded-[30px] mt-5 contrasenia'>
                <span
                    class='flex flex-col justify-center text-white font-bold grow-[1] max-w-[90%] text-center'>{{ session('success') }}</span>
                <div class='w-[10%] bg-green-600 rounded-r-2xl '></div>
            </div>
            <script>
                $(document).ready(function() {
                    setTimeout(function() {
                        $(".contrasenia").fadeOut("slow");
                    }, 3000);
                });
            </script>
            </div>
        @endif
    </section>

    {{-- Contraseña Configuracion --}}



    </div>


@endsection
