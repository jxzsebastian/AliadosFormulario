@extends('layouts.settings')
@section('title', 'Home Page')

@section('content')
<div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
    {{-- Perfil Configuracion --}}
    <section aria-labelledby="payment-details-heading">
      <form action="{{route('actualizado',$usuario)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="bg-white py-6 px-4 sm:p-6">
            <div>
              <h2 id="payment-details-heading" class="text-lg leading-6 font-medium text-gray-900">Configurar Usuario</h2>
              <p class="mt-1 text-sm text-gray-500">En el siguiente formulario podras cambiar la información de tu usuario.</p>
            </div>

            <div class="mt-6 grid grid-cols-2 gap-6">
              <div class="col-span-2 sm:col-span-2">
                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="name"  value="{{$usuario->name}}" id="name" autocomplete="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
              </div>

              <div class=" gap-6 col-span-2 grid grid-cols-1 sm:grid-cols-2 sm:col-span-2">
                <div class="">
                    <label for="email" class="block text-sm font-medium text-gray-700">Correo Electronico</label>
                    <input type="text" name="email" value="{{$usuario->email}}" id="email" autocomplete="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
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
      @if(session('mensaje'))
      <div class='flex flex-row bg-gray-900 h-10 w-[400px] rounded-[30px] mt-5 borrar-producto-mensaje'>
        <span class='flex flex-col justify-center text-white font-bold grow-[1] max-w-[90%] text-center'>{{ session('mensaje') }}</span>
        <div class='w-[10%] bg-green-600 rounded-r-2xl shadow-[0_0_20px_#ffbb3377]'></div>
      </div>
      <script>
          $(document).ready(function() {
              setTimeout(function() {
                  $(".borrar-producto-mensaje").fadeOut("slow");
              }, 2000);
          });
      </script>
  @else
      {{-- <div class="Error">
          No se ingresó ningún dato.
      </div> --}}

  @endif
    </section>
    {{-- Perfil Configuracion --}}

    {{-- Perfil Configuracion --}}

    {{-- Contraseña Configuracion --}}
    <section aria-labelledby="payment-details-heading">
      <form action="{{ route('contra', $usuario) }}" method="POST">
          @csrf
          <div class="shadow sm:rounded-md sm:overflow-hidden">
              <div class="bg-white py-6 px-4 sm:p-6">
                  <div>
                      <h2 id="payment-details-heading" class="text-lg leading-6 font-medium text-gray-900">Restaurar Contraseña</h2>
                      <p class="mt-1 text-sm text-gray-500">En el siguiente formulario podrás cambiar tu contraseña.</p>
                  </div>
  
                  <div class="mt-6 grid grid-cols-2 gap-6">
                      <div class="relative col-span-2 sm:col-span-2">
                          <label for="current_password" class="block text-sm font-medium text-gray-700">Digite su contraseña actual</label>
                          <input type="password" name="current_password" id="current_password" autocomplete="current_password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                      </div>
                      <div class="relative col-span-2 sm:col-span-2">
                          <label for="new_password" class="block text-sm font-medium text-gray-700">Digite su nueva Contraseña</label>
                          <input type="password" name="new_password" id="new_password" autocomplete="new_password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                      </div>
                      <div class="relative col-span-2 sm:col-span-2">
                          <label for="new_password_confirmation" class="block text-sm font-medium text-gray-700">Repita su nueva Contraseña</label>
                          <input type="password" name="new_password_confirmation" id="new_password_confirmation" autocomplete="new_password_confirmation" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-gray-900 focus:border-gray-900 sm:text-sm">
                      </div>
                  </div>
              </div>
              <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                  <button type="submit" class="bg-gray-800 border border-transparent rounded-md shadow-sm py-2 px-4 inline-flex justify-center text-sm font-medium text-white hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900">Guardar</button>
              </div>
          </div>
      </form>
      @if(session('success'))
      <div class='flex flex-row bg-gray-900 h-10 w-[400px] rounded-[30px] mt-5 contrasenia' >
        <span class='flex flex-col justify-center text-white font-bold grow-[1] max-w-[90%] text-center'>{{ session('success') }}</span>
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
  
  @if(session('error'))
  <div class='flex flex-row bg-gray-900 h-10 w-[400px] rounded-[30px] mt-5 contrasenia' >
    <span class='flex flex-col justify-center text-white font-bold grow-[1] max-w-[90%] text-center'>{{ session('error') }}</span>
    <div class='w-[10%] bg-red-600 rounded-r-2xl '></div>
  </div>
  <script>
    $(document).ready(function() {
        setTimeout(function() {
            $(".contrasenia").fadeOut("slow");
        }, 3000);
    });
</script>
  @endif
  {{-- @if(session('error'))
  <div class="success-message">
      {{ session('error') }}
  </div>
@endif --}}
  </section>
  
    {{-- Contraseña Configuracion --}}



    </div>


@endsection

