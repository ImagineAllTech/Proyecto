<?php

class UsuarioController{

    public function __construct(){
        require_once "../Models/usuarioModelo.php";
    }

    public function login()
{
    require "../Views/views/login/login.php";
}

public function iniciojuez($user){

    require "../Views/views/jueces/jueces.php";
}

public function inicioAdmin($user){

    require "../Views/views/administrativos/dashboard/dashboard.php";
}

public function cerrarSesion(){
    session_start();
    session_destroy();

    require "../Views/views/login/login.php";
}

public function validar() {
    if (empty($_POST["username"]) || empty($_POST["pass"])) {
        echo '<div class="error">Campos vacíos</div>';
        require_once "../Views/views/login/login.php";
    } else {
        session_start();
        $usuario = new Usuarios_model();
        $user = $_POST['username'];
        $password = $_POST['pass'];

        $data = $usuario->get_validar($user, $password);

        if ($data) {
            $Rol = $data["Rol"]; // Obtén el valor del rol de $data

            switch ($Rol) {
                case 'Juez':
                    $this->iniciojuez($user);
                    break;
                case 'Administrador':
                    $this->inicioAdmin($user);
                    break;
                default:
                    echo "Tipo de usuario no válido.";
                    $this->login();
            }
        } else {
            echo '<div class="error">Usuario o contraseña incorrectos</div>';
            require_once "../Views/views/login/login.php";
        }
    }
}

    

}

?>