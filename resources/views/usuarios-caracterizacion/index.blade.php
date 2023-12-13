
@extends('layouts.sidebar')

@section('title', 'Usuarios Caracterización')

@section('content')
    <h1>Lista</h1>
    {{-- <ul>
        @foreach ($formulario as $formulario)
            <li>
              <a href="{{route('lista.show',$formulario->id)}}">{{$formulario->nombre_emprendedor}}</a>
            </li>
            @endforeach
    </ul> --}}
    {{-- {{$formulario->links()}} --}}
    <a href="{{ route('formulario-store') }}">formulario</a>
    <div class="flex flex-col items-center">
        <div class="w-full md:w-1/2 flex flex-col items-center h-64">
            <div class="w-full px-4">
                <div class="flex flex-col items-center relative">
                    <div
                        class="absolute shadow bg-white top-100 z-40 w-full lef-0 rounded max-h-select overflow-y-auto svelte-5uyqqj">
                        @foreach ($formulario as $formulario)
                            <div class="flex flex-col w-full">
                                <div class="cursor-pointer w-full border-gray-100 rounded-t border-b hover:bg-teal-100">
                                    <div
                                        class="flex w-full items-center p-2 pl-2 border-transparent border-l-2 relative hover:border-teal-100">
                                        <div class="w-full items-center flex">
                                            <div class="mx-2 -mt-1  ">
                                                <a
                                                    href="{{ route('lista.show', $formulario->id) }}">{{ $formulario->nombre_emprendedor }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection
