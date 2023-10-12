function menu(){
    return `
    
    <header class="fixed left-0 top-0 flex justify-between items-center h-20 w-full bg-slate-950 pr-8 pl-2 z-20">
        <div class="flex gap-4">
            <button class="hidden lg:block text-white text-2xl" id="icono">
                <i class="fa-solid fa-bars"></i>
            </button>

            <button class="block lg:hidden text-white text-2xl" id="iconoMobile">
                <i class="fa-solid fa-bars"></i>
            </button>

            <a href="../../../../Views/views/administrativos/dashboard/dashboard.php" class="font-bricolage tracking-wider font-bold text-2xl lg:text-4xl text-white">CUK<span class="text-blue-500">Dash</span></a>
        </div>
        <div class="relative hidden md:block">
            <input type="search" name="buscador" placeholder="Buscar..." class=" w-96 h-10 rounded-full px-6 outline-none bg-gray-100">
            <label for="buscador" class="absolute top-0.5 right-0.5 w-9 h-9 cursor-pointer rounded-full bg-slate-950 text-white flex items-center justify-center text-xl"><i class="fa-solid fa-magnifying-glass"></i></label>
        </div>
        <div class="flex items-center justify-center gap-8">
            <button class="text-white text-3xl " id="config-profile hidden md:block"><i class="fa-solid fa-ellipsis"></i></button>
            <div class="flex items-center justify-center gap-4 font-bricolage text-2xl text-blue-300">
                <div class="hidden md:block">
                    <?php
                    echo $_SESSION["usuario"];
                    ?>
                </div>
                <img src="../../../../../Views/assets/img/Logotype.svg" alt="" class="w-12 h-12 rounded-full bg-blue-100 p-2">
            </div>
        </div>
    </header>

    <!-- Sidebar entera -->
    <aside id="menuEntero" class="hidden lg:hidden fixed h-screen flex-col left-0 top-0 bg-slate-900 w-2/12 z-10 justify-between items-center">
        <div class="px-8">
            <!-- <h1 class="font-bricolage tracking-wider font-bold text-4xl text-white">CUK<span class="text-blue-500">Dash</span></h1> -->
        </div>
        <div class="w-full flex flex-col items-center justify-center gap-4">
            <!-- Home -->
            <div class="h-12 w-full"></div>

            <!-- Informacion -->
            <h4 class="ml-4 w-full text-start text-xl text-gray-300 text-bold font-bricolage">INFORMACION</h4>
            <nav class="flex flex-col items-start justify-center w-full">
                <a href="../../../../Views/views/jueces/jueces.php" class="flex items-center justify-start px-5 gap-4 h-12 hover:bg-slate-800 w-full text-lg text-gray-50"><i class="fa-solid fa-gavel"></i> Jueces</a>
                <a href="../../../../Views/views/administrativos/competidores/enrutador.php" class="flex items-center justify-start px-5 gap-4 h-12 hover:bg-slate-800 w-full text-lg text-gray-50"><i class="fa-solid fa-user-ninja"></i> Competidores</a>
                <a href="#" class="flex items-center justify-start px-5 gap-4 h-12 hover:bg-slate-800 w-full text-lg text-gray-50"><i class="fa-solid fa-star"></i> Puntajes</a>
            </nav>

            <!-- Formularios -->
            <h4 class="ml-4 w-full text-start text-xl text-gray-300 text-bold font-bricolage">FORMULARIOS</h4>
            <nav class="flex flex-col items-start justify-center w-full">
                <a href="../../../../../Views/views/administrativos/usuario/usuario.php" class="flex items-center justify-start px-5 gap-4 h-12 hover:bg-slate-800 w-full text-lg text-gray-50"><i class="fa-solid fa-user"></i> Usuario</a>
                <a href="../../../../../Views/views/publico/formularios/competidor/competidor.php" class="flex items-center justify-start px-5 gap-3 h-12 hover:bg-slate-800 w-full text-lg text-gray-50"><i class="fa-solid fa-graduation-cap"></i> Competidor</a>
                <a href="../../../../../Views/views/publico/formularios/contacto/contacto.php" class="flex items-center justify-start px-5 gap-4 h-12 hover:bg-slate-800 w-full text-lg text-gray-50"><i class="fa-solid fa-address-book"></i> Contacto</a>
            </nav>
        </div>
        <div class="w-full h-12 flex items-center justify-center py-2 text-xl text-gray-50">
            <a href="../../../../controllers/cerrarSesion.php" id="logout" class="w-full hover:bg-slate-950 h-12 border-t-2 border-slate-600 text-center flex items-center justify-center">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout
            </a>
        </div>
    </aside>

    <!-- Sidebar con el menu corto -->
    <aside id="menuCorto" class="hidden lg:flex fixed h-screen flex-col left-0 top-0 bg-slate-900 w-16 z-10 flex justify-between items-center mr-24">
        <div class="px-8">
            <!-- <h1 class="font-bricolage tracking-wider font-bold text-4xl text-white">CUK<span class="text-blue-500">Dash</span></h1> -->
        </div>
        <div class="w-full flex flex-col items-center justify-center gap-4">
            <!-- Home -->
            <div class="h-12 w-full"></div>

            <!-- Informacion -->
            <h4 class="text-start text-xl text-gray-300 text-bold font-bricolage">INFO</h4>
            <nav class="flex flex-col items-start justify-center w-full">
                <a href="../../../../Views/views/jueces/jueces.php" class="flex items-center justify-start px-5 gap-4 h-12 hover:bg-slate-800 w-full text-lg text-gray-50"><i class="fa-solid fa-gavel"></i></a>
                <a href="../../../../Views/views/administrativos/competidores/enrutador.php" class="flex items-center justify-start px-5 gap-4 h-12 hover:bg-slate-800 w-full text-lg text-gray-50"><i class="fa-solid fa-user-ninja"></i></a>
                <a href="#" class="flex items-center justify-start px-5 gap-4 h-12 hover:bg-slate-800 w-full text-lg text-gray-50"><i class="fa-solid fa-star"></i></a>
            </nav>

            <!-- Formularios -->
            <h4 class="text-start text-xl text-gray-300 text-bold font-bricolage">FORM</h4>
            <nav class="flex flex-col items-start justify-center w-full">
                <a href="../../../../../Views/views/administrativos/usuario/usuario.php" class="flex items-center justify-start px-5 gap-4 h-12 hover:bg-slate-800 w-full text-lg text-gray-50"><i class="fa-solid fa-user"></i></a>
                <a href="../../../../../Views/views/publico/formularios/competidor/competidor.php" class="flex items-center justify-start px-5 gap-3 h-12 hover:bg-slate-800 w-full text-lg text-gray-50"><i class="fa-solid fa-graduation-cap"></i></a>
                <a href="../../../../../Views/views/publico/formularios/contacto/contacto.php" class="flex items-center justify-start px-5 gap-4 h-12 hover:bg-slate-800 w-full text-lg text-gray-50"><i class="fa-solid fa-address-book"></i></a>
            </nav>
        </div>
        <div class="w-full h-12 flex items-center justify-center py-2 text-xl text-gray-50">
            <a href="../../../../controllers/cerrarSesion.php" id="logout" class="w-full hover:bg-slate-950 h-12 border-t-2 border-slate-600 flex text-center items-center justify-center">
                <i class="fa-solid fa-right-from-bracket"></i>
            </a>
        </div>
    </aside>

    
    `;
}

document.getElementById("sidebar").innerHTML += menu();