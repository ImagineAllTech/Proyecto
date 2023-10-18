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
<body class="body flex flex-col justify-start items-end w-full min-h-screen font-montserrat">

    <!-- Menus -->

    <div id="sidebar">

    </div>

    <main id="main-content" class="pl-7 pr-9 lg:sidebar-activo mt-24 lg:mt-24 flex flex-col items-start justify-start">

        <div class="mb-8">
            <h2 class="text-6xl text-blue-700 font-bold font-bricolage">Competidores</h2>
        </div>

        <div class="w-full flex items-start justify-start flex-col">
            <a href="../../../../Models/enrutador.php?c=competidores&a=nuevo"
                class="px-6 py-2 rounded bg-blue-700 text-white text-xl hover:bg-blue-800 mb-8">Agregar Competidor</a>

            <table class="table-auto border border-slate-300" cellpadding="6" cellspacing="0">
                
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
                        echo "<td class='text-center'>".$dato["CI"]."</td>";
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
        </div>
        </div>
    </main>

    <script defer src="../Views/assets/js/dashboard.js"></script>
    <script src="../Views/components/menu.js"></script>
</body>

</html>