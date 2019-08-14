<?php

$conexion= mysqli_connect('localhost', 'root','', 'uni');

$nombre_de_user = $_POST['nombre_de_user'];
$description = $_POST['description'];
$archivos = $_POST['archivos'];
$mensaje = $_POST['mensaje'];


$sqlTabla1 = "INSERT INTO datos (nombre_de_user, description, archivos)
							VALUES ('$nombre_de_user','$description','$archivos')";
$ejecutado = mysqli_query($conexion,$sqlTabla1);

if (isset($ejecutado)) {
	
}
else{
	echo "NO SE ENVIO";
}


?>

<?php require('contacto.php');



