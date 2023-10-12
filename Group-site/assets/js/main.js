const iconoMenu = document.querySelector('#icono-menu'),
    menu = document.querySelector('#menu');

iconoMenu.addEventListener('click', (e) => {

    //alternar estilo para el menu y body
    menu.classList.toggle('active');

    //Alternar src en caso de que el icono no este

    const rutaActual = e.target.getAttribute('src');

});

/*
*** LIGHT THEME
*/

const themeToggle = document.querySelector('.theme-toggle');
const menuIcon = document.getElementById('icono-menu');
const icono = document.querySelector('.icono-menu');
const waveImage = document.getElementById('wave-image');

themeToggle.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');

    // Obtener todas las imágenes con la clase "filtered"
    const filteredImages = document.querySelectorAll('.filtered');

    // Cambiar el filtro invertido según el modo oscuro
    if (document.body.classList.contains('dark-mode')) {
        menuIcon.classList.add('dark-mode');
        icono.classList.add('dark-mode');
        waveImage.setAttribute('src', '/assets/img/wave.svg');

        // Quitar filtro invertido de las imágenes
        filteredImages.forEach(image => {
            image.style.filter = 'none';
        });
    } else {
        menuIcon.classList.remove('dark-mode');
        icono.classList.remove('dark-mode');
        waveImage.setAttribute('src', '/assets/img/wave-dark.svg');

        // Aplicar filtro invertido a las imágenes
        filteredImages.forEach(image => {
            image.style.filter = 'invert(100%)';
        });
    }
});


