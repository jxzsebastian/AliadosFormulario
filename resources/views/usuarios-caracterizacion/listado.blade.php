@extends('layouts.sidebar')

@section('title', 'Home Page')

@section('content')
    <section class="container px-4 mx-auto">
        <div class="flex flex-col dark:bg-gray-800">
            <div class="-mx-2 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 ">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-2">
                    <div class="overflow-hidden md:rounded-lg">

                        <div class="flex flex-wrap w-full mb-10">
                            <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900 dark:text-white">Usuarios
                                    Caracterizados</h1>
                                <div class="h-1 w-20 bg-blue-500 rounded"></div>
                            </div>
                        </div>

                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700" id="">
                            <thead class="bg-gray-50 dark:bg-gray-800">
                                <tr>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Hora Registro
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Emprendedor
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        Estrategia de Origen
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        ¿Registro alguna Idea?
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        ¿Necesita Asesoria del Sena?
                                    </th>

                                    <th scope="col" class="relative py-3.5 px-4">
                                        <span class="sr-only">Acciones</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                @foreach ($emprendedores as $emprendedor)
                                    <tr>
                                        <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            {{ $emprendedor->created_at->isoFormat('MMMM Do YYYY, h:mm:ss a') }}</td>
                                        <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            <div class="flex items-center gap-x-2">
                                                <div>
                                                    <h2 class="text-sm font-medium text-gray-800 dark:text-white ">
                                                        {{ $emprendedor->nombre_emprendedor }}</h2>
                                                    <p class="text-xs font-normal text-gray-600 dark:text-gray-400">Email:
                                                        {{ $emprendedor->correo_emprendedor }}</p>
                                                    <p class="text-xs font-normal text-gray-600 dark:text-gray-400">Numero
                                                        de Contacto: {{ $emprendedor->numero_contacto_emprendedor }}</p>
                                                    <p class="text-xs font-normal text-gray-600 dark:text-gray-400">
                                                        Ciudad/Municipio: {{ $emprendedor->ciudad_municipio_emprendedor }}
                                                    </p>
                                                    <p class="text-xs font-normal text-gray-600 dark:text-gray-400">Tipo de
                                                        Identificación: {{ $emprendedor->tipo_identificacion_emprendedor }}
                                                    </p>
                                                    <p class="text-xs font-normal text-gray-600 dark:text-gray-400">Numero
                                                        de Documento: {{ $emprendedor->identificacion_emprendedor }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            {{ $emprendedor->programa_sena_ingreso }}</td>

                                        <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap ">
                                            @if ($emprendedor->ideas->count() > 0)
                                                @foreach ($emprendedor->ideas as $idea)
                                                    {{ $idea->nombre_idea }}
                                                @endforeach
                                            @else
                                                <p>El emprendedor no tiene ideas registradas.</p>
                                            @endif
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            @if ($emprendedor->necesidad_asesoria_sena == 'Ninguna')
                                                No
                                            @else
                                                Si
                                            @endif
                                        </td>
                                        <td class="px-4 py-4 text-sm whitespace-nowrap ">
                                            <div class="flex items-center gap-x-6">
                                                <a href="{{ route('lista.show', $emprendedor->id) }}"
                                                    class="text-green-500 transition-colors duration-200 dark:hover:text-green-500 dark:text-gray-300 hover:text-green-500 focus:outline-none">
                                                    Ver Informacion
                                                </a>
                                                <a href="{{ route('usuario.remision', $emprendedor->id) }}"
                                                    class="flex text-blue-500 transition-colors duration-200 dark:hover:text-blue-500 dark:text-gray-300 hover:text-blue-500 focus:outline-none">
                                                    REMITIR
                                                </a>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
		style="background: rgba(0,0,0,.7);">
		<div
			class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
			<div class="modal-content py-4 text-left px-6">
				<!--Title-->
				<div class="flex justify-between items-center pb-3">
					<p class="text-2xl font-bold">Header</p>
					<div class="modal-close cursor-pointer z-50">
						<svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
							viewBox="0 0 18 18">
							<path
								d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
							</path>
						</svg>
					</div>
				</div>
				<!--Body-->
				<div class="my-5">
					<p>Inliberali Persius Multi iustitia pronuntiaret expeteretur sanos didicisset laus angusti ferrentur arbitrium arbitramur huic desiderent.?</p>
				</div>
				<!--Footer-->
				<div class="flex justify-end pt-2">
					<button
						class="focus:outline-none modal-close px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">Cancel</button>
					<button
						class="focus:outline-none px-4 bg-teal-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400">Confirm</button>
				</div>
			</div>
		</div>
	</div>

        <script>
            $(document).ready(function() {
                // Create a DataTable object
                var dataTable = $('#listado').DataTable({
                    // Set the language to Spanish
                    language: {
                        "lengthMenu": "Mostrar _MENU_ registros por página",
                        "zeroRecords": "No se encontraron resultados",
                        "info": "Mostrando _START_ a _END_ de un total de _TOTAL_ registros",
                        "infoEmpty": "Mostrando 0 a 0 de 0 en total registros",
                        "infoFiltered": "(filtrado de _MAX_ registros)",
                        "search": "Buscar:",
                        "paginate": {
                            "first": "Primera",
                            "previous": "Anterior",
                            "next": "Siguiente",
                            "last": "Última"
                        }
                    },
                    lengthMenu: [
                        [3, 5, 10, -1],
                        [3, 5, 10, "Mostrar todos"]
                    ],
                    order: [[ 1, 'asc' ]]
                });
            });

            //Modal script
            const modal = document.querySelector('.main-modal');
            const closeButton = document.querySelectorAll('.modal-close');

            const modalClose = () => {
                modal.classList.remove('fadeIn');
                modal.classList.add('fadeOut');
                setTimeout(() => {
                    modal.style.display = 'none';
                }, 500);
            }

            const openModal = () => {
                modal.classList.remove('fadeOut');
                modal.classList.add('fadeIn');
                modal.style.display = 'flex';
            }

            for (let i = 0; i < closeButton.length; i++) {

                const elements = closeButton[i];

                elements.onclick = (e) => modalClose();

                modal.style.display = 'none';

                window.onclick = function(event) {
                    if (event.target == modal) modalClose();
                }
            }
        </script>
    @endsection
