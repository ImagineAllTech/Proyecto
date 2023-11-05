const forms = document.querySelector('.forms');
const btnModificar = document.querySelector('.btnModificar');
const btnModificarElements = document.querySelectorAll('.btnModificar');
const formSections = document.querySelectorAll('.forms');
const btnCerrarElements = document.querySelectorAll('.cerrar')
const btnCerrar = document.querySelector('.cerrar')

btnModificarElements.forEach((btnModificar, index) => {
    btnModificar.addEventListener('click', () => {
        // Oculta todos los formularios
        formSections.forEach((forms) => {
            forms.classList.add('hidden');
        });

        // Muestra el formulario correspondiente
        formSections[index].classList.remove('hidden');
    });
});

btnCerrarElements.forEach((btnCerrar, index) =>{
    btnCerrar.addEventListener('click', () => {
        forms.classList.add('hidden');
        
        // Muestra el formulario correspondiente
        formSections[index].classList.add('hidden');
    })
});
