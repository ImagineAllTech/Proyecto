<?php

session_start();

if (empty($_SESSION["id"])) {
    header("location: ../../../../Views/views/login/login.php");
}

?>

<!DOCTYPE html>
<html id="html" class="" lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUKDash | Competidores</title>
    <link rel="shortcut icon" href="../Views/assets/img/Logotype.svg" type="image/x-icon">
    <link rel="stylesheet" href="../Views/assets/css/dashboard.css">
    <link rel="stylesheet" href="../Views/assets/css/normalize.css">

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
            <a href="#" title="Registar competidor"><i class="fa-solid fa-rectangle-list"></i></a>
            <a href="#" title="Petiicon de competidores"><i class="fa-solid fa-user-plus"></i></a>
            <a href="#" title="Competidores"><i class="fa-solid fa-user-ninja"></i></a>
            <a href="#" title="Torneo"><i class="fa-solid fa-trophy"></i></a>
            <a href="#" title="Jueces"><i class="fa-solid fa-gavel"></i></a>
        </nav>

        <div class="flex flex-col items-center justify-center gap-10 text-gray-100 text-2xl">
            <a href="#" title="Desconectarse"><i class="fa-solid fa-right-to-bracket"></i></a>
        </div>
    </header>

    <main class="p-2 pr-6 mb-8 min-h-screen" style="width: 94vw;">
        <section class="mt-4 mb-4 w-full rounded-md h-full bg-gray-200 p-4 flex flex-col items-center justify-start">
            <section class="flex items-start justify-between mb-12 w-full">
                <div class="">
                    <p class="font-poppins text-gray-700">Hola, te encuentras en</p>
                    <h2 class="text-6xl text-blue-700 font-bold font-bricolage">Torneos</h2>
                </div>
                <a href="../../../../Models/enrutador.php?c=Torneo&a=nuevo"
                    class="px-6 py-2 rounded bg-blue-700 text-white text-xl hover:bg-blue-800 mb-8">Crear Torneo
                </a>
            </section>

            <table class="table-auto border border-gray-800" cellpadding="6" cellspacing="0">

                <thead>
                    <tr>
                        <th class="border border-gray-800">Nombre del Torneo</th>
                        <th class="border border-gray-800">Cantidad Jueces</th>
                        <th class="border border-gray-800">Estado</th>
                        <th class="border border-gray-800">Fecha</th>
                        <th class="border border-gray-800">Genero</th>
                        <th class="border border-gray-800">Info</th>
                        <th class="border border-gray-800">Borrar</th>
                    </tr>
                </thead>
                <tbody class="">
                    <?php foreach ($data["Torneo"] as $dato) {
                        echo "<tr>";
                        echo "<td class='text-center'>" . $dato["nombre"] . "</td>";
                        echo "<td class='text-center'>" . $dato["cantJueces"] . "</td>";
                        echo "<td class='text-center'>" . $dato["estado"] . "</td>";
                        echo "<td class='text-center'>" . $dato["fecha"] . "</td>";
                        echo "<td class='text-center'>" . $dato["genero"] . "</td>";
                        echo "<td class='text-center font-semibold text-blue-800'><button class='btnModificar'>Ver Informacion</button></td>";
                        echo "<td class='text-blue-800 font-semibold text-center'><a href='../../../../Models/enrutador.php?c=torneo&a=eliminar&ID=" . $dato["IDT"] . "'>Eliminar</a></td>";
                        echo "</tr>";

                        echo '<section id="popup" class="popup forms hidden fixed top-0 left-0 flex flex-col items-center justify-center w-full h-full" style="background-color: rgba(0, 0, 0, 0.411)";>';       
                        echo '  <div class="flex flex-col items-center justify-between p-6 w-4/12 bg-white h-4/6 rounded">';
                        echo '<div class="texts mb-4 w-full">';
                        echo "<h2 class='font-inter font-black text-4xl text-blue-950'>Informacion Torneo</h2>";
                        echo '</div>';
                        echo '    <article class="w-full flex flex-col items-start justify-start">';
                        echo '        <div class="mb-4 w-full flex flex-row-reverse items-center justify-start gap-3">';
                        echo '            <form method="post" action="../../../../Models/enrutador.php?c=torneo&a=verCats&ID='.$dato["IDT"].'" class="flex flex-col font-poppins items-start justify-start text-xl">';
                        
                        echo '        </div>';
                        
                        echo '        <div class="w-full mb-4 flex items-center justify-start gap-2">';
                        echo '            <h2 class="font-poppins font-semibold text-blue-900 text-2xl">Genero:</h2>';
                        echo '            <p class="font-poppins text-2xl">'.$dato['genero'] .'</p>';
                        echo '        </div>';

                        echo '        <div class="w-full mb-4 flex items-center justify-start gap-2">';
                        echo '            <h2 class="font-poppins font-semibold text-blue-900 text-2xl">Fecha:</h2>';
                        echo '            <p class="font-poppins text-2xl">31-12-2023</p>';
                        echo '        </div>';

                        echo '        <div class="mb-4 w-full flex items-start justify-start gap-3">';
                        echo '            <h2 class="font-poppins font-semibold text-blue-900 text-2xl">Jueces:</h2>';
                        echo '            <p class="font-poppins text-2xl">'.$dato['cantJueces'] .'</p>';
                        echo '        </div>';

                        echo '        <div class="w-full mb-4 flex items-center justify-start gap-2">';
                        echo '            <h2 class="font-poppins font-semibold text-blue-900 text-2xl">Estado:</h2>';
                        echo '            <p class="font-poppins text-2xl">'.$dato['estado'] .'</p>';
                        echo '        </div>';


                        echo '    </article>';
                        echo '    <div class="buttons w-full flex flex-col h-24 gap-2 font-poppins">';
                        echo '        <input type="submit" value="Ver Categorias" class="cursor-pointer enviar w-full h-full bg-blue-500 hover:bg-blue-600 rounded-md text-gray-50 text-xl flex items-center justify-center">';
                        echo '        </input>';
                        echo '        <button class="cerrar w-full h-full bg-gray-500 hover:bg-gray-600 rounded-md text-gray-50 text-xl">';
                        echo '            Cerrar menu';
                        echo '        </button>';
                        echo '    </div>';
                        echo '           </form>';
                        echo '</div>';
                    }

                    ?>
                </tbody>

            </table>

        </section>
        <script src="../Views/assets/js/torneo.js"></script>
    </main>

</body>
</html>