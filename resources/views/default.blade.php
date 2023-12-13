@extends('layouts.sidebar')

@section('title', 'Aliados Caracterización')

@section('content')

    <div class="container">

        <div class="card">
            <div class="card-body ">
                <livewire:formulario />
            </div>
        </div>
    </div>


    <livewire:scripts>

    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('updateStep', function(step) {
                // Actualiza el componente con el nuevo estado
                Livewire.emit('updateStep', step);
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $(window).keydown(function(event) {
                if (event.keyCode == 13) {
                    event.preventDefault();
                    return false;
                }
            });
        });
    </script>
@endsection
