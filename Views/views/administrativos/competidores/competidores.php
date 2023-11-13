<?php

session_start();

if(empty($_SESSION["id"])){
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
            <section class="flex items-center justify-between mb-12 w-full">
                <div class="">
                    <p class="font-poppins text-gray-700">Hola, te encuentras en</p>
                    <h2 class="text-6xl text-blue-700 font-bold font-bricolage">Competidores</h2>
                </div>
                <a href="../../../../Models/enrutador.php?c=competidores&a=nuevo"
                class="px-6 py-2 rounded bg-blue-700 text-white text-xl hover:bg-blue-800 mb-8">Agregar Competidor</a>
            </section>

            <table class="mb-8 table-auto border border-slate-300" cellpadding="6" cellspacing="0">
                
                <thead>
                    <tr>
                        <th >CI</th>
                        <th >Nombre</th>
                        <th >Apellido</th>
                        <th >Fecha de Nacimiento</th>
                        <th >Sexo</th>
                        <th >Escuela</th>
                        <th >Dojo</th>
                        <th >Editar</th>
                        <th >Borrar</th>
                    </tr>
                </thead>
                <tbody class="">
                    <?php foreach($data["Competidores"] as $dato) {
                        echo "<tr>";
                        echo "<td class='bg-gray-100 text-center'>".$dato["CI"]."</td>";
                        echo "<td>".$dato["Nombre"]."</td>";
                        echo "<td>".$dato["Apellido"]."</td>";
                        echo "<td class='text-center'>".$dato["Fnac"]."</td>";
                        echo "<td class='text-center'>".$dato["Sexo"]."</td>";
                        echo "<td>".$dato["Escuela"]."</td>";
                        echo "<td>".$dato["Dojo"]."</td>";
                        echo "<td class='text-blue-700 font-bricolage font-bold text-center'><a href='../../../../Models/enrutador.php?c=competidores&a=modificar&ID=".$dato["ID"]."'>Modificar</a></td>";

                        echo "<td class='text-blue-700 font-bricolage font-bold text-center'><a href='../../../../Models/enrutador.php?c=competidores&a=eliminar&ID=".$dato["ID"]."'>Eliminar</a></td>";
                    echo "</tr>";

                    }

                    ?>
                </tbody>

            </table>

        </section>
    </main>

</body>

</html>