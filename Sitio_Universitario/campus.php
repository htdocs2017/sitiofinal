<?php session_start(); 

//PARA FORZARLO A ENTRAR SOLAMENTE LOGEADO
if( !isset($_SESSION["nombre_de_user"] )){
	header("Location: login.php"); 
}

?>

<!--ESTE CONTENIDO SOLO EL AACCESO ES SOLO PARA USUARIOS REGISTRADOS -->
<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="UTF-8">
		<title>CAMPUS</title>


		<link rel="stylesheet" type="text/css" href="css/estilos_campus.css">


		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="description" content="Source code generated using layoutit.com">
		<!--<meta name="author" content="LayoutIt!">-->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
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
									<img class="logo" src="images/velerosf.png" alt="Logo San Fernando">
									CAMPUS
								</a>

							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

								<ul class="navbar-nav">
									<li class="nav-item active">
										 <a class="nav-link" href="../Sitio_Universitario/repositorio_comit.php">REPOSITROIRO COMIT <span class="sr-only">(current)</span></a>
									</li>

									<li class="nav-item">
										 <a class="nav-link" href="#">BLOK</a>
									</li>

									<li class="nav-item">
										 <a class="nav-link" href="#">CHAT</a>
									</li>

									<li class="nav-item">
										 <a class="nav-link" href="logout.php">log out</a>
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
				BIENBENIDOS AL CAMPUS DEL CENTRO UNIVERSITARIO MUNICIPAL SAN FERNANDO
			<p>		


			<div>
				<div class="subtitulos">
					<h2>
						¿Qué es un repositorio web?
					</h2>
				</div>

				<div>
					<p>
						Un repositorio, depósito o archivo es un sitio centralizado donde se almacena y mantiene información digital, habitualmente bases de datos o archivos informáticos.
					</p>

					<p>
						El origen de la palabra española «repositorio» deriva del latín «repositorium», que significa armario o alacena. Este término está recogido en el Diccionario de la Real Academia donde se define como el «lugar donde se guarda algo».
					</p>
				</div> 
			</div>

			<div>
				<div class="subtitulos">
					<h2>
						¿Para qué sirve un repositorio web? 
					</h2>
				</div>

				<div>
					<p>
						Sirve para almacenar documentos, imágenes y todo tipo de archivos de computadora, así como es el caso de videos y presentaciones, de tal forma que sean fácilmente localizables y se puedan descargar mediante el uso de Internet en cualquier parte del país o del mundo.
					</p>

					<p>
						Esto permite que sus empleados o clientes localicen rápidamente, documentos, planos, gráficos, contratos, folletos, etc. que pueden ser críticos para concretar algún negocio o para cumplir con sus funciones.
					</p>

					<p>
						Los datos almacenados en un repositorio pueden distribuirse a través de una red informática, como Internet, o de un medio físico, como un disco compacto. Pueden ser de acceso público o estar protegidos y necesitar de una autentificación previa. Los repositorios más conocidos son los de carácter académico e institucional. Los repositorios suelen contar con sistemas de respaldo y mantenimiento preventivo y correctivo, lo que hace que la información se pueda recuperar en el caso que la máquina quede inutilizable. 
					</p>

					<p>
						A esto se lo conoce como preservación digital, y requiere un exhaustivo trabajo de control de calidad e integridad para realizarse correctamente.
					</p>

					<p>
						Depositar no debe confundirse con publicar. El depósito en los repositorios es una manera de comunicar públicamente los trabajos de los investigadores, aumentando su difusión: los autores ponen disponibles en acceso abierto una versión de los artículos que han publicado en revistas, tradicionales o de acceso abierto. Para ello, los sistemas de repositorios suelen integrarse e interpretar con otros sistemas y aplicaciones web. Asimismo, los repositorios cumplen un rol importante en la formación universitaria.
					</p>

					<p>
						Algunas instituciones promueven el uso de sus repositorios como un servicio adicional para el investigador. Otras instituciones poseen mandatos propios que obligan a los autores o investigadores a depositar sus publicaciones (o determinados tipos, como por ej. tesis doctorales) en el repositorio institucional, con fines de visibilidad, impacto y preservación.
					</p>

				</div>
			</div>

					 


		</article>
	</body>
</html>