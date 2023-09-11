<?php
    class Conectar {
		
		public static function conexion(){
			
			$conexion=new mysqli("localhost", "root", "", "imaginealltech", "3306");
            $conexion->set_charset("utf8");
			return $conexion;
			
		}
	}
?>