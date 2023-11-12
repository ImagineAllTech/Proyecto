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

<body class="body flex flex-col justify-start items-end w-full min-h-screen font-montserrat">

    <!-- Menus -->

    <div id="sidebar">

    </div>

    <main id="main-content" class="pl-7 pr-9 lg:sidebar-activo mt-24 lg:mt-24 flex flex-col items-start justify-start">

        <div class="mb-8">
            <h2 class="text-6xl text-blue-700 font-bold font-bricolage">Torneos</h2>
        </div>

        <div class="w-full flex items-start justify-start flex-col">
            <a href="../../../../Models/enrutador.php?c=Torneo&a=nuevo"
                class="px-6 py-2 rounded bg-blue-700 text-white text-xl hover:bg-blue-800 mb-8">Crear Torneo
            </a>

            <table class="table-auto border border-gray-800" cellpadding="6" cellspacing="0">

                <thead>
                    <tr>
                        <th class="border border-gray-800">Nombre del Torneo</th>
                        <th class="border border-gray-800">Cantidad Jueces</th>
                        <th class="border border-gray-800">Estado</th>
                        <th class="border border-gray-800">Fecha</th>
                        <th class="border border-gray-800">Genero</th>
                        <th class="border border-gray-800">Editar</th>
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
                        // echo "<td class='text-blue-700 font-bricolage font-bold text-center'><a href='../competidores/enrutador.php?c=competidores&a=modificar&ID=".$dato["IDComp"]."'>Modificar</a></td>";
                        echo "<td><button class='btnModificar'>Modificar</button></td>";
                        echo "<td class='text-blue-700 font-bricolage font-bold text-center'><a href='../../../../Models/enrutador.php?c=torneo&a=eliminar&ID=" . $dato["IDT"] . "'>Eliminar</a></td>";
                        echo "</tr>";

                        echo '<section id="popup" class="popup forms hidden fixed top-0 left-0 flex flex-col items-center justify-center w-full h-full" style="background-color: rgba(0, 0, 0, 0.411)";>';       
                        echo '  <div class="flex flex-col items-center justify-between p-6 w-4/12 bg-white h-4/6 rounded">';
                        echo '<div class="texts mb-4 w-full">';
                        echo "<h2 class='font-inter font-black text-4xl text-blue-950'>Informacion Torneo</h2>";
                        echo '</div>';
                        echo '    <article class="w-full flex flex-col items-start justify-start">';
                        echo '        <div class="mb-4 w-full flex flex-row-reverse items-center justify-start gap-3">';
                        echo '            <form method="post" action="../../../../Models/enrutador.php?c=torneo&a=verCats&ID='.$dato["IDT"].'" class="flex flex-col font-poppins items-start justify-start text-xl">';
                        // echo '                <input name="cat" class="text-blue-600 hover:underline" href="../../../../Models/enrutador.php?c=categoria&a=index&='. $dato["IDT"] .'">12/13 años</input>';
                        
                        echo '                  <select name="categoria" class="w-full bg-transparent border-b outline-none py-2 px- text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left" required>';
                        echo '                      <option value="12-13">12/13 años</option>';
                        echo '                      <option value="14-15">14/15 años</option>';
                        echo '                      <option value="16-17">16/17 años</option>';
                        echo '                      <option value="+18">Mayores</option>';
                        echo '                  </select>';
                        echo '            <h2 class="font-poppins font-semibold text-blue-900 text-2xl">Categorias:</h2>';
                        
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
                        echo '        <input type="submit" class="enviar w-full h-full bg-blue-500 hover:bg-blue-600 rounded-md text-gray-50 text-xl flex items-center justify-center">';
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
        </div>
        </div>
    </main>

            <!-- <script src="../Views/assets/js/peticionComp.js"></script> -->

            <script defer src="../Views/assets/js/torneo.js"></script>
            <script src="../Views/components/menu.js"></script>
</body>

</html>