@extends('layouts.settings')
@section('title', 'Home Page')

@section('content')
<div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
    {{-- Perfil Configuracion --}}
    <section aria-labelledby="payment-details-heading">
      <form action="#" method="POST">
        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="bg-white py-6 px-4 sm:p-6">
            <div>
              <h2 id="payment-details-heading" class="text-lg leading-6 font-medium text-gray-900">Configurar Usuario</h2>
              <p class="mt-1 text-sm text-gray-500">En el siguiente formulario podras cambiar la información de tu usuario.</p>
            </div>

            <div class="mt-6 grid grid-cols-2 gap-6">
              <div class="col-span-2 sm:col-span-2">
                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="name" id="name" autocomplete="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
              </div>

              <div class=" gap-6 col-span-2 grid grid-cols-1 sm:grid-cols-2 sm:col-span-2">
                <div class="">
                    <label for="email" class="block text-sm font-medium text-gray-700">Correo Electronico</label>
                    <input type="text" name="email" id="email" autocomplete="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                </div>

                {{-- Mostrar que programa sena tiene --}}
                <div class=" ">
                    <label for="country" class="block text-sm font-medium text-gray-700">Programa SENA</label>
                    <select id="country" name="country" autocomplete="country-name" class="mt-1 block w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                    <option value="HUBInnovación" @if ($usuario-> programa_sena == 'HUBInnovación') {{'selected'}} @endif>HUB Innovación</option>
                    <option value="Emprendimiento" @if ($usuario-> programa_sena == 'Emprendimiento') {{'selected'}} @endif>Emprendimiento</option>
                    <option value="Tecnoparque" @if ($usuario-> programa_sena == 'Tecnoparque') {{'selected'}} @endif>Tecnoparque</option>
                    <option value="Extensionismo" @if ($usuario-> programa_sena == 'Extensionismo') {{'selected'}} @endif>Extensionismo</option>
                    </select>
                </div>
                {{-- Mostrar que programa sena tiene --}}
              </div>
            </div>

          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="bg-gray-800 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">Guardar</button>
          </div>
        </div>
      </form>
    </section>
    {{-- Perfil Configuracion --}}

    {{-- Perfil Configuracion --}}

    {{-- Contraseña Configuracion --}}
    <section aria-labelledby="payment-details-heading">
        <form action="#" method="POST">
        <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="bg-white py-6 px-4 sm:p-6">
                <div>
                    <h2 id="payment-details-heading" class="text-lg leading-6 font-medium text-gray-900">Restaurar Contraseña</h2>
                    <p class="mt-1 text-sm text-gray-500">En el siguiente formulario podras cambiar tu contraseña.</p>
                </div>

                <div class=" mt-6 grid grid-cols-2 gap-6">
                    <div class="relative col-span-2 sm:col-span-2">

                        <label for="password" class="block text-sm font-medium text-gray-700">Digite su contraseña actual</label>
                        <input type="password" name="password" id="password" autocomplete="password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                        <div class="flex items-center absolute inset-y-11 right-0 mr-3  text-sm leading-5" onclick="showPassword('password')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" class="cursor-pointer" onclick="" style="fill: rgb(110, 110, 110);transform: ;msFilter:;"><path d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z"></path><path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path></svg>
                        </div>

                    </div>
                    <div class="relative col-span-2 sm:col-span-2">

                        <label for="new-password" class="block text-sm font-medium text-gray-700">Digite su nueva Contraseña</label>
                        <input type="password" name="new-password" id="new-password" autocomplete="" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">

                        <div class="flex items-center absolute inset-y-11 right-0 mr-3  text-sm leading-5" onclick="showPassword('new-password')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" class="cursor-pointer" onclick="" style="fill: rgb(110, 110, 110);transform: ;msFilter:;"><path d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z"></path><path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path></svg>
                        </div>

                    </div>
                    <div class="relative col-span-2 sm:col-span-2">

                        <label for="confirm-password" class="block text-sm font-medium text-gray-700">Repita su nueva Contraseña</label>
                        <input type="password" name="confirm-password" id="confirm-password" autocomplete="" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">

                        <div class="flex items-center absolute inset-y-11 right-0 mr-3  text-sm leading-5" onclick="showPassword('confirm-password')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" class="cursor-pointer" onclick="" style="fill: rgb(110, 110, 110);transform: ;msFilter:;"><path d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z"></path><path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path></svg>
                        </div>

                    </div>
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit" class="bg-gray-800 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">Save</button>
            </div>
        </div>
        </form>
    </section>
    {{-- Contraseña Configuracion --}}



    </div>


@endsection
