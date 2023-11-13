<!DOCTYPE html>
<html id="html" class="" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUKDash | Inicio</title>
    <link rel="shortcut icon" href="../Views/assets/img/Logotype.svg" type="image/x-icon">
    <link rel="stylesheet" href="../Views/assets/css/dashboard.css">


    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/cea33d77ef.js" crossorigin="anonymous"></script>
</head>

<body class="bg-slate-950 flex min-h-screen w-full">
    
    <div style="width: 6vw;"></div>
    <header class="fixed top-0 left-0 py-6 flex flex-col items-center justify-between h-screen" style="width: 6vw;">
        <figure class="w-full flex items-center justify-center">
            <img src="../../Views/assets/img/Logotype.svg" alt="CUKLogo" class="w-7/12">
        </figure>

        <nav class="flex flex-col items-center justify-center gap-10 text-gray-100 text-2xl">
            <a href="../Views/views/publico/formularios/competidor/competidor.php" title="Registar competidor"><i class="fa-solid fa-rectangle-list"></i></a>
            <a href="enrutador.php?c=competidores" title="Petiicon de competidores"><i class="fa-solid fa-user-plus"></i></a>
            <a href="enrutador.php?c=peticionComp" title="Competidores"><i class="fa-solid fa-user-ninja"></i></a>
            <a href="enrutador.php?c=torneo" title="Torneo"><i class="fa-solid fa-trophy"></i></a>
            <a href="../Views/views/jueces/jueces.php" title="Jueces"><i class="fa-solid fa-gavel"></i></a>
        </nav>

        <div class="flex flex-col items-center justify-center gap-10 text-gray-100 text-2xl">
            <a href="../../../Models/enrutador.php?c=usuario&a=cerrarSesion" title="Desconectarse"><i class="fa-solid fa-right-to-bracket"></i></a>
        </div>
    </header>

    <main class="p-2 pr-6 mb-8 min-h-screen" style="width: 94vw;">
        <section class="mt-4 mb-4 w-full rounded-md h-full bg-gray-200 p-4">
            <section class="flex items-center justify-between mb-8">

                <div>
                    <p class="font-poppins text-gray-700">Hola, te encuentras en la</p>
                    <h2 class="text-6xl text-blue-700 font-bold font-bricolage">Dashboard</h2>
                </div>

                
            
            </section>

            <div class="w-full grid grid-rows-1 grid-cols-1 lg:grid-rows-3 lg:grid-cols-3 items-center justify-center gap-4">
                <div class="card juez lg:col-span-1 h-72 w-full rounded-lg bg-white flex flex-col items-center justify-center shadow-xl">
                    <h2 class="text-9xl text-blue-700 font-bold font-bricolage">7</h2>
                    <p class="font-bricolage font-semibold text-4xl text-blue-950">Jueces</p>
                </div>
    
                <div class="card estado lg:col-span-1 h-72 w-full rounded-lg bg-white flex flex-col items-center justify-center">
                    <p class="font-bricolage font-semibold text-4xl text-blue-950">Fase:</p>
                    <h2 class="text-9xl text-blue-700 font-bold font-bricolage ">8vo</h2>
                    <p class="font-bricolage font-semibold text-4xl text-blue-950"></p>
                </div>
    
                <!-- <div class="card fase col-span-1 h-72 w-full rounded-lg bg-white flex flex-col items-center justify-center">
                    <h2 class="text-9xl text-blue-700 font-bold font-bricolage ">16</h2>
                    <p class="font-bricolage font-semibold text-4xl text-blue-950">Competidores</p>
                </div> -->
    
                <div class="card estado lg:col-span-1 h-72 w-full rounded-lg bg-white flex flex-col items-center justify-center">
                    <p class="font-bricolage font-semibold text-4xl text-blue-950">Estado:</p>
                    <h2 class="text-9xl text-blue-700 font-bold font-bricolage">OFF</h2>
                </div>
    
    
    
                <div class="card competidor lg:row-span-1 lg:col-span-2 h-72 w-full rounded-lg bg-white flex flex-col items-start justify-center pl-4 pt-4 text-center lg:text-left">
                    <p class="font-bricolage font-semibold text-3xl text-blue-950">Ultimo Competidor:</p>
                    <h2 class="text-6xl text-blue-700 font-bold font-bricolage">Matias Moreira</h2>
                </div>
    
                <div class="card promedio lg:col-span-1 lg:row-span-2 h-full rounded-lg w-full bg-white pt-4 px-2 text-center md:text-left">
                    <p class="font-bricolage font-semibold text-3xl text-blue-950 text-center mb-4">Ultimos Puntuajes:</p>
                    <div class="flex flex-wrap items-center justify-center gap-10">
                        <div class="w-326 text-center">
                            <p class="font-bricolage font-semibold text-2xl text-blue-950">Juez 1:</p>
                            <h2 class="text-7xl text-blue-700 font-bold font-bricolage">7.3</h2>
                        </div>
    
                        <div class="w-326 text-center">
                            <p class="font-bricolage font-semibold text-2xl text-blue-950">Juez 2:</p>
                            <h2 class="text-7xl text-blue-700 font-bold font-bricolage">8.1</h2>
                        </div>
    
                        <div class="w-2/6 text-center">
                            <p class="font-bricolage font-semibold text-2xl text-blue-950">Juez 3:</p>
                            <h2 class="text-7xl text-blue-700 font-bold font-bricolage">6.7</h2>
                        </div>
    
                        <div class="w-326 text-center">
                            <p class="font-bricolage font-semibold text-2xl text-blue-950">Juez 4:</p>
                            <h2 class="text-7xl text-blue-700 font-bold font-bricolage">9.1</h2>
                        </div>
    
                        <div class="w-326 text-center">
                            <p class="font-bricolage font-semibold text-2xl text-blue-950">Juez 5:</p>
                            <h2 class="text-7xl text-blue-700 font-bold font-bricolage">8.0</h2>
                        </div>
    
                        <div class="w-326 text-center">
                            <p class="font-bricolage font-semibold text-2xl text-blue-950">Juez 6:</p>
                            <h2 class="text-7xl text-blue-700 font-bold font-bricolage">7.1</h2>
                        </div>
    
                        <div class="w-326 text-center">
                            <p class="font-bricolage font-semibold text-2xl text-blue-950">Juez 7:</p>
                            <h2 class="text-7xl text-blue-700 font-bold font-bricolage">8.3</h2>
                        </div>
                    </div>
                </div>
    
                <div class="card kata lg:row-span-1 lg:col-span-2 h-72 w-full rounded-lg bg-white flex flex-col md:items-start items-center justify-center pl-4 text-center lg:text-left">
                    <p class="font-bricolage font-semibold text-3xl text-blue-950 text-center md:text-left">Ultimo Kata:</p>
                    <h2 class="text-6xl text-blue-700 font-bold font-bricolage">Bassai Dai</h2>
                </div>
                
    
            </div>

        </section>
    </main>

    <script defer src="../../../assets/js/dashboard.js"></script>
</body>
</html>