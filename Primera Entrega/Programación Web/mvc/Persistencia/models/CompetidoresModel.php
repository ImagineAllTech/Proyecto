<?php
	
	class Competidores_model {
		
		private $db;
		private $Competidores;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->Competidores = array();
		}
		
		public function get_Competidores()
		{
			$sql = "SELECT * FROM Competidores";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->Competidores[] = $row;
			}
			return $this->Competidores;
		}
		
		public function insertar($CI, $Nombre, $Apellido, $Fnac, $Altura, $Peso, $Sexo, $Escuela, $Dojo){
			
			$resultado = $this->db->query("INSERT INTO Competidores (CI, Nombre, Apellido, Fnac, Altura, Peso, Sexo, Escuela, Dojo) VALUES ('$CI', '$Nombre', '$Apellido', '$Fnac', '$Altura', '$Peso', '$Sexo', '$Escuela', '$Dojo')");
			
		}
		
		public function modificar($ID, $CI, $Nombre, $Apellido, $Fnac, $Altura, $Peso, $Sexo, $Escuela, $Dojo){
			
			$resultado = $this->db->query("UPDATE Competidores SET CI='$CI', Nombre='$Nombre', Apellido='$Apellido', Fnac='$Fnac', Altura='$Altura', Sexo='$Sexo', Escuela='$Escuela', Dojo='$Dojo'  WHERE ID = '$ID'");			
		}
		
		public function eliminar($ID){
			
			$resultado = $this->db->query("DELETE FROM Competidores WHERE ID = '$ID'");
			
		}
		
		public function get_competidor($ID)
		{
			$sql = "SELECT * FROM Competidores WHERE ID='$ID' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>