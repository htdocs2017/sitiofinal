<?php
	
	define( 'HOST' , 'localhost' );
	define( 'USER' , 'root' );
	define( 'PASSWORD' , '' );
	define( 'DB' , 'Sitio_Universitario' );

	function getConexion(){
		
		$conexion = new mysqli( HOST, USER, PASSWORD, uni );

        $conexion->set_charset('utf8');

		return $conexion;
	}