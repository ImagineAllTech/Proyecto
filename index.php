<!DOCTYPE html>
<html id="html" class="" lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Views/assets/img/Logotype.svg" type="image/x-icon">
    <link rel="stylesheet" href="Views/assets/css/normalize.css">
    <link rel="stylesheet" href="Views/assets/css/jueces.css">
    <title>CUK | Inicio</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/cea33d77ef.js" crossorigin="anonymous"></script>
</head>

<body class="body bg-gray-100 flex flex-col justify-center items-end w-full min-h-screen font-montserrat">

    <main class="w-full flex items-center justify-between h-screen flex-col">
            <div class="flex items-center justify-center gap-2 text-xl font-bricolage text-gray-500  mt-8">
                <img src="Views/assets/img/Logotype.svg" alt="logo" class="w-8 grayscale pointer-events-none select-none">
                <p class="select-none">ImagineAT</p>
            </div>

            <div class="flex flex-col items-center justify-center w-10/12 gap-3">
                <h1 class="text-5xl sm:text-7xl md:text-8xl text-center text-black font-semibold font-bricolage">Confederacion <span class="text-blue-700">Uruguaya</span> de <span class="text-blue-700">Karate</span></h1>
                <!-- <p class="font-poppins text-xl md:text-2xl font-semibold text-blue-700">CUK Kata | Imagine All Tech</p> -->
            </div>

            <div class="flex flex-col items-center justify-center gap-6 w-full">

                <!-- <div></div> -->

                <nav class="flex flex-col lg:flex-row items-center justify-between w-8/12 gap-4">
                        <a href="Views/views/login/login.php"
                        class="w-full md:8/12 lg:w-6/12 h-12 bg-blue-700 text-white flex items-center justify-center hover:bg-blue-800 font-semibold rounded-full text-xl">Iniciar
                        sesion</a>

                        <a href="Views/views/publico/formularios/competidor/competidor.php"
                        class="w-full md:8/12 lg:w-6/12 h-12 bg-blue-700 text-white flex items-center justify-center hover:bg-blue-800 font-semibold rounded-full text-xl ">Registrar</a>
                        
                        <a href="Views/views/publico/formularios/contacto/contacto.php"
                        class="w-full md:8/12 lg:w-6/12 h-12 bg-blue-700 text-white flex items-center justify-center hover:bg-blue-800 font-semibold rounded-full text-xl">Contacto</a>
                    
                        <a href="Group-site/index.html"
                        class="w-full md:8/12 lg:w-6/12 h-12 bg-blue-700 text-white flex items-center justify-center hover:bg-blue-800 font-semibold rounded-full text-xl">Visitar
                        IAT</a>
                </nav>
            
                <footer class="flex items-end justify-evenly w-full">
                    <div class="flex flex-col items-center justify-center mb-8 gap-4">
                        <div class="flex items-center justify-center gap-4 text-sm text-gray-500">
                            <a href="#" class="hover:text-black">Terminos de uso</a>
                            <p class="text-black select-none">|</p>
                            <a href="#" class="hover:text-black">Politica de privacidad</a>
                        </div>
                    </div>
                </footer>
            </div>
        
    </main>

    <script src="assets/js/script.js"></script>
</body>

</html>