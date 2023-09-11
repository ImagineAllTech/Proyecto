<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        CUK | Contacto 
    </title>
    <link rel="stylesheet" href="../../../../assets/css/jueces.css">
    <link rel="shortcut icon" href="../../../../assets/img/Logotype.svg" type="image/x-icon">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/cea33d77ef.js" crossorigin="anonymous"></script>
</head>

<body>

    <main class="min-h-screen w-full flex items-center flex-col justify-between py-4">
        
        <img src="../../../../assets/img/Logotype.svg" class="w-12" alt="Logo">

            <div class="mb-8">
                <h2 class="text-6xl text-blue-700 font-bold font-bricolage">Contactanos</h2>
            </div>

            <div class="w-full flex items-start justify-start flex-col">

            <form name="nuevo" 
            method="POST" 
            action="../competidores/enrutador.php?c=competidores&a=guarda"
            autocomplete="off"
            class="flex flex-col items-center justify-center w-full gap-8 w-full">

                <div class="form__container flex flex-col gap-20 w-5/12">

                    <div class="flex gap-12 w-full">
                        <div class="form__group relative w-full">
                            <input type="text"
                            class="w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3"
                            placeholder="Escribe el nombre aqui" name="Nombre"
                            pattern="[A-z]{2,20}"
                            minlength="2" maxlength="50" required
                            >
                            <label for="Nombre" class="text-blue-700 font-bold font-bricolage absolute top-0 left-3 cursor-pointer px-1">Nombre</label>
                            
                        </div>
                    </div>

                    <!-- Escuela-Dojo -->
                    <div class="form__group relative w-full">
                            <input type="email"
                            class="w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3"
                            placeholder="Escribe la escuela aqui" name="Escuela"
                            pattern="[A-z]{2,50}"
                            minlength="2" maxlenght="60" required>
                        <label for="Escuela" class="text-blue-700 font-bold font-bricolage absolute top-0 left-3 cursor-pointer px-1">Correo electronico</label>
                    </div>

                    <div class="form__group relative w-full">
                        <input type="text"
                        class="w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3"
                        placeholder="Escribe el asunto aqui" name="Nombre"
                        pattern="[A-z]{2,20}"
                        minlength="2" maxlength="50" required
                        >
                        <label for="Nombre" class="text-blue-700 font-bold font-bricolage absolute top-0 left-3 cursor-pointer px-1">Asunto</label>
                        
                    </div>

                    <div class="form__group relative w-full">
                    <textarea name="mensaje" id="mensaje" cols="10" rows="10" placeholder="0/256ch" minlength="2" maxlength="256" class="w-full bg-transparent border rounded-md outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3"></textarea>
                    <label for="mensaje" class="text-blue-700 font-bold font-bricolage absolute top-0 left-3 cursor-pointer px-1">Mensaje</label>
                </div>


                    <div class="buttons w-full h-24 flex items-center justify-center text-center">
                        <button 
                        name="enviar"
                        id="enviar"
                        type="submit"
                        class="w-full h-12 font-normal font-bricolage text-2xl rounded bg-blue-700 hover:bg-blue-800 text-white flex items-center justify-center text-center"
                        >Enviar mensaje</button>
                    </div>
                </div>
            </div>            
        </form>

    </main>
</body>

</html>