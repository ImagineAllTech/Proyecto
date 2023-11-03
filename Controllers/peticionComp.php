<?php
	
	class PeticionCompController {
		
		public function __construct(){
			require_once "../Models/peticionCompModel.php";
		}
		
		public function index(){
			
			$peticionComp = new peticionComp_model();
			$data["titulo"] = "peticionComp";
			$data["peticionComp"] = $peticionComp->get_peticionComp();
			
			require_once "../Views/views/administrativos/peticionComp/peticionComp.php";
		}
		
		public function nuevo(){
			
			$data["titulo"] = "peticionComp";
			require_once "../Views/views/administrativos/peticionComp/peticionComp.php";
		}
		
		public function guarda(){
			
            $CIEnc = $_POST['CIEnc'];
			$nameEnc = $_POST['nameEnc'];
			$apellEnc = $_POST['apellEnc'];
			$Fed = $_POST['Fed'];
			$CI = $_POST['CI'];
			$name = $_POST['name'];
			$apell = $_POST['apell'];
			$fnac = $_POST['fnac'];
			$sexo = $_POST['sexo'];

			$peticionComp = new peticionComp_model();
			$peticionComp->insertar($CIEnc, $nameEnc, $apellEnc, $Fed, $CI, $name, $apell, $fnac, $sexo);
			$data["titulo"] = "peticionComp";
			$this->index();
		}
		
		public function añadirComp($IDComp){

			$Fed = $_POST['Fed'];
			$CI = $_POST['CI'];
			$name = $_POST['name'];
			$apell = $_POST['apell'];
			$fnac = $_POST['fnac'];
			$sexo = $_POST['sexo'];

			$Competidor = new peticionComp_model();
			$Competidor->añadirComp($Fed, $CI, $name, $apell, $fnac, $sexo);
			$data["titulo"] = "peticionCompet";

			$peticionComp = new peticionComp_model();
			$peticionComp->eliminar($IDComp);
			$this->index();
		}
		
		public function eliminar($ID){
			
			$peticionComp = new peticionComp_model();
			$peticionComp->eliminar($ID);
			$data["titulo"] = "peticionComp";
			$this->index();
		}	
	}
