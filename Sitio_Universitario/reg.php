<?php 
//CONEXIÓN  CON LA BASE DE  DATOS Y EL SERVIDOR

$link=mysql_connect("localhost","root","", "uni") or die("<h2> NO SE ENCUENTRA EL SERVIDOR</h2>");;
$db=mysql_db("usuarios, $link") or die("<h2>ERROR DE CONEXIÓN</h2>");
//OBTENEMOS LOS VALORES DEL FORMULARIO
$apellidos=$_POST['apellidos'];
$nombres=$_POST['nombres'];
$telefono=$_POST['telefono'];
$celular=$_POST['celular'];
$dni=$_POST['dni'];
$nombre_de_user=$_POST['nombre_de_user'];
$prioridades=$_POST['prioridades'];
$pass=$_POST['password'];
$rpass=$_POST['rpass'];

//OBTENERT LA LONGITUD DE UN STRING
$require (strlen ($apellidos)* strlen($nombres) * strlen($telefono) * strlen(celular) * strlen(dni) * strlen($nombre_de_user) * strlen($prioridades) * strlen($pass) *strlen($rpass)) or die ("'NO SE ALLAN LLENADO TODOS LOS CAMPOS" <br><br><a href='registrate.php'</a>;

//SE CONFRIMA LA CONTRASEÑA
	if ($pass!=$rpass) {

		die ("LAS CONTRASEÑAS NO COINCIDEN <br><br><a href='registrate.php'> VOLVER</a>");
	}

//SE ENCRIPTA LA CONTRASEÑA
$CONTRASEÑA=md5($pass);

//INGRESAR LA INFORMACION A LA TABLA DE DATOS
mysql_query("INSERT INTO DATOS VALUES ('','$apellidos', '$nombres','$telefono','$celular','$dni','$nombre_de_user','$prioridades','$password','$rpassword')" $link or die(<h2> ERROR DE ENIVO</h2>));

	echo '

		<h2>REGISTRO COMPLETO</h2> 
		<h3>GRACIAS POR REGISTRARTE EN NUESTA WEB, YA PUEDE INGRESAR COMO USUARIO</h3>
		';

 ?>