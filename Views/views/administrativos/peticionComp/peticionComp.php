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

    <!-- <div id="sidebar">

    </div> -->

    <main id="main-content" class="pl-7 pr-9 lg:sidebar-activo mt-24 lg:mt-24 flex flex-col items-start justify-start">

        <div class="mb-8">
            <h2 class="text-6xl text-blue-700 font-bold font-bricolage">Competidores</h2>
        </div>

        <div class="w-full flex items-start justify-start flex-col">
            <a href="../../../../Models/enrutador.php?c=peticionComp&a=nuevo"
                class="px-6 py-2 rounded bg-blue-700 text-white text-xl hover:bg-blue-800 mb-8">Agregar Competidor</a>

            <table class="table-auto border border-slate-300" cellpadding="6" cellspacing="0">
                
                <thead>
                    <tr>
                        <th >CI Enc</th>
                        <th >Nom. y Apell. Enc.</th>
                        <th >CI</th>
                        <th >Nom. y Apell.</th>
                        <th >Fed</th>
                        <th >Fnac</th>
                        <th >Sexo</th>
                        <th >Aceptar</th>
                        <th >Rechazar</th>
                    </tr>
                </thead>
                <tbody class="">
                    <?php foreach($data["peticionComp"] as $dato) {
                        echo "<tr>";
                        echo "<td class='text-center'>".$dato["CIEnc"]."</td>";
                        echo "<td>".$dato["nameEnc"]." ".$dato["apellEnc"]. "</td>";
                        echo "<td class='text-center'>".$dato["CI"]."</td>";
                        echo "<td>".$dato["name"]." ".$dato["apell"]."</td>";
                        echo "<td>".$dato["Fed"]."</td>";
                        echo "<td class='text-center'>".$dato["fnac"]."</td>";
                        echo "<td class='text-center'>".$dato["sexo"]."</td>";
                        // echo "<td class='text-blue-700 font-bricolage font-bold text-center'><a href='../competidores/enrutador.php?c=competidores&a=modificar&ID=".$dato["IDComp"]."'>Modificar</a></td>";
                        echo "<td><button class='btnModificar'>Modificar</button></td>";
                        echo "<td class='text-blue-700 font-bricolage font-bold text-center'><a href='../../../../Models/enrutador.php?c=peticionComp&a=eliminar&ID=".$dato["IDComp"]."'>Eliminar</a></td>";
                    echo "</tr>";
                    
                    echo "<section class='hidden fixed form flex-col items-center w-full'>";
                    echo "<form
                    method='POST' 
                    action='../../../../Models/enrutador.php?c=peticionComp&a=añadirComp&ID=".$dato["IDComp"]."'
                    class='flex items-center w-full h-full'>";
                    echo "<input type='text' hidden name='IDComp' value=".$dato["IDComp"]." >";
                    echo "<input type='text' name='CI' value=".$dato["CI"]." >";
                    echo "<input type='text' name='name' value=".$dato["name"]." >";
                    echo "<input type='text' name='apell' value=".$dato["apell"]." >";
                    echo "<input type='text' name='Fed' value=".$dato["Fed"]." >";
                    echo "<input type='date' name='fnac' value=".$dato["fnac"]." >";
                    echo "<input type='text' name='sexo' value=".$dato["sexo"]." >";
                    echo "<input type='submit' value='guardar'>";
                    echo "</form>";
                    echo "</section>";
                    
                    }

                    ?>
                </tbody>

            </table>
        </div>
        </div>
    </main>

    <script src="../Views/assets/js/peticionComp.js"></script>
        <!-- <script defer src="../../../assets/js/dashboard.js"></script>
        <script src="../../../components/menu.js"></script> -->
</body>

</html>