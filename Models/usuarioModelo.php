<?php

class Usuarios_model
{

	private $db;
	private $userValidado;



	public function __construct()
	{
		$this->db = Conectar::conexion();
		$this->userValidado = array();
	}

	public function get_validar($usuario, $contraseña) {
        $sql = "SELECT * FROM usuario WHERE Nombre='$usuario' AND Contraseña='$contraseña'";
        $resultado = $this->db->query($sql);
    
        if ($resultado->num_rows == 1) {
    
            $datos = $resultado->fetch_assoc();
            return $datos; // Devuelve los datos del usuario
        } else {
            return false;
        }
    }
    


	}