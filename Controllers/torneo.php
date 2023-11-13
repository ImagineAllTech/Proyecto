<?php
	
	class TorneoController {
		
		public function __construct(){
			require_once "torneoModel.php";
			require_once "categoriasModel.php";
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
		
		// Funcion para crear un torneo
		public function crear(){
			
			$nombre = $_POST['nombre'];
			$cantJueces = $_POST['cantJueces'];
			$estado = $_POST['estado'];
			$fecha = $_POST['fecha'];
			$genero = $_POST['genero'];

			// Crear Torneo
			$Torneos = new Torneo_model();
			$Torneos->insertar($nombre, $cantJueces, $estado, $fecha, $genero);
			$data["titulo"] = "Competidores";
			$this->index();
		}

		// Funcion para eliminar un torneo 
		public function eliminar($ID){
			
			$Torneo = new Torneo_model();
			$Torneo->eliminar($ID);
			$data["titulo"] = "Torneo";
			$this->index();
		}	


		public function empezarTorneo($ID){
			$torneoModel = new Torneo_model();

			$torneo = $torneoModel->iniciarTorneo($ID);
			$data["titulo"] = "Torneo";
        }

		// Funcion para ver las categorias dependiendo la id del torneo
		public function verCats($ID) {
			$categoriasModel = new Categorias_model();
		
			$categorias = $categoriasModel->obtenerCategoriaPorTorneoID($ID);
		
			if ($categorias) {
		
				$data["IDT"] = $ID;
				$data["ID"] = isset($categorias['ID']) ? $categorias['ID'] : null;
				$data["nombreCat"] = isset($categorias['nombreCat']) ? $categorias['nombreCat'] : null;
				$data["Categorias"] = $categorias;
		
				$data["titulo"] = "Categorias";
				require_once "../Views/views/administrativos/torneos/categorias/categoria.php";
			} else {
				echo "La categoría no fue encontrada";
			}
		}

		// Añadir competidores a un torneo
		public function añadirComp($ID){
			
			$CI = $_POST["CI"];
			
			$Competidor = new Torneo_model();
			$Competidor->añadirComp($ID, $CI);
			$data["titulo"] = "Competidores";
			$this->index();
		}

		public function eliminarComp($ID){
			
			$IDT = new Torneo_model();
			$IDT->eliminarComp($ID);
			$data["titulo"] = "Torneo";
			$this->index();
		}	
	}
	
