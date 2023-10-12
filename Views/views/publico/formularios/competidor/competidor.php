<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../../../../assets/img/Logotype.svg" type="image/x-icon">
    <title>CUK | Registro Competidor</title>
    <link rel="stylesheet" href="../../../../assets/css/dashboard.css">

    <script src="../../../../assets/js/competidor.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/cea33d77ef.js" crossorigin="anonymous"></script>
</head>

<body class="w-full flex items-center justify-center flex-col bg-slate-950 p-4 min-h-screen">

    <main class="w-full md:w-9/12 bg-gray-50 rounded-lg flex items-center justify-between overflow-hidden" style="min-height: 90vh;">
        <!-- Imagen -->
        <div class="hidden lg:w-4/12 bg-slate-800 lg:flex items-center justify-center overflow-hidden rounded-x-lg" style="min-height: 90vh;">
            <img src="../../../../assets/img/Logotype.svg" class="w-64 " alt="">
        </div>

        <!-- Formulario -->
        <div class="w-full lg:w-8/12 flex flex-col items-start justify-between px-4 py-8" style="min-height: 90vh;">

            <h1 class="font-bricolage text-5xl font-bold text-blue-800 mb-10">Registrar <span
                    class="text-slate-900">Competidor</span></h1>

            <form action="" method="" class=""> 

                <h2 class="font-bricolage text-2xl font-semibold text-gray-800 ml-4 mb-5">Informacion del Encargado</h2>

                <div class="form__container flex flex-col items-center gap-12 mb-16">


                    <div class="w-full md:flex flex-col md:flex-row items-center justify-between md:gap-8">
                        <div class="form__group relative mb-8 md:mb-0">
                            <input type="text"
                                class="w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3"
                                placeholder="Escriba su nombre aqui" name="CI" pattern="\d{8}" minlength="8"
                                maxlenght="8" required>
                            <label for="CI"
                                class=" text-blue-700 font-bold font-bricolage absolute top-0 left-3 cursor-pointer px-1">Nombre</label>
                        </div>

                        <div class="form__group relative mt-8 md:mt-0">
                            <input type="text"
                                class="w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3"
                                placeholder="Escribe la cedula aqui" name="CI" pattern="\d{8}" minlength="8"
                                maxlenght="8" required>
                            <label for="CI"
                                class=" text-blue-700 font-bold font-bricolage absolute top-0 left-3 cursor-pointer px-1">Apellido</label>
                        </div>
                    </div>

                    <div class="w-full md:flex flex-col md:flex-row items-center justify-between md:gap-8">
                        <div class="form__group relative mb-8 md:mb-0">
                            <input type="text"
                                class="w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3"
                                placeholder="Escriba su cedula aqui" name="CI" pattern="\d{8}" minlength="8"
                                maxlenght="8" required>
                            <label for="CI"
                                class=" text-blue-700 font-bold font-bricolage absolute top-0 left-3 cursor-pointer px-1">Cedula</label>
                        </div>

                        <div class="form__group relative mt-8 md:mt-0">
                            <input type="text"
                                class="w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3"
                                placeholder="Escriba la federacion aqui" name="CI" pattern="\d{8}" minlength="8"
                                maxlenght="8" required>
                            <label for="CI"
                                class=" text-blue-700 font-bold font-bricolage absolute top-0 left-3 cursor-pointer px-1">Federacion</label>
                        </div>
                    </div>
                </div>
                <!-- Competidores -->

                <h2 class="font-bricolage text-2xl font-semibold text-gray-800 ml-4 mb-5">Informacion del Competidor</h2>

                <div class="form__container flex flex-col gap-12 w-full">

                    <div class="form__group relative">
                        <input type="text"
                           class="w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3"
                           placeholder="Escribe la cedula aqui" name="CI"
                           pattern="\d{8}" minlength="8" maxlenght="8" required>
                       <label for="CI" class=" text-blue-700 font-bold font-bricolage absolute top-0 left-3 cursor-pointer px-1">Cedula</label>     
                     </div>

                     <div class="w-full md:flex flex-col md:flex-row items-center justify-between md:gap-8">
                        <div class="form__group relative w-full mb-8 md:mb-0">
                            <input type="text"
                            class="w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3"
                            placeholder="Escribe el nombre aqui" name="Nombre"
                            pattern="[A-z]{2,20}"
                            minlength="2" maxlenght="20" required
                            >
                            <label for="Nombre" class=" text-blue-700 font-bold font-bricolage absolute top-0 left-3 cursor-pointer px-1">Nombre</label>
                            
                        </div>
                        
                        
                        <div class="form__group relative w-full mt-8 md:mt-0">
                           <input type="text"
                              class="w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3"
                              placeholder="Escribe el apellido aqui" name="Apellido"
                              pattern="[A-z]{2,20}"
                              min="2" max="20" required
                              >
                          <label for="Apellido" class=" text-blue-700 font-bold font-bricolage absolute top-0 left-3 cursor-pointer px-1">Apellido</label>     
                        </div>
                    </div>

                    <div class="w-full md:flex flex-col md:flex-row items-center justify-between md:gap-8 mb-8">

                        <div class="form__group relative w-full mb-8 md:mb-0">
                            <input list="form__genero__datalist" name="Sexo" class="w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3" id="form__genero" placeholder="Selecciona el genero" required>
                            <label for="form__genero__datalist" class=" text-blue-700 font-bold font-bricolage absolute top-0 left-3 cursor-pointer px-1">Sexo</label>
    
                            <datalist id="form__genero__datalist">
                                <option value="Masculino"></option>
                                <option value="Femenino"></option>
                                <option value="Otro"></option>
                            </datalist>
                        </div>

                        <div class="form__group relative w-full mt-8 md:mt-0">
                            <input type="date"
                            class="w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3"
                            placeholder="Escribe la cedula aqui" name="Fnac" required>
                            <label for="Fnac" class=" text-blue-700 font-bold font-bricolage absolute top-0 left-3 cursor-pointer px-1">Fecha de Nacimiento</label>     
                        </div>
                    </div>
                    
                </div>





                <!-- Boton para enviar -->

                <div class="flex w-full items-center justify-center">

                    <button type="submit" name="encargado" href="#"
                        class="w-6/12 h-12 bg-blue-700 text-white flex items-center justify-center hover:bg-blue-800 font-semibold rounded-full text-xl">Enviar
                        >
                    </button>

                </div>
            </form>
            <div></div>
        </div>
    </main>

    <!-- Competidores -->



</body>

</html>