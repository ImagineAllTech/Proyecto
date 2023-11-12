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

        <button id="añadirComp" class="px-6 py-2 rounded bg-blue-700 text-white text-xl hover:bg-blue-800 mb-8">
            Añadir competidor
        </button>
        
        <div class="w-full flex items-start justify-start flex-col">

            <table class="table-auto border border-gray-800" cellpadding="6" cellspacing="0">

                <thead>
                    <tr>
                        <th class="border border-gray-800">Nombre Cat</th>
                        <th class="border border-gray-800">ID Torneo</th>
                        <th class="border border-gray-800">ID Cat</th>
                        <th class="border border-gray-800">Grupos</th>
                        <th class="border border-gray-800">Rondas</th>
                        <th class="border border-gray-800">Llaves</th>
                        <th class="border border-gray-800">Cant Comp</th>
                        <th class="border border-gray-800">Editar</th>
                    </tr>
                </thead>
                
                <tbody class="">
                    <?php foreach ($data["Categorias"] as $dato) {
                        echo "<tr>";
                        echo "<td class='text-center'>" . $dato["nombreCat"] . " años</td>";
                        echo "<td class='text-center'>" . $data["IDT"] . "</td>";
                        echo "<td class='text-center'>" . $dato["ID"] . "</td>";
                        echo "<td class='text-center'> <a class='hover:underline text-blue-600' href='../../../../Models/enrutador.php?c=categoria&a=grupos&ID='>Ver grupos</a> </td>";
                        echo "<td class='text-center'> <a class='hover:underline text-blue-600' href='../../../../Models/enrutador.php?c=categoria&a=grupos&ID='>Ver rondas</a> </td>";
                        echo "<td class='text-center'> <a class='hover:underline text-blue-600' href='../../../../Models/enrutador.php?c=categoria&a=grupos&ID='>Generar Llave</a> </td>";
                        echo "<td class='text-center'>" . $dato["cantCompetidores"] . "</td>";
                        echo "<td class='text-center text-green-800'><button id='btnModificar'>Modificar</button></td>";
                        echo "</tr>";

                    }

                    ?>
                </tbody>

            </table>
        </div>
        </div>
    </main>

    <section id="popup" class='hidden popup fixed flex flex-col items-center justify-center w-full h-full' style='background-color: rgba(0, 0, 0, 0.411);'>

        <div class='flex flex-col items-center justify-start p-6 w-4/12 bg-white h-4/6 rounded'>

            <figure class='w-full h-3/6 bg-blue-300 mb-4 flex items-center justify-center rounded-sm text-6xl text-blue-600'>
                <i class='fa-solid fa-plus'></i>
            </figure>

            <div class='texts mb-4 w-full text-center'>
                <h2 class='font-inter font-black text-4xl text-blue-950'>Añadir Competidor</h2>
            </div>
<?php
            echo '<form method="post" action="../../../../../Models/enrutador.php?c=torneo&a=añadirComp&ID='.$data["IDT"].'" class="w-full h-full flex flex-col items-center justify-between">';
?>
            <article class="w-full flex flex-col items-center justify-start">

                    <div class="w-full mb-4 flex items-center justify-start gap-2">
                        <h2 class="font-poppins font-semibold text-blue-900 text-2xl">Cedula:</h2>  
                        <input type="text"
                           class="w-full bg-transparent border-b outline-none py-2 px- text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left"
                           placeholder="Escribe la cedula aqui" name="CI"
                           pattern="\d{8}" minlength="8" maxlength="8" required>
                     </div>

                    <div class="w-full mb-4 flex items-center justify-start gap-2">
                        <h2 class="font-poppins font-semibold text-blue-900 text-2xl">Categorias:</h2>
                        <select name="categoria" class="w-full bg-transparent border-b outline-none py-2 px- text-gray-900 font-bricolage text-xl border-blue-800 origin-top-left" required>
                            <option value="12-13">12/13 años</option>
                            <option value="14-15">14/15 años</option>
                            <option value="16-17">16/17 años</option>
                            <option value="+18">Mayores</option>
                        </select>
                    </div>

                </article>
                <div class="buttons w-full h-24 font-poppins flex flex-col gap-2">
                    <input id="send" type="submit" class="w-full h-full bg-blue-500 hover:bg-blue-700 cursor-pointer rounded-md text-gray-50 text-xl">
                

                    <a id="cerrar" class="cursor-pointer grid place-content-center w-full h-full bg-gray-500 hover:bg-gray-600 rounded-md text-gray-50 text-xl">
                        Cerrar menu
                    </a>
                </div>
            </div>
        </div>
    </section>

    <script defer src="../Views/assets/js/categoria.js"></script>
    <script src="../Views/components/menu.js"></script>
</body>

</html>