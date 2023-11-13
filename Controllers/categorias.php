<?php
	
	class CategoriaController {
		
		public function __construct(){
			require_once "categoriasModel.php";
			require_once "torneoModel.php";
		}
		
		public function index(){
			
			$categ = $_GET["categoria"];
			$ID = $_GET["IDT"];


			$data["titulo"] = "Categoria";
			$data["categ"] = $categ;
			$data["IDT"] = $ID;

			$Categoria = new Categorias_model();
			$data["Categoria"] = $Categoria->get_categoria();
			
			require_once "../Views/views/administrativos/torneos/categorias/categoria.php";
		}

		public function verLlaves($ID){
			
			$categ = $_GET["categoria"];
			$ID = $_GET["IDT"];


			$data["titulo"] = "Categoria";
			$data["categ"] = $categ;
			$data["IDT"] = $ID;

			$Categoria = new Categorias_model();
			$data["Categoria"] = $Categoria->get_categoria();
			
			require_once "../Views/views/administrativos/torneos/categorias/categoria.php";
		}

		
		public function nuevo(){
			
			$data["titulo"] = "Categorias";
			require_once "../Views/views/administrativos/competidores/competidores_nuevo.php";
		}

		public function verGrupo($ID) {
			$categoriasModel = new Categorias_model();
		
			// Obtener datos de los grupos
			$grupos = $categoriasModel->obtenerGrupoPorTorneoID($ID);
		
			if ($grupos['grupos1'] || $grupos['grupos2']) {
				// Manipular los datos si es necesario
				$datosGrupo1 = $grupos['grupos1'];
				$datosGrupo2 = $grupos['grupos2'];
		
				// Hacer otras operaciones o manipulaciones según sea necesario
		
				// Asignar los datos a variables
				$data["IDCat"] = $ID;
				$data["grupos1"] = $datosGrupo1;
				$data["grupos2"] = $datosGrupo2;
		
				// Otros datos necesarios
				$data["titulo"] = "Grupos";
		
				// Cargar la vista
				require_once "../Views/views/administrativos/torneos/grupos/grupo.php";
			} else {
				echo "No se encontraron datos de grupos para este torneo";
			}
		}

		public function generarLlaves($ID){
			// Obtengo la IDCat y de ahi obtengo las IDG y la cantidad de competidores
			$categoriasModel = new Categorias_model();

			$datosLlaves = $categoriasModel->generarLlaves($ID);

			// Organizar los datos por IDG
			
			$llavesPorIDG = [];
			$coloresLlaves = [];
			
			foreach ($datosLlaves as $llave) {
				$llavesPorIDG[$llave['IDG']][] = $llave;
				$coloresLlaves[] = $llave['Color'];
			}

			// Pasar los datos organizados a la vista
			$data['llavesPorIDG'] = $llavesPorIDG;
			$data['coloresLlaves'] = $coloresLlaves;
			$data["titulo"] = "Llaves";
			
			// Cargar la vista
			require_once "../Views/views/administrativos/torneos/grupos/llaves.php";
		}

		public function rondas(){

		}


		
		// public function modificar($ID){
			
		// 	$Competidores = new Competidores_model();
			
		// 	$data["ID"] = $ID;
		// 	$data["Competidores"] = $Competidores->get_competidores($ID);
		// 	$data["titulo"] = "Competidores";
		// 	require_once "../../../../Views/views/administrativos/competidores/competidores_modifica.php";
		// }
		
		// public function actualizar(){

		// 	$ID = $_POST['ID'];
		// 	$CI = $_POST['CI'];
		// 	$Nombre = $_POST['Nombre'];
		// 	$Apellido = $_POST['Apellido'];
		// 	$Fnac = $_POST['Fnac'];
		// 	$Sexo = $_POST['Sexo'];
		// 	$Escuela = $_POST['Escuela'];
		// 	$Dojo = $_POST['Dojo'];

		// 	$Competidores = new Competidores_model();
		// 	$Competidores->modificar($ID, $CI, $Nombre, $Apellido, $Fnac, $Sexo, $Escuela, $Dojo);
		// 	$data["titulo"] = "CompetCompetidoressidores";
		// 	$this->index();
		// }
	}

?>