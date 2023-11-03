const menu = document.getElementById('popup');
const btn = document.getElementById('menu');
const cerrar = document.getElementById('cerrar');

btn.addEventListener('click', (e) =>{

    menu.classList.toggle('hidden');

    menu.classList.add('active');

});

cerrar.addEventListener('click', (e) =>{
    menu.classList.add('hidden');
});

