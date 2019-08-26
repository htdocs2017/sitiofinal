<?php session_start(); 

//PARA FORZARLO A ENTRAR SOLAMENTE LOGEADO
if( !isset($_SESSION["nombre_de_user"] )){
	header("Location: login.php"); 
} 
 ?>
 


	<!DOCTYPE html>
	<html lang="es">

		<head>

		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		  <meta name="description" content="">
		  <meta name="author" content="">
		  <link rel="stylesheet" type="text/css" href="css/estilos_campus.css">

		  <title>Blog Post</title>

		  <!-- Bootstrap core CSS -->
		  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		  <!-- Custom styles for this template -->
		  <link href="css/blog-post.css" rel="stylesheet">

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
									CAMPUS
								</a>

							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

								<ul class="navbar-nav">
									<li class="nav-item active">
										 <a class="nav-link" href="../Sitio_Universitario/repositorio_comit.php">REPOSITROIRO COMIT <span class="sr-only">(current)</span></a>
									</li>

									<li class="nav-item">
										 <a class="nav-link" href="blok.php">BLOK</a>
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
			



			<!--
		  <!- - Navigation - ->
		  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		    <div class="container">
		      <a class="navbar-brand" href="#">Start Bootstrap</a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		      </button>
		      <div class="collapse navbar-collapse" id="navbarResponsive">
		        <ul class="navbar-nav ml-auto">
		          <li class="nav-item active">
		            <a class="nav-link" href="#">Home
		              <span class="sr-only">(current)</span>
		            </a>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link" href="#">About</a>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link" href="#">Services</a>
		          </li>
		          <li class="nav-item">
		            <a class="nav-link" href="#">Contact</a>
		          </li>
		        </ul>
		      </div>
		    </div>
		  </nav>-->

		  <!-- Page Content -->
		  <div class="container">

		    <div class="row">

		      <!-- Post Content Column -->
		      <div class="col-lg-8">

		        <!-- Title -->
		        <h1 class="mt-4">Post Title</h1>

		        <!-- Author -->
		        <p class="lead">
		          by
		          <a href="#">Start Bootstrap</a>
		        </p>

		       

		        <!-- Preview Image -->
		        <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

		        

		        

		        <!-- Comments Form -->
		        <!--
		        <div class="card my-4">
		          <h5 class="card-header">Leave a Comment:</h5>
		          <div class="card-body">
		            <form action="" method="POST">
		              <div class="form-group">
		                <textarea  name="text" class="form-control" rows="3"></textarea>
		              </div>
		              <button type="submit" name="enviar" class="btn btn-primary">Submit</button>
		            </form>
		          </div>
		        </div>-->

					<!--
				<div class="col-lg-9">
					<form class="contact-form" action="guardar.php" method="POST">
						<div class="row">
							<div class="col-md-6">
								<input type="text" name="nombre" placeholder="Nombre" requeride="">
							</div>
							<div class="col-md-6">
								<input type="text" name="email" placeholder="E-mail" required="">
							</div>
							<div class="col-md-12">
								<input type="text" name="apellido" placeholder="Apellido" required="">
								<textarea name="mensaje" placeholder="Mensaje" required=""></textarea>
								<input class="btn btn-danger" type="submit" value="Enviar">

							</div>
						</div>
					</form>
				</div>
			</div>-->

		</div>
		
	        <section class="contact-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 contact-text">
							<!--<h4>Info</h4>
							<p></p>
							<div class="cont-info">
								<div class="ci-icon">
									<img src="img/icons/1.png" alt="">
								</div>
								<span>San Fernando, Buenos Aires</span>
							</div>
							<div class="cont-info">
								<div class="ci-icon">
									<img src="img/icons/2.png" alt="">
								</div>
								<span>+54 9 1131567160</span>
							</div>
							<div class="cont-info">
								<div class="ci-icon">
									<img src="img/icons/2.png" alt="">
								</div>
								<span>lucasgvillalba@outlook.es</span>
							</div>-->
						</div>

						<div class="col-lg-9">

							<form class="contact-form" action="guardar.php" method="POST">

								<div class="row">

									<div class="col-md-6">

										<input type="text" name="nombre_de_user" placeholder="NOMBRE DE USER" requeride="">
									</div>

									<!--<div class="col-md-6">

										<input type="text" name="email" placeholder="E-mail" required="">
									</div>-->

									<div class="col-md-12">

										<!--<input type="text" name="apellido" placeholder="Apellido" required="">-->

										<textarea name="mensaje" placeholder="Mensaje" required=""></textarea>

										<input class="btn btn-danger" type="submit" value="Enviar">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
		</div>

		  
		  <!-- Bootstrap core JavaScript -->
		  <script src="vendor/jquery/jquery.min.js"></script>
		  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	</body>
</html>