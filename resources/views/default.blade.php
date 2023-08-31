@extends('layouts.sidebar')

@section('title', 'Home Page')

@section('content')

    <div class="container">

        <div class="card">
            <div class="card-body">
                <livewire:formulario />
            </div>
        </div>
    </div>
@livewireScripts
@endsection

