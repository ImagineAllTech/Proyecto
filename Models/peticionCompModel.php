<?php
	
	class peticionComp_model {
		
		private $db;
		private $peticionComp;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->peticionComp = array();
		}
		
		public function get_peticionComp($IDComp = null)
{
    $sql = "SELECT * FROM peticioncompetidor";

    // Si se proporciona un ID, ajusta la consulta para obtener un competidor específico
    if ($IDComp !== null) {
        $sql .= " WHERE ID='$IDComp' LIMIT 1";
    }

    $resultado = $this->db->query($sql);

    if ($IDComp !== null) {
        // Si se proporcionó un ID, devolver el resultado directamente
        return $resultado->fetch_assoc();
    } else {
        // Si no se proporcionó un ID, obtener todos los competidores
        $peticionComp = array();
        while ($row = $resultado->fetch_assoc()) {
            $peticionComp[] = $row;
        }
        return $peticionComp;
    }
}
		
		public function insertar($CIEnc, $nameEnc, $apellEnc, $Fed, $CI, $name, $apell, $fnac, $sexo){
			
			$exist = $this->db->query("SELECT INTO peticionCompetidor WHERE CI = '$CI'");

			$CI = $_POST["CI"];

        	if ($datos = $exist->fetch_object()) {
            	$_SESSION["CI"] = $datos->CI;

				echo '
				<div class="w-full flex">
					<div class="w-4/12 text-2xl m-auto flex items-center justify-center h-10 bg-red-300 border border-red-400 font-semibold text-red-900 rounded-md">
                		<h3 class="text-center w-full">La cedula ya esta registrada</h3>
            		</div>
				</div>';

				
			}else{
				$resultado = $this->db->query("INSERT INTO peticionCompetidor (CIEnc, nameEnc, apellEnc, Fed, CI, name, apell, fnac, sexo) VALUES ('$CIEnc', '$nameEnc', '$apellEnc', '$Fed', '$CI', '$name', '$apell', '$fnac', '$sexo')");
			}
		}

		public function añadirComp($Fed, $CI, $name, $apell, $fnac, $sexo){
			
			$resultado = $this->db->query("INSERT INTO Competidor (CI, Nombre, Apellido, Fnac, Sexo, Escuela, Dojo) VALUES ('$CI', '$name', '$apell', '$fnac', '$sexo', '$Fed', '$Fed')");		
		}
		
		
		public function eliminar($ID){
			
			$resultado = $this->db->query("DELETE FROM peticionCompetidor WHERE IDComp = '$ID'");
			
		}
		
	}
?>