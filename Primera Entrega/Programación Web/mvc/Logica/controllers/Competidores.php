<?php
	
	class CompetidoresController {
		
		public function __construct(){
			require_once "../mvc/Persistencia/models/CompetidoresModel.php";
		}
		
		public function index(){
			
			
			$Competidores = new Competidores_model();
			$data["titulo"] = "Competidores";
			$data["Competidores"] = $Competidores->get_Competidores();
			
			require_once "../mvc/Interfaz/views/Competidores/Competidores.php";	
		}
		
		public function nuevo(){
			
			$data["titulo"] = "Competidores";
			require_once "../mvc/Interfaz/views/Competidores/Competidores_nuevo.php";
		}
		
		public function guarda(){

			
			$CI = $_POST['CI'];
			$Nombre = $_POST['Nombre'];
			$Apellido = $_POST['Apellido'];
			$Fnac = $_POST['Fnac'];
			$Altura = $_POST['Altura'];
			$Peso = $_POST['Peso'];
			$Sexo = $_POST['Sexo'];
			$Escuela = $_POST['Escuela'];
			$Dojo = $_POST['Dojo'];

			
			$Competidores = new Competidores_model();
			$Competidores->insertar($CI, $Nombre, $Apellido, $Fnac, $Altura, $Peso, $Sexo, $Escuela, $Dojo);
			$data["titulo"] = "Competidores";+
			$this->index();
		}
		
		public function modificar($ID){
			
			$Competidores = new Competidores_model();
			
			$data["ID"] = $ID;
			$data["Competidores"] = $Competidores->get_competidor($ID);
			$data["titulo"] = "Competidores";
			require_once "../mvc/Interfaz/views/Competidores/Competidores_modifica.php";
		}
		
		public function actualizar(){

			$ID = $_POST['ID'];
			$CI = $_POST['CI'];
			$Nombre = $_POST['Nombre'];
			$Apellido = $_POST['Apellido'];
			$Fnac = $_POST['Fnac'];
			$Altura = $_POST['Altura'];
			$Peso = $_POST['Peso'];
			$Sexo = $_POST['Sexo'];
			$Escuela = $_POST['Escuela'];
			$Dojo = $_POST['Dojo'];

			$Competidores = new Competidores_model();
			$Competidores->modificar($ID, $CI, $Nombre, $Apellido, $Fnac, $Altura, $Peso, $Sexo, $Escuela, $Dojo);
			$data["titulo"] = "Competidores";
			$this->index();
		}
		
		public function eliminar($ID){
			
			$Competidores = new Competidores_model();
			$Competidores->eliminar($ID);
			$data["titulo"] = "Competidores";
			$this->index();
		}	
	}
