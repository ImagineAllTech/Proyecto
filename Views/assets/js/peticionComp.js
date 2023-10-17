const form = document.querySelector('.form');
const btnModificar = document.querySelector('.btnModificar');
const btnModificarElements = document.querySelectorAll('.btnModificar');
const formSections = document.querySelectorAll('.form');

btnModificarElements.forEach((btnModificar, index) => {
    btnModificar.addEventListener('click', (e) => {
        // Oculta todos los formularios
        formSections.forEach((form) => {
            form.classList.add('hidden');
        });

        // Muestra el formulario correspondiente
        formSections[index].classList.remove('hidden');
    });
});