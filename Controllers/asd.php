<?php
	session_start();


// class UsuariosControlador
// {


// 	public function __construct()
// 	{
// 		require_once "modelo/UsuariosModelo.php";
// 	}


// 	public function login()
// 	{
// 		require "vista/usuarios/login.html";
// 	}

// 	public function validar()
// 	{
// 		$usuario = new Usuarios_modelo();
// 		$usuarioN = $_POST['usuarioN'];
// 		$clave = $_POST['clave'];
// 		$data["usuario"] = $usuario->get_validar($usuarioN, $clave);

// 		if ($data["usuario"]) {

// 			echo "USUARIO VALIDO ( controlador) " . var_dump($data);
// 			$_SESSION['nombre'] = $data['usuario'][0]['nombre'];
// 			$_SESSION['username'] = $data['usuario'][0]['usuarioN'];
// 			$_SESSION['rol'] = $data['usuario'][0]['idRoles'];


// 			require "vista/usuarios/home.html";
// 		} else {
// 			echo "Usuario No valido .." . var_dump($data);
// 		}


// 	}

// 	public function cerrarSesion(){

// 		session_destroy();

// 		require "vista/usuarios/login.html";
// 	}

// 	public function index()
// 	{
// 		$jugadores = new Jugadores_modelo();
// 		$data["titulo"] = "Jugadores";
// 		$data["jugadores"] = $jugadores->get_jugadores();

// 		require_once "vista/jugadores/jugadores.php";
// 	}
// }

?>