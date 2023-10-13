
<div class="space-y-12 mx-auto">


    <div class="border-b border-gray-900/10 pb-12">
        <form action="{{route('remision.update', 1)}}" method="POST" id="form-edit">
{{-- 			@method('PUT')
 --}}			@csrf
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 setup-content">

{{--                 <div class="sm:col-span-3">
                    <label for="contacto_recepcion" class="block text-sm font-medium leading-6 text-gray-900">Contacto de
                        Recepción</label>
                    <div class="mt-2">
                        <input id="contacto_recepcion" name="contacto_recepcion" type="text" autocomplete="contacto_recepcion"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400  sm:text-sm sm:leading-6">
                            @error('contacto_recepcion')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div> --}}
                <div class="col-span-3">
                    <label for="notas" class="block text-sm font-medium leading-6 text-gray-900">Notas</label>
                    <div class="mt-2">
                        <textarea id="nota" name="notas" name="notas" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            @error('notas')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                        </div>
                </div>

                <div class="col-span-3">
                    <label for="seguimiento" class="block text-sm font-medium leading-6 text-gray-900">Seguimiento</label>
                    <div class="mt-2">
                        <textarea id="seguimiento" name="seguimiento" rows="3"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            @error('seguimiento')
                            <p class="text-red-500 text-sm italic mt-2">{{ $message }}</p>
                        @enderror
                        </div>
                </div>

            </div>
            <div class="flex justify-end w-full mt-5 ">
                <a href="{{ url()->previous() }}" type="button"
                    class="  bg-gray-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-1 focus-visible:outline-offset-2 focus-visible:outline-gray-600">Cancelar</a>
                <button type="submit"
                    class="  bg-blue-600 px-3 py-2 text-base font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-1 focus-visible:outline-offset-2 focus-visible:outline-blue-600 mx-2">Siguiente</button>
            </div>
        </form>


    </div>


</div>

<script>
    const modal = document.querySelector('.main-modal');
    const closeButton = document.querySelectorAll('.modal-close');
	const formEdit = document.getElementById('form-edit')

    const modalClose = () => {
        modal.classList.remove('fadeIn');
        modal.classList.add('fadeOut');
        setTimeout(() => {
            modal.style.display = 'none';
        }, 500);
    }

    const openModal = (datos) => {
        console.log(datos)

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
</script>
