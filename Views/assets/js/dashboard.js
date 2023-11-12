// Funcionalidades del Menu

const iconoMenu = document.querySelector("#icono");
const menuCorto = document.querySelector("#menuCorto");
const menuEntero = document.querySelector("#menuEntero");
const mainContent = document.getElementById("main-content");

iconoMenu.addEventListener("click", () => {
    // Cambiar las clases de las sidebars y el contenido principal
    menuEntero.classList.toggle("lg:hidden");
    menuCorto.classList.toggle("lg:hidden");
    
    if (menuEntero.classList.contains("lg:hidden")) {
        mainContent.classList.remove("sidebar-activo");
        mainContent.classList.add("sidebar-inactivo");

        menuCorto.classList.remove("lg:hidden");
        menuCorto.classList.add("lg:flex");
    } else {
        mainContent.classList.remove("sidebar-inactivo");
        mainContent.classList.add("sidebar-activo");

        menuEntero.classList.remove("lg:hidden");
        menuEntero.classList.add("lg:flex");
    }
});

const iconoMobile = document.querySelector("#iconoMobile");

iconoMobile.addEventListener('click', () => {
    menuCorto.classList.toggle("hidden");
})

