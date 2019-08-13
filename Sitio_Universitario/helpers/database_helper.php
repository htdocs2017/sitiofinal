<?php
	
	define( 'HOST' , 'localhost' );
	define( 'USER' , 'root' );
	define( 'PASSWORD' , '' );
	define( 'uni' , 'Sitio_Universitario' );

	function getConexion(){
		
		$conexion = new mysqli( HOST, USER, PASSWORD, uni );

        $conexion->set_charset('utf8');

		return $conexion;
	}