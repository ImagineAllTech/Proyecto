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

		// Contador de competidores
		$result = $this->db->query("SELECT COUNT(CI) as count FROM Forma WHERE IDT = '$ID'");
		if ($result) {
			$row = $result->fetch_assoc();
			$cantCompetidores = $row['count'];
		}

		// Compruebo si el competidor esta en la tabla de competidor
		if ($datos = $exist->fetch_object()) {
			$_SESSION["CI"] = $datos->CI;
			
			$existCI = $this->db->query("SELECT CI FROM Forma WHERE CI = '$CI'");
			if($datos = $exist->fetch_object()){
				$_SESSION["CI"] = $datos->CI;

				$existG = $this->db->query("SELECT COUNT(IDG) as count FROM Grupo WHERE IDT = '$ID'");
				$count = $existG->fetch_object()->count;

				if($count == 0){
					$crearGrupo = $this->db->query("INSERT INTO Grupo (IDT) VALUES('$ID')");
					$idGrupo = $this->db->insert_id;

					$resultado = $this->db->query("INSERT INTO Forma (IDT, CI, IDG) VALUES('$ID', '$CI', '$idGrupo')");

				} else if($count == 1){

					if($cantCompetidores < 4){
						$idGrupoQuery = $this->db->query("SELECT IDG FROM grupo WHERE IDT = '$ID'");
						$idGrupoObj = $idGrupoQuery->fetch_object();
						$idGrupo = $idGrupoObj->IDG;
						$resultado = $this->db->query("INSERT INTO Forma (IDT, CI, IDG) VALUES('$ID', '$CI', '$idGrupo')");
					
					} else{
						$crearGrupo = $this->db->query("INSERT INTO Grupo (IDT) VALUES('$ID')");
						$idGrupo = $this->db->insert_id;

						$resultado = $this->db->query("INSERT INTO Forma (IDT, CI, IDG) VALUES('$ID', '$CI', '$idGrupo')");
					}
				

				} else if ($count == 2) {
					// Obtener grupos
					$idGrupo1Result = $this->db->query("SELECT IDG FROM Grupo WHERE IDT = '$ID' LIMIT 1");
					$idGrupo1Obj = $idGrupo1Result->fetch_object();
					$idGrupo1 = $idGrupo1Obj->IDG;

					$idGrupo2Result = $this->db->query("SELECT IDG FROM Grupo WHERE IDT = '$ID' ORDER BY IDG DESC LIMIT 1");
					$idGrupo2Obj = $idGrupo2Result->fetch_object();
					$idGrupo2 = $idGrupo2Obj->IDG;

					// Obtener la cantidad de competidores en cada grupo
					$competidoresGrupo1 = $this->db->query("SELECT COUNT(*) as count FROM Forma WHERE IDG = '$idGrupo1'")->fetch_object()->count;
					$competidoresGrupo2 = $this->db->query("SELECT COUNT(*) as count FROM Forma WHERE IDG = '$idGrupo2'")->fetch_object()->count;

					// Comparar las cantidades y determinar en cuál grupo agregar al competidor
					if ($competidoresGrupo1 < $competidoresGrupo2) {
						$idGrupo = $idGrupo1;
					} elseif ($competidoresGrupo2 < $competidoresGrupo1) {
						$idGrupo = $idGrupo2;
					} else {
						// Si ambos grupos tienen la misma cantidad, elige uno al azar
						$idGrupo = ($cantCompetidores % 2 == 0) ? $idGrupo1 : $idGrupo2;
					}
				
					// Agregar al competidor al grupo seleccionado
					$resultado = $this->db->query("INSERT INTO Forma (IDT, CI, IDG) VALUES('$ID', '$CI', '$idGrupo')");
				
					

				} else {
					echo "Hay un problema con los grupos";
				}
			
				$this->db->query("UPDATE Categoria SET cantCompetidores = '$cantCompetidores' WHERE IDT = '$ID' AND nombreCat = '$categoria'");
			
			} else {
				// Si el competidor no existe en la tabla de Competidores
				echo '
					<div class="w-full flex">
						<div class="w-4/12 text-2xl m-auto flex items-center justify-center h-10 bg-red-300 border border-red-400 font-semibold text-red-900 rounded-md">
							<h3 class="text-center w-full">El competidor ya esta registrado en un torneo</h3>
						</div>
					</div>
				';

			}
		} else {
			// Si el competidor ya esta en un torneo
			echo '
			<div class="w-full flex">
				<div class="w-4/12 text-2xl m-auto flex items-center justify-center h-10 bg-red-300 border border-red-400 font-semibold text-red-900 rounded-md">
					<h3 class="text-center w-full">El competidor ya esta en un torneo</h3>
				</div>
			</div>
			';
		}
	}

}
?>