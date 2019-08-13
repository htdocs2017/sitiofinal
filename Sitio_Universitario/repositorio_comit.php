<?<?php session_start(); 
/*
//PARA FORZARLO A ENTRAR SOLAMENTE LOGEADO
if( !isset($_SESSION["nombre_de_user"] )){
	header("Location: login.php"); 
}*/


/*
//ESTANDO ESTO ACTIVO PARA IGUAL ESTADO O NO LOGEAGO PERO NO SUBE LOS ARCHIVOS
if(  isset($_POST["nombre_de_user"]) &&
	 isset($_POST["description"]) && 
     isset($_POST["archivos"])) 
     
  $conexion = new mysqli("127.0.0.1","root","","uni");


  $nombre_de_user = $_POST["nombre_de_user"];
  $description = $_POST["description"];
  $archivos = $_POST["archivos"];
  
  $consulta = " INSERT INTO publicaciones_repositorio ( nombre_de_user, description, archivos) VALUES ('$nombre_de_user', '$description','$archivos')";

  echo $consulta;

  $conexion->query($consulta);


//PARA SUBIR ARCHIVOS
$formato =array('.png','.jpg','.doc','.pps');
$directorio ='archivos';

if (isset($_POST['boton'])) {
	$nombreArchivo    = $_FILES ['archivo']['name'];//NOMBRE ORIGINAL
	$nombreTmpArchivo = $_FILES ['archivo']['tmp_name'];//NOMBRE TEMPORARIO
	$ext              = substr($nombreArchivo, start($nombreArchivo, '.'));//EXTENSIÓN

	if (in_array($ext, $formatos)) {

		if (move_uploades_file($nombreTemArchivo,"archivos/$nombreArchivo")) {
			echo" Felicitaciones, el archivo $nombreArchivo fue subido exitosamente.";

		}else{
			
			echo "Ocurrio un error.";
		}
	}else{
		echo "Archivo no permitido";
	}
}*/


?> 
<!--ESTE CONTENIDO SOLO EL ACCESO ES SOLO PARA USUARIOS REGISTRADOS -->
<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="UTF-8">
		<title>REPOSITORIO COMIT</title>
		<link rel="stylesheet" type="text/css" href="css/estilos_campus.css">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Source code generated using layoutit.com">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	</head>

	<body>

		<nav><!--INICIO DE BARRA DE NAVEGACIÓN-->
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-dark bg-dark">
							 
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="navbar-toggler-icon"></span>
							</button> 
								<a class="navbar-brand" href="../Sitio_Universitario/index.php">
									<img class="logo_institucional" src="images/velerosf.png" alt="Logo San Fernando">
								</a>

							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="navbar-nav">
									<li class="nav-item active">
									 	<a class="nav-link" href="../Sitio_Universitario/campus.php">CAMPUS <span class="sr-only">(current)</span></a>
									</li>

									<li class="nav-item">
										 <a class="nav-link" href="#">BLOK</a>
									</li>

									<li class="nav-item">
									 	<a class="nav-link" href="#">CHAT</a>
									</li>
								</ul>
								
							</div>
						</nav>
					</div>
				</div>
			</div>
		</nav><!--FIN BARRA DE NAVEGACIÓN-->


		<article>
			<p>
				BIENVENIDOS AL  REPOSITORIO DEL CAMPUS DEL CENTRO UNIVERSITARIO MUNICIPAL SAN FERNANDO
			</p>
		</article>


		<h1>Bienvenidos al Repositorio ComIT</h1>
		

		<div class="container mt-3">
			<div class="card">
				<div class="card-header">
					Archivos existentes en el directorio
				</div>
				<div class="card-block">
					<div class="row">
					<?php
						if ($dir = opendir($directorio)){
							while ($archivo = readdir($dir)) {

								if ($archivo != '.' && $archivo != '..'){
									//este div es para darle caché y que se vea bien en todos los dispositivos. son clases del nuevo bootstrap -> framewrok css
									echo '<div class="col-sm-3 col-xs-12">';
										echo "Archivo: <strong>$archivo</strong><br />";
										echo '<img src="'.$directorio.'/'.$archivo.'" title="imagen" alt="imagen"/>';
									echo '</div>';
								}
							}
						}
					?>
					</div>
				</div>
			</div>


			<form method="post" action="" enctype="multipart/form-data">
				<div class="form-group">
					<label for="archvio">Archivo</label>
					<input type="file" class="form-control-file" id="archvio" aria-describedby="fileHelp" name="archivo">
					<small id="fileHelp" class="form-text text-muted">Archivos permitidos (.jpg .png .gif)</small>
				</div>
				<button type="submit" class="btn btn-primary" name="boton">Subir archivo</button>
			</form>
		</div>
		<br>
	
		<?php require ("partials/footer.php");?><!--INSERTA EL FOOTER-->
	</body>
</html>

<!--PROBLEMAS-->

<!--
1.- EN LA PÁG DE REPOSITORIO PROBLEMAS A SUBIR ARCHIVOS PROFESOR Y/O ADMINISTRADOR.

-->