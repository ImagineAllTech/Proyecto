<?php

session_start();

$conexion = Conectar::conexion();

if (!empty($_POST["ingresar"])) {
    if (empty($_POST["username"]) || empty($_POST["pass"])) {
        echo '<div class="w-full flex items-center justify-center h-10 bg-red-300 border border-red-400 font-semibold text-red-900 rounded-md">
                <h3 class="text-center w-full">Campos vacíos</h3>
            </div>';
    } else {
        $usuario = $_POST["username"];
        $contraseña = $_POST["pass"];

        $sql = $conexion->query("SELECT * FROM usuario WHERE Nombre='$usuario' AND Contraseña='$contraseña'");
        if ($datos = $sql->fetch_object()) {
            $_SESSION["id"] = $datos->ID;
            $_SESSION["usuario"] = $datos->Usuario;

            if ($datos->Rol == "Administrador") {
                header("location: ../../../../Views/views/administrativos/dashboard/dashboard.php");
            } elseif ($datos->Rol == "Juez") {
                header("location: ../../../../Views/views/jueces/jueces.php");
            } else {
                echo '<div class="w-full flex items-center justify-center h-10 bg-red-300 border border-red-400 font-semibold text-red-900 rounded-md">
                        <h3 class="text-center w-full">Rol no válido</h3>
                    </div>';
            }
        } else {
            echo '<div class="w-full flex items-center justify-center h-10 bg-red-300 border border-red-400 font-semibold text-red-900 rounded-md">
                    <h3 class="text-center w-full">Usuario o contraseña incorrecto</h3>
                </div>';
        }
    }
}

?>
