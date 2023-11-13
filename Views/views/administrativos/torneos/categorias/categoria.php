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
            <h2 class="text-6xl text-blue-700 font-bold font-bricolage">
                <?php echo $data["titulo"]; ?>
            </h2>
        </div>

        <!-- <button id="añadirComp" class="px-6 py-2 rounded bg-blue-700 text-white text-xl hover:bg-blue-800 mb-8">
            Añadir competidor
        </button> -->
        
        <div class="w-full flex items-start justify-start flex-col">

            <table class="table-auto border border-gray-800" cellpadding="6" cellspacing="0">

                <thead>
                    <tr>
                        <th class="border border-gray-800">Nombre Cat</th>
                        <th class="border border-gray-800">ID Torneo</th>
                        <th class="border border-gray-800">ID Cat</th>
                        <th class="border border-gray-800">Grupos</th>
                        <th class="border border-gray-800">Rondas</th>
                        <th class="border border-gray-800">Cant Comp</th>
                        <th class="border border-gray-800">Competidor</th>
                    </tr>
                </thead>
                
                <tbody class="">
                    <?php foreach ($data["Categorias"] as $dato) {
                        echo "<tr>";
                        echo "<td class='text-center'>" . $dato["nombreCat"] . " años</td>";
                        echo "<td class='text-center'>" . $data["IDT"] . "</td>";
                        echo "<td class='text-center'>" . $dato["ID"] . "</td>";
                        echo "<td class='text-center'> <a class='hover:underline text-blue-600' href='../../../../../Models/enrutador.php?c=categoria&a=verGrupo&ID=".$dato["ID"]."'>Ver grupos</a> </td>";
                        echo "<td class='text-center'> <a class='hover:underline text-blue-600' href='../../../../Models/enrutador.php?c=categoria&a=grupos&ID='>Ver rondas</a> </td>";
                        echo "<td class='text-center'>" . $dato["cantCompetidores"] . "</td>";
                        echo "<td class='text-center text-green-800'><button class='btnModificar'>Añadir</button></td>";
                        echo "</tr>";

                        echo '<section id="popup" class=\'hidden popup forms fixed top-0 left-0 flex flex-col items-center justify-center w-full h-full\' style=\'background-color: rgba(0, 0, 0, 0.411);\'>';
                        echo '';
                        echo '        <div class=\'flex flex-col items-center justify-start p-6 w-4/12 bg-white h-4/6 rounded\'>';
                        echo '';
                        echo '            <figure class=\'w-full h-3/6 bg-blue-300 mb-4 flex items-center justify-center rounded-sm text-6xl text-blue-600\'>';
                        echo '                <i class=\'fa-solid fa-plus\'></i>';
                        echo '            </figure>';
                        echo '';
                        echo '            <div class=\'texts mb-4 w-full text-center\'>';
                        echo '                <h2 class=\'font-inter font-black text-4xl text-blue-950\'>Añadir Competidor</h2>';
                        echo '            </div>';
                        echo '            <form method="post" action="../../../../../Models/enrutador.php?c=torneo&a=añadirComp&ID='.$dato["ID"].'" class="">';
                        echo '            <article class="w-full flex flex-col items-center justify-start">';
                        echo '';
                        echo '                    <div class="w-full mb-4 flex items-center justify-start gap-2">';
                        echo '                        <h2 class="font-poppins font-semibold text-blue-900 text-2xl">Cedula:</h2>';  
                        echo '                        <input type="text"';
                        echo '                           class="w-full bg-transparent border-b outline-none py-2 px- text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left"';
                        echo '                           placeholder="Escribe la cedula aqui" name="CI"';
                        echo '                           pattern="\d{8}" minlength="8" maxlength="8" required>';
                        echo '                     </div>';
                        echo '';
                        echo '                    <div class="w-full mb-4 flex items-center justify-start gap-2">';
                        echo '                        <h2 class="font-poppins font-semibold text-blue-900 text-2xl">Categorias:</h2>';
                        echo '                        <select name="categoria" class="w-full bg-transparent border-b outline-none py-2 px- text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left" required>';
                        echo '                            <option value="12-13">12/13 años</option>';
                        echo '                            <option value="14-15">14/15 años</option>';
                        echo '                            <option value="16-17">16/17 años</option>';
                        echo '                            <option value="+18">Mayores</option>';
                        echo '                        </select>';
                        echo '                    </div>';
                        echo '';
                        echo '                </article>';
                        echo '                <div class="buttons w-full h-16 font-poppins flex gap-2">';
                        echo '                    <input id="send" value="Añadir Comp" type="submit" class="w-full h-full bg-blue-500 hover:bg-blue-700 cursor-pointer rounded-md text-gray-50 text-xl">';
                        echo '                '; 
                        echo '';
                        echo '                    <a class="cerrar cursor-pointer grid place-content-center w-full h-full bg-gray-500 hover:bg-gray-600 rounded-md text-gray-50 text-xl">';
                        echo '                        Cerrar menu';
                        echo '                    </a>';
                        echo '                </div>';
                        echo '            </div>';
                        echo '        </form>';
                        echo '        </div>';
                        echo '    </section>';

                        }

                    ?>
                </tbody>

            </table>
        </div>
        </div>
    </main>

    <script defer src="../Views/assets/js/torneo.js"></script>
    <script src="../Views/components/menu.js"></script>
</body>

</html>