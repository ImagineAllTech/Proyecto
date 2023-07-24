<?php

	require_once "Persistencia/config/config.php";
	require_once "Persistencia/core/routes.php";
	require_once "Persistencia/config/database.php";
	require_once "Logica/controllers/Competidores.php";
	
	if(isset($_GET['c'])){
		
		$controlador = cargarControlador($_GET['c']);
		
		if(isset($_GET['a'])){
			if(isset($_GET['ID'])){
				cargarAccion($controlador, $_GET['a'], $_GET['ID']);
				} else {
				cargarAccion($controlador, $_GET['a']);
			}
			} else {
			cargarAccion($controlador, ACCION_PRINCIPAL);
		}
		
		} else {
		
		$controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
		$accionTmp = ACCION_PRINCIPAL;
		$controlador->$accionTmp();
	}
?>