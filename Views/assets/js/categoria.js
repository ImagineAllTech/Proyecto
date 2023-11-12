const btnModificar = document.getElementById('btnModificar');
const btnCerrar = document.getElementById('cerrar');
const popup = document.querySelector('.popup')


btnModificar.addEventListener("click", (e) =>{
    popup.classList.remove("hidden");
})

btnCerrar.addEventListener('click', (e) =>{
    popup.classList.add('hidden');
})