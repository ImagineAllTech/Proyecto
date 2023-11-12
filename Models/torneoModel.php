<?php

class Torneo_model
{

	private $db;
	private $Torneo;

	public function __construct()
	{
		$this->db = Conectar::conexion();
		$this->Torneo = array();
	}

	public function get_torneo($ID = null)
	{
		$sql = "SELECT * FROM Torneo";

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
			$torneos = array();
			while ($row = $resultado->fetch_assoc()) {
				$torneos[] = $row;
			}
			return $torneos;
		}
	}

	public function insertar($nombre, $cantJueces, $estado, $fecha, $genero)
	{

		$exist = $this->db->query("SELECT nombre FROM Torneo WHERE nombre='$nombre'");

		$nombre = $_POST["nombre"];

		if ($datos = $exist->fetch_object()) {
			$_SESSION["nombre"] = $datos->nombre;

		echo '
        	<div class="w-full flex">
            	<div class="w-4/12 text-2xl m-auto flex items-center justify-center h-10 bg-red-300 border border-red-400 font-semibold text-red-900 rounded-md">
                	<h3 class="text-center w-full">El nombre ya esta registrado</h3>
            	</div>
        	</div>
		';

		} else {
			$resultado = $this->db->query("INSERT INTO Torneo (nombre, cantJueces, estado, fecha, genero) VALUES ('$nombre', '$cantJueces', '$estado', '$fecha', '$genero')");
			$idTorneo = $this->db->insert_id; // Obtener el ID del torneo recién creado

			// Crear las categorías relacionadas con el torneo
			$categorias = ['12-13', '14-15', '16-17', '+18'];
			foreach ($categorias as $categoria) {
				$res = $this->db->query("INSERT INTO categoria (IDT, nombreCat) VALUES ('$idTorneo', '$categoria')");
				$resul = $this->db->query("INSERT INTO grupo (IDT, nombreCat) VALUES ('$idTorneo', '$categoria')");

			}


		}
	}


	// public function modificar($ID, $nombre, $cantJueces, $estado, $fecha, $genero)
	// {

	// 	$resultado = $this->db->query("UPDATE Torneo SET nombre='$nombre', cantJueces='$cantJueces', estado='$estado', fehca='$fecha', genero='$genero' WHERE IDT = '$ID'");
	// }

	public function eliminar($ID)
	{

		$resultado = $this->db->query("DELETE FROM Categoria WHERE IDT = '$ID'");
		$resultado = $this->db->query("DELETE FROM Torneo WHERE IDT = '$ID'");

	}

	public function añadirComp($ID, $CI, $categoria) {
		$exist = $this->db->query("SELECT CI FROM Competidor WHERE CI = '$CI'");
	
		// Compruebo si el competidor esta en la tabla de competidor
		if ($datos = $exist->fetch_object()) {
			$_SESSION["CI"] = $datos->CI;

			$existG = $this->db->query("SELECT COUNT(*) as count FROM Forma WHERE IDT = '$ID'");
			$count = $existG->fetch_object()->count;

			if($count == 0){
    			// No existe ningún grupo con esa IDT
				$crearGrupo = $this->db->query("INSERT INTO Grupo ()");

				$resultado = $this->db->query("INSERT INTO Forma (ID, CI) VALUES('$ID', '$CI')");



			} else if($count == 1){
    		// Existe exactamente un grupo con esa IDT
			} else if($count == 2){
    		// Existen exactamente dos grupos con esa IDT
			} else {
    		// Existen más de dos grupos con esa IDT
			}

			
			
			$resultado = $this->db->query("INSERT INTO Forma (ID, CI) VALUES('$ID', '$CI')");
	
			$this->db->query("UPDATE Categoria SET cantCompetidores = cantCompetidores + 1 WHERE IDT = '$ID' AND nombreCat = '$categoria'");
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		} else {
			// Si el competidor no existe en la tabla de Competidores
			echo '
			<div class="w-full flex">
				<div class="w-4/12 text-2xl m-auto flex items-center justify-center h-10 bg-red-300 border border-red-400 font-semibold text-red-900 rounded-md">
					<h3 class="text-center w-full">El competidor no existe, añade uno existente</h3>
				</div>
			</div>
			';
		}
	}

}
?>