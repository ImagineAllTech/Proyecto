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
		$sql = "SELECT * FROM torneo";

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

		$exist = $this->db->query("SELECT nombre FROM torneo WHERE nombre='$nombre'");

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
			$resultado = $this->db->query("INSERT INTO torneo (nombre, cantJueces, estado, fecha, genero) VALUES ('$nombre', '$cantJueces', '$estado', '$fecha', '$genero')");
			$idTorneo = $this->db->insert_id; // Obtener el ID del torneo recién creado

			// Crear las categorías relacionadas con el torneo
			$categorias = ['12-13', '14-15', '16-17', '+18'];
			foreach ($categorias as $categoria) {
				$res = $this->db->query("INSERT INTO categoria (IDT, nombreCat) VALUES ('$idTorneo', '$categoria')");
				$resul = $this->db->query("INSERT INTO grupo (IDT, nombreCat) VALUES ('$idTorneo', '$categoria')");

			}


		}
	}

	public function eliminar($ID)
	{

		$resultado = $this->db->query("DELETE FROM categoria WHERE IDT = '$ID'");
		$resultado = $this->db->query("DELETE FROM torneo WHERE IDT = '$ID'");

	}

	public function eliminarComp($ID)
	{
		$IDT = $this->db->query("SELECT IDT FROM forma WHERE CI = '$ID'");
		$resultado = $this->db->query("DELETE FROM forma WHERE CI = '$ID'");

		return $IDT;
	}

	public function añadirComp($ID, $CI) {
		$exist = $this->db->query("SELECT CI FROM competidor WHERE CI = '$CI'");

		// Contador de competidores
		$result = $this->db->query("SELECT COUNT(CI) as count FROM forma WHERE IDCat = '$ID'");
		if ($result) {
			$row = $result->fetch_assoc();
			$cantCompetidores = $row['count'];
		}

		// Compruebo si el competidor esta en la tabla de competidor
		if ($datos = $exist->fetch_object()) {
			$_SESSION["CI"] = $datos->CI;
			
			$existCI = $this->db->query("SELECT CI FROM forma WHERE CI = '$CI'");

			if($datos1 = $existCI->fetch_object()){
				
				// Si el competidor ya esta en un torneo
				echo '
					<div class="w-full flex">
						<div class="w-4/12 text-2xl m-auto flex items-center justify-center h-10 bg-red-300 border border-red-400 font-semibold text-red-900 rounded-md">
							<h3 class="text-center w-full">El competidor ya esta registrado en un torneo</h3>
						</div>
					</div>
				';
				
			} else {

				// $_SESSION["CI"] = $datos1->CI;

				$existG = $this->db->query("SELECT COUNT(IDG) as count FROM grupo WHERE IDCat = '$ID'");
				$count = $existG->fetch_object()->count;
				
				$IDT_query = $this->db->query("SELECT IDT FROM categoria WHERE ID = '$ID'");
				$IDT_result = $IDT_query->fetch_assoc();
				$IDT = $IDT_result['IDT'];


				if($count == 0){
					$crearGrupo = $this->db->query("INSERT INTO grupo (IDT, IDCat) VALUES('$IDT', '$ID')");
					$idGrupo = $this->db->insert_id;

					$resultado = $this->db->query("INSERT INTO forma (IDT, IDCat, CI, IDG) VALUES('$IDT', '$ID', '$CI', '$idGrupo')");

				} else if($count == 1){

					if($cantCompetidores < 3){
						$idGrupoQuery = $this->db->query("SELECT IDG FROM grupo WHERE IDCat = '$ID'");
						$idGrupoObj = $idGrupoQuery->fetch_object();
						$idGrupo = $idGrupoObj->IDG;
						$resultado = $this->db->query("INSERT INTO forma (IDT, IDCat, CI, IDG) VALUES('$IDT', '$ID', '$CI', '$idGrupo')");
					
					} else {
						// Insertar el nuevo grupo
						$crearGrupo = $this->db->query("INSERT INTO grupo (IDT, IDCat) VALUES('$IDT', '$ID')");
						$idGrupo = $this->db->insert_id;
					
						// Obtener la CI del último competidor en la IDCat actual
						$resultUltimoCompetidor = $this->db->query("SELECT CI FROM forma WHERE IDCat = '$ID' ORDER BY CI DESC LIMIT 1");
						$rowUltimoCompetidor = $resultUltimoCompetidor->fetch_assoc();
						$ultimaCI = $rowUltimoCompetidor['CI'];
					
						// Insertar el nuevo competidor en el nuevo grupo
						$resultado = $this->db->query("INSERT INTO forma (IDT, IDCat, CI, IDG) VALUES('$IDT', '$ID', '$CI', '$idGrupo')");
					
						// Actualizar el campo IDG del último competidor en la IDCat actual
						$this->db->query("UPDATE forma SET IDG = '$idGrupo' WHERE IDCat = '$ID' AND CI = '$ultimaCI'");
					}
				

				} else if ($count == 2) {
					// Obtener grupos
					$idGrupo1Result = $this->db->query("SELECT IDG FROM grupo WHERE IDCat = '$ID' LIMIT 1");
					$idGrupo1Obj = $idGrupo1Result->fetch_object();
					$idGrupo1 = $idGrupo1Obj->IDG;

					$idGrupo2Result = $this->db->query("SELECT IDG FROM grupo WHERE IDCat = '$ID' ORDER BY IDG DESC LIMIT 1");
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
					$resultado = $this->db->query("INSERT INTO forma (IDT, IDCat, CI, IDG) VALUES('$IDT' ,'$ID', '$CI', '$idGrupo')");

				} else {
					echo "Hay un problema con los grupos";
				}
			
				$this->db->query("UPDATE categoria SET cantCompetidores = '$cantCompetidores' + 1 WHERE ID = '$ID'");
			

			}
		} else {
			// Si el competidor no existe en la tabla de Competidores
			echo '
			<div class="w-full flex">
				<div class="w-4/12 text-2xl m-auto flex items-center justify-center h-10 bg-red-300 border border-red-400 font-semibold text-red-900 rounded-md">
					<h3 class="text-center w-full">El competidor no existe</h3>
				</div>
			</div>
			';
		}
	}

	public function iniciarTorneo($ID){
		$IDT = $this->db->query("SELECT IDT FROM categoria WHERE ID = '$ID'");
		$IDTorneo = $IDT->fetch_object()->ID;

		$started = $this->db->query("SELECT Estado FROM torneo WHERE IDT = '$IDTorneo'");

		if ($datos = $started->fetch_object()) {
            $_SESSION["Estado"] = $datos->Estado;

			if($datos->Estado == "Pendiente"){

				$this->db->query("UPDATE torneo SET Estado = 'En curso' WHERE IDT = '$IDTorneo'");


			}
		}
	}






}
?>