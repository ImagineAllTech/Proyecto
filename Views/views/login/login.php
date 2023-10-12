<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUK | Inicio de sesion</title>
    <link rel="shortcut icon" href="../../assets/img/Logotype.svg" type="image/x-icon">

    <link rel="stylesheet" href="../../assets/css/normalize.css">
    <script src='https://cdn.tailwindcss.com'></script>
    <script src='https://kit.fontawesome.com/cea33d77ef.js' crossorigin='anonymous'></script>
    <style media='all' id='fa-v4-font-face'></style>
</head>
<body class="bg-blue-700 flex items-center justify-center h-screen w-full overflow-hidden">
    
    <main class="bg-gray-50 h-5/6 w-5/12 rounded-md flex items-center justify-between overflow-hidden">

        <section class="w-full w-full h-full flex flex-col py-10 px-10 items-start justify-between">
            <header class="flex items-center justify-end gap-4 w-full ">
                <h5 class="font-poppins text-lg text-gray-600">Te equivocaste de boton?</h5>
                <a href="../../../index.php" class="font-poppins text-gray-600 hover:shadow-md transition-all duration-300 font-black w-28 rounded-full h-10 border-2 grid place-content-center">VOLVER</a>
            </header>

            <form 
            action="#"
            method="post"
            class="w-full"
            >
                <div class="w-full texts flex flex-col justify-start items-start mb-8">
                    <h1 class=" font-tw text-5xl text-blue-900">Inicio de sesion</h1>
                    <p class="hidden md:flex font-poppins text-lg text-gray-500">Ingresa en tu cuenta con usuario y contraseña</p>
                </div>

                <?php
                include("../../../Models/config/database.php");
                include("../../../Controllers/iniciarSesion.php");
                
                ?>

                <div class="form__container flex flex-col items-center justify-center mt-4 gap-6">

                    <div class="form__group relative flex w-full flex-col items-start justify-center">
                        <label for="username" class="mb-1 font-poppins text-lg text-gray-600">Usuario:</label>
                        <input type="text" name="username" placeholder="Ingresa tu usuario"
                        class="h-12 w-full rounded-md outline-none border focus:border-white focus:outline-blue-800 font-montserrat text-blue-900 px-4 font-semibold text-xl">
                        <!-- <label for="username" class="cursor-pointer absolute top-10 right-3 text-2xl text-blue-900"><i class="fa-solid fa-circle-user"></i></label> -->
                    </div>

                    <div class="form__group relative flex w-full flex-col items-start justify-center">
                        <label for="pass" class="mb-1 font-poppins text-lg text-gray-600">Contraseña:</label>
                        <input type="password" id="passwordField" name="pass" placeholder="Ingresa tu usuario"
                        class="h-12 w-full rounded-md outline-none border focus:border-white focus:outline-blue-800 font-montserrat text-blue-900 px-4 font-semibold text-xl">
                        <!-- <label for="pass" class="cursor-pointer absolute top-10 right-3 text-2xl text-blue-900"><i class="fa-solid fa-eye"></i></label> -->
                        <button type="button" id="togglePassword" class="absolute top-10 right-3 text-2xl text-blue-900"><i class="fa-solid fa-eye"></i></button>
                
                    </div>
                    
                    <div class="button">
                        <input type="submit" name="ingresar" value="Ingresar" class="font-poppins w-48 h-14 bg-blue-600 rounded-full text-white text-xl cursor-pointer hover:bg-blue-700">
                    </div>
                </div>
            </form>

            <footer class="flex items-center justify-start gap-4 w-full ">
                <h5 class="font-poppins text-lg text-gray-600">Quieres contactarnos? <a href="#" class="text-blue-600 hover:underline">Clickea aqui</a></h5>
            </footer>

        </section>

    </main>


    <script src="../../assets/js/login.js"></script>
</body>
</html> 