
<div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
style="background: rgba(0,0,0,.7);">
<div
    class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-6xl mx-auto rounded shadow-lg z-50 overflow-y-auto">
    <div class="modal-content py-4 text-left px-6">
        <!--Title-->
        <div class="flex justify-between items-center pb-3">
            <p class="text-2xl font-bold">Actualizar Seguimiento</p>
            <div class="modal-close cursor-pointer z-50">
                <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18"
                    height="18" viewBox="0 0 18 18">
                    <path
                        d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                    </path>
                </svg>
            </div>
        </div>
        <!--Body-->
        <div class="my-5">
            <div class="space-y-12 mx-auto">
                <div class="border-b border-gray-900/10 pb-12">
                    <form action="{{route('remision.update', 1)}}" method="POST" id="form-edit">
                        @csrf
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 setup-content">
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
        </div>
    </div>
</div>
</div>
