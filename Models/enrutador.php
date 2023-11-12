<?php

require_once "config/config.php";
require_once "core/routes.php";
require_once "config/database.php";
require_once "../Controllers/competidores.php";
require_once "../Controllers/peticionComp.php";
require_once "../Controllers/torneo.php";
require_once "../Controllers/categorias.php";

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