const forms = document.querySelector('.forms');
const btnModificar = document.querySelector('.btnModificar');
const btnModificarElements = document.querySelectorAll('.btnModificar');
const formSections = document.querySelectorAll('.forms');

btnModificarElements.forEach((btnModificar, index) => {
    btnModificar.addEventListener('click', (e) => {
        // Oculta todos los formularios
        formSections.forEach((forms) => {
            forms.classList.add('hidden');
        });

        // Muestra el formulario correspondiente
        formSections[index].classList.remove('hidden');
    });
});