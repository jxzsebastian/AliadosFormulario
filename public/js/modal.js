const modal = document.querySelector('.main-modal');
const closeButton = document.querySelectorAll('.modal-close');
const formEdit = document.getElementById('form-edit')
const cancelButton = document.querySelectorAll('.modal-cancel');

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
    console.log(datos)
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
