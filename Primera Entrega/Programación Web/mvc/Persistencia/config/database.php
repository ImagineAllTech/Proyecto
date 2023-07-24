<?php
	
	class Conectar {
		
		public static function conexion(){
			
			$conexion = new mysqli("127.0.0.1", "root", "", "competidores");
			return $conexion;
			
		}
	}
?>