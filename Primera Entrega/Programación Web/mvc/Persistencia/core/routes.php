<?php
	
	function cargarControlador($controlador){
		
		$nombreControlador = ucwords($controlador)."Controller";
		$archivoControlador = '../mvc/Logica/controllers/'.ucwords($controlador).'.php';
		
		if(!is_file($archivoControlador)){
			
			$archivoControlador= '../mvc/Logica/controllers/'.CONTROLADOR_PRINCIPAL.'.php';
			
		}
		require_once $archivoControlador;
		$control = new $nombreControlador();
		return $control;
	}
	
	function cargarAccion($controller, $accion, $ID = null){
		
		if(isset($accion) && method_exists($controller, $accion)){
			if($ID == null){
				$controller->$accion();
				} else {
				$controller->$accion($ID);
			}
			} else {
			$controller->ACCION_PRINCIPAL();
		}	
	}
?>