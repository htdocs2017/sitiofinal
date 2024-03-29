<!DOCTYPE html>
<html lang="es">
		<head>
			<meta charset="UTF-8">
			<title>Datos personales</title>
			<link rel="stylesheet" type="text/css" href="css/estilos_cv.css">
			<!-- Required meta tags -->
        	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       		<!-- Bootstrap CSS -->
    		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		</head>
					
		<body>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	

			<header>

				<nav><!--INICIO DE BARRA DE NAVEGACIÓN-->

					<div class="container-fluid">

						<div class="row">

							<div class="col-md-12">

								<ul class="nav nav-tabs">

									<li class="nav-item">

										<a class="nav-link active" href="../Sitio_Universitario/index.php">Home</a>
									</li>

									<li class="nav-item">

										<a class="nav-link" href="estudios.php">Estudios Cursados</a>
									</li>

									<li class="nav-item">

										<a class="nav-link" href="experenciasloboral.php">Experencias Laborale</a>
									</li>

									<li class="nav-item">

										<a class="nav-link" href="conocimientos_de_informatica.php">Conocimentos de Informática</a>
									</li>

									<li class="nav-item">

										<a class="nav-link" href="lenguajes_de_programacion.php">Lenguajes de Programación</a>
									</li>
									
									<li class="nav-item">

										<a class="nav-link" href="hobbies.php">Hobbies</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</nav><!--FIN BARRA DE NAVEGACIÓN-->
			</header>
	
			<article>

				<h1>DATOS PERSONALES</h1>

				<ul id="datos-personales"><!--LISTADO SIN VIÑETAS-->

					<li>
						<p>
							Apellidos: Scianca Pugliese.
						</p>
					</li>

					<li>
						<P>
							Nombres: Sergio David.
						</P>
					</li>

					<li>
						<p>
							Fecha de nacimento: 03/08/1988.
						</p>
					</li>

					<li>
						<p>
							Nacionalidad: Argentino.
						</p>
					</li>

					<li>
						<p>
							DNI: 33896458.
						</p>
					</li>

					<li>
						<p>
							Estado: Soltero.
						</p>
					</li>

					<li>
						<p>
							Dirección: Carlos Casares 1852, Victoria partido de San Fernando Provincia de Buenos Aires.
						</p>
					</li>

					<li>
						<p>
							Celular: <img src="images/logowhatsapp.png" alt="Logo_Whatsapp">11-2668-1200</a>
						</p>
					</li>

					<li>
						<p>
							Telegram: <img src="images/logo2019telegram.png" alt="Logo_Telegram">@SDAVIDSP <a href="https://telegram.org/#/im"> Descargate Telegram.</a>
						</p>
					</li>

					<li>
						<p>
							E-mail: artedavid_64@hotmail.com
						</p>
					</li>
				</ul>
			</article>

			<?php require ("partials/footer.php");?><!--INSERTA EL FOOTER-->
		</body>
	</html>