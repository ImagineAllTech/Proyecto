<!DOCTYPE html>
<html id="html" class="" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUKDash | Agregar Competidor</title>
    <link rel="shortcut icon" href="../../../assets/img/Logotype.svg" type="image/x-icon">
    <link rel="stylesheet" href="../../../assets/css/dashboard.css">

    <!-- <script src="https://cdn.tailwindcss.com"></script> -->    
    <script src="https://kit.fontawesome.com/cea33d77ef.js" crossorigin="anonymous"></script>
</head>
<body class="body flex flex-col justify-center items-end w-full min-h-screen font-montserrat">

    <!-- Menus -->

    <div id="sidebar">

    </div>


    <main id="main-content" class="p-8 lg:sidebar-activo mt-24 lg:mt-24 h-screen w-full flex flex-col items-center justify-start">

        <div class="mb-8">
            <h2 class="text-6xl text-blue-700 font-bold font-bricolage">Crear torneo</h2>
        </div>

        <div class="w-11/12 flex items-start justify-start flex-col">

            <form name="nuevo" 
            method="POST" 
            action="../../../../Models/enrutador.php?c=torneo&a=crear"
            autocomplete="off"
            class="flex flex-col items-center justify-center w-full gap-8 w-full">

                <div class="form__container flex flex-col gap-20 w-5/12">

                     <div class="flex gap-12 w-full">
                        <div class="form__group relative w-full">
                            <input type="text"
                            class="w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3"
                            placeholder="Escribe el nombre del torneo" name="nombre"
                            pattern="[A-z ]{2,20}"
                            minlength="2" maxlength="20" required
                            >
                            <label for="nombre" class="bg-white text-blue-700 font-bold font-bricolage absolute top-0 left-3 cursor-pointer px-1">Nombre del Torneo</label>
                        </div>
                        
                        <div class="form__group relative">
                        <input type="text"
                           class="w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3"
                           placeholder="Escribe la cantidad de jueces" name="cantJueces"
                           pattern="\d{1}" minlength="1" maxlength="1" required>
                       <label for="cantJueces" class="bg-white text-blue-700 font-bold font-bricolage absolute top-0 left-3 cursor-pointer px-1">Cantidad Jueces</label>     
                     </div>

                     <div class="form__group relative">
                         <select name="estado" class="w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3" required>
                             <option value="Pendiente">Pendiente</option>
                             <option value="En curso">En curso</option>
                        </select>
                        <label for="estado" class="bg-white text-blue-700 font-bold font-bricolage absolute top-0 left-3 cursor-pointer px-1">Estado</label>
                    </div>

                     <div class="form__group relative">
                     <input type="date"
                        class="w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3"
                        placeholder="Escribe la cedula aquí" name="fecha" required
                        min="1960-01-01" max="2023-12-31">
                       <label for="fecha" class="bg-white text-blue-700 font-bold font-bricolage absolute top-0 left-3 cursor-pointer px-1">Fecha de Nacimiento</label>     
                     </div>

                     <div class="form__group relative">
                         <select name="genero" class="w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3" required>
                             <option value="Masculino">Masculino</option>
                             <option value="Femenino">Femenino</option>
                             <option value="Otro">Otro</option>
                        </select>
                        <label for="genero" class="bg-white text-blue-700 font-bold font-bricolage absolute top-0 left-3 cursor-pointer px-1">Sexo</label>
                    </div>


                    <div class="buttons w-full h-24 flex items-center justify-center text-center">
                        <button 
                        name="guardar"
                        id="guardar"
                        type="submit"
                        class="w-full h-12 font-normal font-bricolage text-2xl rounded bg-blue-700 hover:bg-blue-800 text-white flex items-center justify-center text-center"
                        >Crear Torneo</button>
                    </div>
                </div>

            </form>

    </main>

    <script defer src="../../../assets/js/dashboard.js"></script>
    <script src="../../../components/menu.js"></script>
</body>

</html>