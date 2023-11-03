@extends('layouts.app')
@section('title', 'Restablecer la Contraseña')

@section('content')

<form method="POST" action="{{ route('password.update') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">

    <div>
        <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">Correo Electronico</label>
        <input name="email" :value="old('email')" class="w-full px-8 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white" type="email" placeholder="Correo" />
            @if ($errors->has('email'))
            <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">{{ $errors->first('password') }}</span>
            @endif
    </div>
    <div class="relative mt-6">
        <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">Contraseña</label>

        <input type="password"  id="password" name="password" :value="old('password')" placeholder="Contraseña" class="w-full px-8 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
        @if ($errors->has('password'))
        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">{{ $errors->first('password') }}</span>
        @endif
        <div onclick="showPasword()"  class="flex items-center absolute inset-y-12 right-0 mr-3  text-sm leading-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" class="cursor-pointer" onclick=""  viewBox="0 0 24 24" style="fill: rgb(110, 110, 110);transform: ;msFilter:;"><path d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z"></path><path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path></svg>
        </div>
    </div>

    <div class="relative mt-6">
        <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">Contraseña</label>

        <input type="password"  id="password" name="password" :value="old('password')" placeholder="Contraseña" class="w-full px-8 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white">
        @if ($errors->has('password'))
        <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">{{ $errors->first('password') }}</span>
        @endif
        <div onclick="showPasword()"  class="flex items-center absolute inset-y-12 right-0 mr-3  text-sm leading-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" class="cursor-pointer" onclick=""  viewBox="0 0 24 24" style="fill: rgb(110, 110, 110);transform: ;msFilter:;"><path d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z"></path><path d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z"></path></svg>
        </div>
    </div>

    <button
    class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
    <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2"
        stroke-linecap="round" stroke-linejoin="round">
        <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
        <circle cx="8.5" cy="7" r="4" />
        <path d="M20 8v6M23 11h-6" />
    </svg>
    <span class="ml-3">
        Restablecer la Contraseña
    </span>
</button>
</form>
<script>
    function showPasword() {
        var contraseñaInput = document.getElementById("password");
        if (contraseñaInput.type === "password") {
            contraseñaInput.type = "text";
        } else {
            contraseñaInput.type = "password";
        }
    }
</script>
@endsection