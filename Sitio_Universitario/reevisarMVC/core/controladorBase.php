<?php
class ControladorBase{

	public function_construct() {
		require_once 'EntidadBase.php';
		require_once 'ModelosBase.php';

		//INCLUIR TODOS LOS MODELOS

		foreach ($glob ("model /*.php") as $file) {
			require_once$file;
		}
	}
	public function view ($vista, $datos){
		foreach ($datos as $id_assoc => $value) {
			${$idd_assoc}=$valor;
		}
	

	require_once'core/AyudaVistas.php';
	$helper=new AyudaVistas();

	require_once 'view/'. $vista . 'view.php';
	} 

	public function redirect($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
	header("location:index.php?controller=".$controlador . "&actioon=".$accion)
	}


}


 ?>