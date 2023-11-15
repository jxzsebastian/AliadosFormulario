
<div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
style="background: rgba(43, 43, 43, 0.601);">
<div
    class="border border-gray-500 shadow-lg modal-container bg-white w-4/12 md:max-w-6xl mx-auto rounded shadow-lg z-50 overflow-y-auto">
    <div class="modal-content py-4 text-left px-6">
        <!--Body-->
        <div class="my-5">
            <div class="space-y-12 mx-auto">
                <div class="border-b border-gray-900/10 ">
                    <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-blue-100">
                        <!-- Heroicon name: outline/check -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                          </svg>

                      </div>
                      <div class="mt-3 text-center sm:mt-5 mb-4">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">Editar Seguimiento</h3>
                        <div class="mt-2">
                          <p class="text-sm text-gray-500">A continuación, podrás actualizar el seguimiento del Emprendedor Remitido, Automáticamente, esto generará un historial.</p>
                        </div>
                      </div>

                    <form action="{{route('remision.update', 1)}}" method="POST" id="form-edit" class="formulario-validacion">
                        @csrf
                        <div class="grid gap-4 gap-y-3 text-sm grid-cols-1 md:grid-cols-5">
                            <div class="md:col-span-5">
                                <p class="flex items-center gap-x-2">
                                    <span class=" items-baseline">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>

                                    </span>
                                    Programa SENA
                                </p>
                                <input id="red_whatsapp" type="url" name="link_whatsapp"
                                    class="h-10 border mt-1.5 rounded px-4 w-full  outline-none"
                                    autocomplete="off" />


                            </div>
                            <div class="md:col-span-5">
                                <p class="flex items-center gap-x-2">
                                    <span class=" items-baseline">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>

                                    </span>
                                    Seguimiento
                                </p>
                                <textarea id="seguimiento" name="seguimiento" rows="3"
                                class="block w-full rounded-md border-0 py-1 pl-1 mt-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                @error('seguimiento')
                                <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                                @enderror

                            </div>
                            <div class="md:col-span-5">
                                <p class="flex items-center gap-x-2">
                                    <span class=" items-baseline">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>

                                    </span>
                                    Notas
                                </p>
                                <textarea id="nota" name="notas" name="notas" rows="3" class="block w-full mt-1.5 rounded-md border-0 py-1 pl-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                @error('notas')
                                <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                                @enderror

                            </div>
                            <div class="md:col-span-5 text-right pt-2">
                                <div class="mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense">
                                    <button onClick="validateFm();"
                                   class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:col-start-2 sm:text-sm">Guardar Cambios</button>

                                    <button type="button" class="modal-cancel mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:col-start-1 sm:text-sm">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>

const modal = document.querySelector('.main-modal');
const closeButton = document.querySelectorAll('.modal-close');
const formEdit = document.getElementById('form-edit')
const cancelButton = document.querySelectorAll('.modal-cancel');

function validateFm() {
    $(".formulario-validacion").validate({
        rules: {
            // simple rule, converted to {required:true}

            seguimiento: {
                required: true,
            },
            notas: {
                required: true,
            },
        },
        messages: {
           /*  link_facebook: {
                required: "El campo es Requerido y no puede estar Vacio.",
                url: "El campo debe ser un a URL valida.",
            }, */
            seguimiento: {
                required: "El campo es Requerido y no puede estar Vacio.",
            },
            notas: {
                required: "El campo es Requerido y no puede estar Vacio.",
            },

        },
        errorClass: "error text-red-500 text-sm italic mt-2",
    });
}


const modalClose = () => {
    modal.classList.remove('fadeIn');
    modal.classList.add('fadeOut');
    setTimeout(() => {
        modal.style.display = 'none';
    }, 500);
}
const modalCancel = () => {
    modal.classList.remove('fadeIn');
    modal.classList.add('fadeOut');
    setTimeout(() => {
        modal.style.display = 'none';
    }, 500);
}

const openModal = (datos) => {

    modal.classList.remove('fadeOut');
    modal.classList.add('fadeIn');
    modal.style.display = 'flex';
    const historialSeguimiento = datos.remisiones[0].historial_seguimiento;


    const inputNota = document.getElementById('nota');
    inputNota.value = datos.remisiones[0].historial_seguimiento[historialSeguimiento.length - 1].notas
    const inputSeguimiento = document.getElementById('seguimiento');
    inputSeguimiento.value = datos.remisiones[0].historial_seguimiento[historialSeguimiento.length - 1].seguimiento

    formEdit.action = "{{ route('remision.update', ':id') }}".replace(':id', datos.id);
}

for (let i = 0; i < closeButton.length; i++) {

    const elements = closeButton[i];

    elements.onclick = (e) => modalClose();

    modal.style.display = 'none';

    window.onclick = function (event) {
        if (event.target == modal) modalClose();
    }
}

for (let i = 0; i < cancelButton.length; i++) {

    const elements = cancelButton[i];

    elements.onclick = (e) => modalCancel();

    modal.style.display = 'none';

}



</script>
