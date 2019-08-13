<?php 
 ?>

	<!DOCTYPE html>
	<html lang="es">

		<head>

			<meta charset="UTF-8">
			<title>CONTACTO</title>

			<link rel="stylesheet" href="css/estilos_contactos.css">

			<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
			<h1><b>CONTACTO</b></h1>
		</head>

		<body>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
			<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

				<header>

					<nav><!--INICIO DE BARRA DE NAVEGACIÓN-->
						<div class="container">
						    <div class="row">
						       
						    <div class="navbar">

						        <div class="navbar-inner">
						        	
						            <a class="brand" href="index.php">
						            
						            	<img class="logo_institucional" src="images/velerosf.png" alt="Logo San Fernando">
						            </a>
						           
						            <div class="nav-collapse collapse">
						                <ul class="nav">
						                	
						                    <li>
						                    	<a href="./una/index.php">
						                    		Universidad Nacional del Arte (UNA)
						                    	</a>
						                	</li>


						                    <li>
						                    	<a href="pagunina2.html">
						                    		Universidad Nacinal de Quilmez
						                    	</a>
						                    </li>


						                    <li>
						                    	<a href="autoridades.php">
						                    		AUTORIDADES
						                    	</a>
						                    </li>


						                    <li>
						                    	<a href="login.php">
						                    		login
						                    	</a>
						                    </li>

						                    <li>
						                    	<a href="contacto.php">
						                    		CONCTACTO

						                    	</a>
						                    </li>


						                    <li>
						                    	<a href="../Sitio_CV/indexcv.php">
						                    		CV
						                    	</a>
						                    </li>
						                    <!--<li><a href="#">Link</a></li>-->
						                </ul>
						            </div>
						        </div>
						    </div>
						</div>
					</div>
				</nav>
			</header><!--FIN BARRA DE NAVEGACIÓN-->
			
			<article>
				<?php  require("partials/address.php"); ?><!--INSERTA EL ADDRESS-->
			</article>


					
			<?php   require("partials/footer.php"); ?><!--INSERTA EL FOOTER-->
		</body>
	</html>
