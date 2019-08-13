<?php 
//FUNCIONES PARA EL CONTROL FRONTAL

function cargaControlador($controller){
	$controlador=ucwords($controller) . 'Controller';
	straFilterController='controller/' . controlador . '.php';


	if(!is_file($straFilterController)){
		$controllerObj='controller/' . ucword(CONTROLADOR_DEFECTO) . 'Controller.php';
	}

	require_once $straFilterController;
	$controllerObj=new $controlador();
	return $controllerObj;
}

function cargarAccion($controllerObj){
	$accion=$accion;
	$controllerObj->$accion();
}

functionlanzarAccion($controllerObj){
	if(isset($$_POST["action"]) && method_exists($controllerObj, $_POST["action"]));{

	}else{
		cargarAccion($controllerObj,ACCION_DEFECTO);
	}	
}
 ?>