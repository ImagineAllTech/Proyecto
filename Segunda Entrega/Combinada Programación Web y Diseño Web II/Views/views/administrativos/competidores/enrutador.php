<?php

require_once "../../../../Models/config/config.php";
require_once "../../../../Models/core/routes.php";
require_once "../../../../Models/config/database.php";
require_once "../../../../Controllers/competidores.php";

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