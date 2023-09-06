@extends('layouts.sidebar')

@section('title', 'Home Page')

@section('content')

    <!-- component -->
    <div class="container">
        <div class="mx-auto mt-3">
            <div
                class="p-3 bg-white flex items-center mx-auto border-2 rounded-lg mb-10 border-gray-600 sm:flex-row flex-col">
                <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
                    <h1 class="text-black text-xl title-font font-bold mb-2">The Caffeine Code</h1>
                    <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                        taxidermy. Gastropub indxgo juice poutine.</p>
                    <div class="py-4">
                        <div class="md:flex font-bold mb-2 py-3 text-gray-800 border-b-2">
                            <div class="w-full md:w-1/2 flex space-x-3">
                                <div class="w-1/2">
                                    <h2 class="text-gray-500">Email</h2>
                                    <p>description</p>
                                </div>
                                <div class="w-1/2">
                                    <h2 class="text-gray-500">Numero</h2>
                                    <p>description</p>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 flex space-x-3">
                                <div class="w-1/2">
                                    <h2 class="text-gray-500">Ciudad</h2>
                                    <p>description</p>
                                </div>
                                <div class="w-1/2">
                                    <h2 class="text-gray-500">Tipo de Documento</h2>
                                    <p>description</p>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 flex space-x-3">
                                <div class="w-1/2">
                                    <h2 class="text-gray-500">Numero de Documento</h2>
                                    <p>description</p>
                                </div>
                            </div>
                        </div>

                        <div class="md:flex font-bold mb-2 py-3 text-gray-800 border-b-2">
                            <div class="w-full md:w-full flex space-x-3">
                                <div class="w-1/2">
                                    <h2 class="text-gray-500">Escolaridad</h2>
                                    <p>description</p>
                                </div>
                                <div class="w-1/2">
                                    <h2 class="text-gray-500">Ocupacion</h2>
                                    <p>description</p>
                                </div>
                            </div>
                        </div>

                        <div class=" font-bold mb-2 py-3 text-gray-800 border-b-2">
                            <h1 class="text-black text-xl title-font font-bold mb-2">Informacion Empleado</h1>
                            <div class="flex">
                                <div class="w-full md:w-full flex space-x-3">
                                    <div class="w-1/2">
                                        <h2 class="text-gray-500">Escolaridad</h2>
                                        <p>description</p>
                                    </div>
                                    <div class="w-1/2">
                                        <h2 class="text-gray-500">Ocupacion</h2>
                                        <p>description</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" font-bold mb-2 py-3 text-gray-800 border-b-2">
                            <h1 class="text-black text-xl title-font font-bold mb-2">Informacion Idea</h1>
                            <div class="flex">
                                <div class="w-full md:w-full flex space-x-3">
                                    <div class="w-1/2">
                                        <h2 class="text-gray-500">Escolaridad</h2>
                                        <p>description</p>
                                    </div>
                                    <div class="w-1/2">
                                        <h2 class="text-gray-500">Ocupacion</h2>
                                        <p>description</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" font-bold mb-2 py-3 text-gray-800 border-b-2">
                            <h1 class="text-black text-xl title-font font-bold mb-2">Informacion Empresa</h1>
                            <div class="flex">
                                <div class="w-full md:w-full flex space-x-3">
                                    <div class="w-1/2">
                                        <h2 class="text-gray-500">Escolaridad</h2>
                                        <p>description</p>
                                    </div>
                                    <div class="w-1/2">
                                        <h2 class="text-gray-500">Ocupacion</h2>
                                        <p>description</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" font-bold mb-2 py-3 text-gray-800 border-b-2">
                            <h1 class="text-black text-xl title-font font-bold mb-2">Programa Formacion Tecnoparque</h1>
                            <div class="flex">
                                <div class="w-full md:w-full flex space-x-3">
                                    <div class="w-1/2">
                                        <h2 class="text-gray-500">Escolaridad</h2>
                                        <p>description</p>
                                    </div>
                                    <div class="w-1/2">
                                        <h2 class="text-gray-500">Ocupacion</h2>
                                        <p>description</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        @livewireScripts
        <script>
            document.addEventListener('livewire:load', function() {
                Livewire.on('updateStep', function(step) {
                    // Actualiza el componente con el nuevo estado
                    Livewire.emit('updateStep', step);
                });
            });
        </script>
    @endsection
