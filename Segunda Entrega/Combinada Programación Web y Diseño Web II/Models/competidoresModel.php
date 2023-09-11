<?php
	
	class Competidores_model {
		
		private $db;
		private $Competidor;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->Competidor = array();
		}
		
		public function get_competidores($ID = null)
{
    $sql = "SELECT * FROM Competidor";

    // Si se proporciona un ID, ajusta la consulta para obtener un competidor específico
    if ($ID !== null) {
        $sql .= " WHERE ID='$ID' LIMIT 1";
    }

    $resultado = $this->db->query($sql);

    if ($ID !== null) {
        // Si se proporcionó un ID, devolver el resultado directamente
        return $resultado->fetch_assoc();
    } else {
        // Si no se proporcionó un ID, obtener todos los competidores
        $competidores = array();
        while ($row = $resultado->fetch_assoc()) {
            $competidores[] = $row;
        }
        return $competidores;
    }
}
		
		public function insertar($CI, $Nombre, $Apellido, $Fnac, $Sexo, $Escuela, $Dojo){
			
			$exist = $this->db->query("SELECT CI FROM Competidor WHERE CI='$CI'");

			$CI = $_POST["CI"];

        	if ($datos = $exist->fetch_object()) {
            	$_SESSION["CI"] = $datos->CI;

				echo '<div class="w-full flex items-center justify-center h-10 bg-red-300 border border-red-400 font-semibold text-red-900 rounded-md">
                	<h3 class="text-center w-full">Campos vacíos</h3>
            	</div>';

				
			}else{
				$resultado = $this->db->query("INSERT INTO Competidor (CI, Nombre, Apellido, Fnac, Sexo, Escuela, Dojo) VALUES ('$CI', '$Nombre', '$Apellido', '$Fnac', '$Sexo', '$Escuela', '$Dojo')");
			}
		}

		public function modificar($ID, $CI, $Nombre, $Apellido, $Fnac, $Sexo, $Escuela, $Dojo){
			
			$resultado = $this->db->query("UPDATE Competidor SET CI='$CI', Nombre='$Nombre', Apellido='$Apellido', Fnac='$Fnac', Sexo='$Sexo', Escuela='$Escuela', Dojo='$Dojo'  WHERE ID = '$ID'");			
		}
		
		public function eliminar($ID){
			
			$resultado = $this->db->query("DELETE FROM Competidor WHERE ID = '$ID'");
			
		}
		
	}
?>