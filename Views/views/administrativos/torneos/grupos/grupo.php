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
    <title>CUKDash | Grupos</title>
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
                    <h2 class="text-6xl text-blue-700 font-bold font-bricolage">Grupos Torneo</h2>
                </div>
                <?php
                    echo "<a href='../../../../../Models/enrutador.php?c=categoria&a=generarLlaves&ID=".$data["IDCat"]."' class='px-6 py-2 rounded bg-blue-700 text-white text-xl hover:bg-blue-800 mb-8'>Ver llaves</a>";
                ?>
            </section>

            <section class="w-full flex items-start justify-between gap-24">

            <div class="w-full">
            <h2 class="text-gray-950 mb-2 text-2xl font-semibold font-poppins">Grupo 1</h2>
            <table class="table-auto border border-gray-800" cellpadding="6" cellspacing="0">
            
                <thead>
                    <tr>
                        <th class="border border-gray-800">ID Grupo</th>
                        <th class="border border-gray-800">Cedula</th>
                        <th class="border border-gray-800">Eliminar</th>
                    </tr>
                </thead>
                
                <tbody class="">
                    <?php foreach ($data["grupos1"] as $grupo) {
                        echo "<tr>";
                        echo "<td class='text-center'>" . $grupo["IDG"] . "</td>";
                        echo "<td class='text-center'>" . $grupo["CI"] . "</td>";
                        echo "<td class='text-center'> <a class='hover:underline text-blue-600' href='../../../../../Models/enrutador.php?c=torneo&a=eliminarComp&ID=".$grupo["CI"]."'>Eliminar</a> </td>";
                        echo "</tr>";

                    }

                    ?>
                </tbody>

            </table>
        </div>   


            <div class="w-full">

                <h2 class="text-gray-950 mb-2 text-2xl font-semibold font-poppins">Grupo 2</h2>
                <table class="table-auto border border-gray-800" cellpadding="6" cellspacing="0">
                <thead>
                    <tr>
                        <th class="border border-gray-800">ID Grupo</th>
                        <th class="border border-gray-800">Cedula</th>
                        <th class="border border-gray-800">Eliminar</th>
                    </tr>
                </thead>
                
                <tbody class="">
                    <?php foreach ($data["grupos2"] as $grupo) {
                        echo "<tr>";
                        echo "<td class='text-center'>" . $grupo["IDG"] . "</td>";
                        echo "<td class='text-center'>" . $grupo["CI"] . "</td>";
                        // echo "<td class='text-center'>54077285</td>";
                        echo "<td class='text-center'> <a class='hover:underline text-blue-600' href='../../../../../Models/enrutador.php?c=torneo&a=eliminarComp&ID=".$grupo["CI"]."'>Eliminar</a> </td>";
                        echo "</tr>";

                    }

                    ?>
                </tbody>

            </table>
            </div>
            </section>
        </section>
    </main>

    <script defer src="../Views/xassets/js/categoria.js"></script>
</body>
</html>