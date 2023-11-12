<?php
	
	class CategoriaController {
		
		public function __construct(){
			require_once "categoriasModel.php";
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

		
		public function nuevo(){
			
			$data["titulo"] = "Categorias";
			require_once "../Views/views/administrativos/competidores/competidores_nuevo.php";
		}

		public function generarLlaves(){

		}

		public function rondas(){

		}


		
		// public function guarda(){
			
		// 	$CI = $_POST['CI'];
		// 	$Nombre = $_POST['Nombre'];
		// 	$Apellido = $_POST['Apellido'];
		// 	$Fnac = $_POST['Fnac'];
		// 	$Sexo = $_POST['Sexo'];
		// 	$Escuela = $_POST['Escuela'];
		// 	$Dojo = $_POST['Dojo'];

		// 	$Competidores = new Competidores_model();
		// 	$Competidores->insertar($CI, $Nombre, $Apellido, $Fnac, $Sexo, $Escuela, $Dojo);
		// 	$data["titulo"] = "Competidores";
		// 	$this->index();

		// }
		
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
		
		// public function eliminar($ID){
			
		// 	$Competidores = new Competidores_model();
		// 	$Competidores->eliminar($ID);
		// 	$data["titulo"] = "Competidores";
		// 	$this->index();
		// }	
	}

?>