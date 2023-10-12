<!DOCTYPE html>
<html id="html" class="" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUK | Log In</title>
    <link rel="shortcut icon" href="assets/img/Logotype.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/jueces.css">


    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/cea33d77ef.js" crossorigin="anonymous"></script>
</head>

<body class="body flex flex-col justify-center items-center w-full min-h-screen font-montserrat">

    <a href="../../../index.php" class="fixed top-0 px-4 py-4">
        <img src="../../assets/img/Logotype.svg" alt="Icono" class="w-20">
    </a>

    <main class="h-screen w-full flex items-center justify-center">
        <form method="post" action="#"
            class="w-10/12 lg:w-3/12 h-4/6 rounded-md flex flex-col items-center justify-around border border-gray-900">
            <div class="form__container flex items-start justify-center flex-col gap-8 relative">
                <h1 class="font-bricolage text-4xl text-blue-800 font-bold">Iniciar Sesion</h1>
                <!-- <img src="../../assets/img/Logotype.svg" alt="Icono" class="w-8 absolute top-0 right-2"> -->

                <?php
                include("../../../Models/config/database.php");
                include("../../../Controllers/iniciarSesion.php");
                
                ?>

                <div class="form__group relative">
                    <input type="text"
                        class="w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3"
                        placeholder="Escriba aqui" name="username">
                    <label for="username" class="absolute top-0 left-3 cursor-pointer px-1">Usuario</label>
                </div>

                <div class="form__group relative">
                    <input type="password" placeholder="Escriba aqui" class="w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3" name="pass" id="passwordField">
                    <label for="pass" class="absolute top-0 left-3 cursor-pointer px-1">Contraseña</label>
                    <button type="button" id="togglePassword" class="absolute top-6 right-5"><i class="fa-solid fa-eye"></i></button>
                </div>


                <div class="form__button w-full">
                    <input type="submit" value="Ingresar" name="ingresar"
                        class="w-full cursor-pointer h-10 bg-blue-800 hover:bg-blue-900 text-xl font-montserrat text-white font-bold rounded-md">
                </div>
            </div>

        </form>
    </main>

    <script src="../../../Views/assets/js/login.js"></script>
</body>

</html>