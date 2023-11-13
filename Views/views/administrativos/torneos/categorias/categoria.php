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
                    <h2 class="text-6xl text-blue-700 font-bold font-bricolage">Categorias Torneo</h2>
                </div>
            </section>

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
                        echo "<td class='text-center text-green-800 font-semibold'><button class='btnModificar'>Añadir</button></td>";
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

        </section>
    </main>

    <script defer src="../Views/assets/js/torneo.js"></script>
</body>
</html>