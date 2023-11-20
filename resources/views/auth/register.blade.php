@extends('layouts.app')
@section('title', 'Home Page')

@section('content')
    <!-- component -->
    <!-- source:https://codepen.io/owaiswiz/pen/jOPvEPB -->
    <div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
        <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
            <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12 grid place-content-center">
                <div class="mt-12 flex flex-col items-center">
                    <h1 class="text-2xl xl:text-3xl font-extrabold">
                        Registrarse
                    </h1>
                    @if ($errors->any())
                        <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 mr-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
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
                    <div class="w-full  flex-1 mt-8">
                        {{--                    <div class="flex flex-col items-center">
                        <button
                            class="w-full max-w-xs font-bold shadow-sm rounded-lg py-3 bg-indigo-100 text-gray-800 flex items-center justify-center transition-all duration-300 ease-in-out focus:outline-none hover:shadow focus:shadow-sm focus:shadow-outline">
                            <div class="bg-white p-2 rounded-full">
                                <svg class="w-4" viewBox="0 0 533.5 544.3">
                                    <path
                                        d="M533.5 278.4c0-18.5-1.5-37.1-4.7-55.3H272.1v104.8h147c-6.1 33.8-25.7 63.7-54.4 82.7v68h87.7c51.5-47.4 81.1-117.4 81.1-200.2z"
                                        fill="#4285f4" />
                                    <path
                                        d="M272.1 544.3c73.4 0 135.3-24.1 180.4-65.7l-87.7-68c-24.4 16.6-55.9 26-92.6 26-71 0-131.2-47.9-152.8-112.3H28.9v70.1c46.2 91.9 140.3 149.9 243.2 149.9z"
                                        fill="#34a853" />
                                    <path
                                        d="M119.3 324.3c-11.4-33.8-11.4-70.4 0-104.2V150H28.9c-38.6 76.9-38.6 167.5 0 244.4l90.4-70.1z"
                                        fill="#fbbc04" />
                                    <path
                                        d="M272.1 107.7c38.8-.6 76.3 14 104.4 40.8l77.7-77.7C405 24.6 339.7-.8 272.1 0 169.2 0 75.1 58 28.9 150l90.4 70.1c21.5-64.5 81.8-112.4 152.8-112.4z"
                                        fill="#ea4335" />
                                </svg>
                            </div>
                            <span class="ml-4">
                                Ingresa con Google
                            </span>
                        </button>
                    </div>

                    <div class="my-12 border-b text-center">
                        <div
                            class="leading-none px-2 inline-block text-sm text-gray-600 tracking-wide font-medium bg-white transform translate-y-1/2">
                            O Inicia sesion con tu Correo
                        </div>
                    </div> --}}

                        <div class="my-4 border-b text-center">
                            <div
                                class="leading-none px-2 inline-block text-sm text-gray-600 tracking-wide font-medium bg-white transform translate-y-1/2">
                                Ingresa los datos que se pediran a continuación
                            </div>
                        </div>
                        <form action="{{ route('register.store') }}" method="POST" class="mx-auto max-w-xs ">
                            @csrf
                            <div>
                                <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">Nombre</label>
                                <input id="name" autocomplete="name" name="name" :value="old('name')" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                    type="name" placeholder="Nombre de Usuario" />
                                @if ($errors->has('name'))
                                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="relative mt-6">
                                <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">Correo Electronico</label>
                                <input name="email" :value="old('email')" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                    type="email" placeholder="Correo" />
                                @if ($errors->has('email'))
                                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="relative mt-6">
                                <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">Contraseña</label>

                                <input id="password" type="password" placeholder="Contraseña" :value="old('password')" name="password" class="w-full px-8 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                                @if ($errors->has('password'))
                                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">{{ $errors->first('password') }}</span>
                                @endif
                                <div class="flex items-center absolute inset-y-12 right-0 mr-3  text-sm leading-5" onclick="showPassword('password')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" class="cursor-pointer" onclick="" style="fill: rgb(110, 110, 110);transform: ;msFilter:;"><path d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z"></path><path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path></svg>
                                </div>
                            </div>

                            <div class="relative mt-6">
                                <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">Confirmar Contraseña</label>

                                <input id="password_confirmation" type="password" placeholder="Confirmar Contraseña" name="password_confirmation" class="w-full px-8 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
                                @if ($errors->has('password_confirmation'))
                                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                                <div class="flex items-center absolute inset-y-12 right-0 mr-3  text-sm leading-5" onclick="showPassword('password_confirmation')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" class="cursor-pointer" onclick=""  style="fill: rgb(110, 110, 110);transform: ;msFilter:;"><path d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z"></path><path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path></svg>
                                </div>
                            </div>
                            <div class="mt-6">
                                <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide "> Seleccionar su
                                    Programa
                                    SENA</label>
                                <select name="programa_sena" :value="old('programa_sena')" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white "
                                    type="password" placeholder="Confirmar Contraseña">
                                    <option value="" disabled selected>Programa SENA</option>
                                    <option value="HUBInnovación">HUB Innovación</option>
                                    <option value="Emprendimiento">Emprendimiento</option>
                                    <option value="Tecnoparque">Tecnoparque</option>
                                    <option value="Extensionismo">Extensionismo</option>
                                </select>
                                @if ($errors->has('programa_sena'))
                                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">{{ $errors->first('programa_sena') }}</span>
                                @endif
                            </div>
                            <button type="submit" class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                    <circle cx="8.5" cy="7" r="4" />
                                    <path d="M20 8v6M23 11h-6" />
                                </svg>
                                <span class="ml-3">
                                    Registrarse
                                </span>
                            </button>
                            <p class="flex flex-col items-center justify-center mt-10 text-center text-md text-gray-500">
                                <span>¿Ya tienes una cuenta?</span>
                                <a href="{{ route('login.index') }}" class="text-indigo-500 hover:text-indigo-500no-underline hover:underline cursor-pointer transition ease-in duration-300">Inicia Sesión</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="flex-1 bg-indigo-300 text-center hidden lg:flex">
                <div class="m-10 xl:m-16 w-full bg-contain bg-center bg-no-repeat grid place-content-center">
                    <img src="{{ asset('svg/lola.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <script>
    function showPassword(clase) {
        var passwordInput = document.getElementById(clase)

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
    </script>
@endsection
