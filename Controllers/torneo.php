<?php
	
	class TorneoController {
		
		public function __construct(){
			require_once "torneoModel.php";
		}
		
		public function index(){
			
			$Torneo = new Torneo_model();
			$data["titulo"] = "Torneo";
			$data["Torneo"] = $Torneo->get_torneo();
			
			require_once "../Views/views/administrativos/torneos/torneo.php";
		}
		
		public function nuevo(){
			
			$data["titulo"] = "Torneo";
			require_once "../Views/views/administrativos/torneos/torneo_añadir.php";
		}
		
		public function crear(){
			
			$nombre = $_POST['nombre'];
			$cantJueces = $_POST['cantJueces'];
			$estado = $_POST['estado'];
			$fecha = $_POST['fecha'];
			$genero = $_POST['genero'];

			$Torneos = new Torneo_model();
			$Torneos->insertar($nombre, $cantJueces, $estado, $fecha, $genero);
			$data["titulo"] = "Competidores";
			$this->index();

		}
		
		public function modificar($ID){
			
			$Torneos = new Torneo_model();
			
			$data["ID"] = $ID;
			$data["Torneo"] = $Torneos->get_torneo($ID);
			$data["titulo"] = "Torneo";
			require_once "../../../../Views/views/administrativos/torneos/torneo.php";
		}
		
		public function actualizar(){

			$ID = $_POST['ID'];
			$nombre = $_POST['nombre'];
			$cantJueces = $_POST['cantJueces'];
			$estado = $_POST['estado'];
			$fecha = $_POST['fecha'];
			$genero = $_POST['genero'];

			$Torneo = new Torneo_model();
			$Torneo->modificar($ID, $nombre, $cantJueces, $estado, $fecha, $genero);
			$data["titulo"] = "CompetCompetidoressidores";
			$this->index();
		}
		
		public function eliminar($ID){
			
			$Torneo = new Torneo_model();
			$Torneo->eliminar($ID);
			$data["titulo"] = "Torneo";
			$this->index();
		}	
	}
