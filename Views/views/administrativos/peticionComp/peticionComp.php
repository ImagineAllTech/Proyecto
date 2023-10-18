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
            <h2 class="text-6xl text-blue-700 font-bold font-bricolage">Peticion Competidores</h2>
        </div>

        <div class="w-full flex items-start justify-start flex-col">
            <!-- <a href="../../../../Models/enrutador.php?c=peticionComp&a=nuevo"
                class="px-6 py-2 rounded bg-blue-700 text-white text-xl hover:bg-blue-800 mb-8">Agregar Competidor
            </a> -->

            <table class="table-auto border border-slate-300" cellpadding="6" cellspacing="0">

                <thead>
                    <tr>
                        <th>CI Enc</th>
                        <th>Nom. y Apell. Enc.</th>
                        <th>CI</th>
                        <th>Nom. y Apell.</th>
                        <th>Fed</th>
                        <th>Fnac</th>
                        <th>Sexo</th>
                        <th>Aceptar</th>
                        <th>Rechazar</th>
                    </tr>
                </thead>
                <tbody class="">
                    <?php foreach ($data["peticionComp"] as $dato) {
                        echo "<tr>";
                        echo "<td class='text-center'>" . $dato["CIEnc"] . "</td>";
                        echo "<td>" . $dato["nameEnc"] . " " . $dato["apellEnc"] . "</td>";
                        echo "<td class='text-center'>" . $dato["CI"] . "</td>";
                        echo "<td>" . $dato["name"] . " " . $dato["apell"] . "</td>";
                        echo "<td>" . $dato["Fed"] . "</td>";
                        echo "<td class='text-center'>" . $dato["fnac"] . "</td>";
                        echo "<td class='text-center'>" . $dato["sexo"] . "</td>";
                        // echo "<td class='text-blue-700 font-bricolage font-bold text-center'><a href='../competidores/enrutador.php?c=competidores&a=modificar&ID=".$dato["IDComp"]."'>Modificar</a></td>";
                        echo "<td><button class='btnModificar'>Modificar</button></td>";
                        echo "<td class='text-blue-700 font-bricolage font-bold text-center'><a href='../../../../Models/enrutador.php?c=peticionComp&a=eliminar&ID=" . $dato["IDComp"] . "'>Eliminar</a></td>";
                        echo "</tr>";

                        echo "<section class='hidden fixed top-0 left-0 z-50 forms flex flex-col items-center justify-center h-screen w-full' style='background-color: rgba(0, 0, 0, 0.411);'>";
                        echo "<div class='flex flex-col items-center justify-start p-2 w-4/12 bg-white h-5/6 rounded'>";
                        echo "<figure class='w-full h-3/6 bg-blue-300 flex items-center justify-center rounded-sm text-6xl text-blue-600'>";
                        echo "<i class='fa-solid fa-check'></i>";
                        echo "</figure>";
                        echo "<form method='POST' class='hidden flex flex-col mt-4 items-center w-full h-full gap-12' action='../../../../Models/enrutador.php?c=peticionComp&a=añadirComp&ID=" . $dato["IDComp"] . ">";
                        echo "<input type='text' hidden name='IDComp' value='" . $dato["IDComp"] . "'>";
                        echo "<div class='form__group relative w-full'>";
                        echo "<input type='text' value='" . $dato["CI"] . "' class='w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3' placeholder='Escribe la cedula aqui' name='CI' pattern='\d{8}' minlength='8' maxlength='8' required>";
                        echo "<label for='CI' class='bg-white text-blue-700 font-bold font-bricolage absolute top-0 left-3 cursor-pointer px-1'>Cedula</label>";
                        echo "</div>";
                        echo "<div class='flex items-center justify-center gap-4'>";
                        echo "<div class='form__group relative w-full'>";
                        echo "<input type='text' value='" . $dato["name"] . "' class='w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3' placeholder='Nombre' name='name' pattern='[A-z]{2,20}' minlength='2' maxlength='20' required>";
                        echo "<label for='name' class='bg-white text-blue-700 font-bold font-bricolage absolute top-0 left-3 cursor-pointer px-1'>Nombre</label>";
                        echo "</div>";
                        echo "<div class='form__group relative w-full'>";
                        echo "<input type='text' value='" . $dato["apell"] . "' class='w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3' placeholder='Apellido' name='apell' pattern='[A-z]{2,20}' minlength='2' maxlength='20' required>";
                        echo "<label for 'apell' class='bg-white text-blue-700 font-bold font-bricolage absolute top-0 left-3 cursor-pointer px-1'>Apellido</label>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='form__group relative w-full'>";
                        echo "<input type='text' value='" . $dato["Fed"] . "' class='w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3' placeholder='Federacion' name='Fed' pattern='[A-z]{2,50}' minlength='2' maxlength='50' required>";
                        echo "<label for='Fed' class='bg-white text-blue-700 font-bold font-bricolage absolute top-0 left-3 cursor-pointer px-1'>Federacion</label>";
                        echo "</div>";
                        echo "<div class='flex items-center justify-start gap-4 w-full'>";
                        echo "<div class='form__group relative'>";
                        echo "<input type='date' value='" . $dato["fnac"] . "' class='w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3 w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3' placeholder='Escribe la cedula aquí' name='fnac' required min='1960-01-01' max='2023-12-31'>";
                        echo "<label for='fnac' class='bg-white text-blue-700 font-bold font-bricolage absolute top-0 left-3 cursor-pointers'>Fecha de nacimiento</label>";
                        echo "</div>";
                        echo "<div class='form__group relative w-full'>";
                        echo "<select name='sexo' value='" . $dato["sexo"] . "' class='w-full bg-transparent border-b outline-none py-2 px-4 text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left translate-y-3' required>";
                        echo "<option value='Masculino'>Masculino</option>";
                        echo "<option value='Femenino'>Femenino</option>";
                        echo "<option value='Otro'>Otro</option>";
                        echo "</select>";
                        echo "<label for='sexo' class='bg-white text-blue-700 font-bold font-bricolage absolute top-0 left-3 cursor-pointer'>Sexo</label>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='buttons w-full flex items-center justify-center text-center'>";
                        echo "<input type='submit' name='guardar' id='guardar' value='Guardar Competidor' class='cursor-pointer w-full h-10 font-normal font-bricolage text-2xl rounded bg-blue-700 hover:bg-blue-800 text-white flex items-center justify-center text-center'>";
                        echo "</div>";
                        echo "</form>";
                        echo "</div>";
                        echo "</section>";






                        // echo "<section class='hidden fixed form flex-col items-center w-full'>";
                        // echo "<form
                        // method='POST' 
                        // action='../../../../Models/enrutador.php?c=peticionComp&a=añadirComp&ID=".$dato["IDComp"]."'
                        // class='flex items-center w-full h-full'>";
                        // echo "<input type='text' hidden name='IDComp' value=".$dato["IDComp"]." >";
                        // echo "<input type='text' name='CI' value=".$dato["CI"]." >";
                        // echo "<input type='text' name='name' value=".$dato["name"]." >";
                        // echo "<input type='text' name='apell' value=".$dato["apell"]." >";
                        // echo "<input type='text' name='Fed' value=".$dato["Fed"]." >";
                        // echo "<input type='date' name='fnac' value=".$dato["fnac"]." >";
                        // echo "<input type='text' name='sexo' value=".$dato["sexo"]." >";
                        // echo "<input type='submit' value='guardar'>";
                        // echo "</form>";
                        // echo "</section>";
                    
                    }

                    ?>
                </tbody>

            </table>
        </div>
        </div>
    </main>

    <script src="../Views/assets/js/peticionComp.js"></script>

    <script defer src="../Views/assets/js/dashboard.js"></script>
    <script src="../Views/components/menu.js"></script>
</body>

</html>