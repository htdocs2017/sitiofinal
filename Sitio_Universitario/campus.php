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
									<img class="logo" src="images/velerosf.png" alt="">
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




									<!--
									<li class="nav-item dropdown">
										 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Dropdown link</a>

										<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
											 <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
											<!<div class="dropdown-divider">
											</div> <a class="dropdown-item" href="#">Separated link</a>
										</div>
									</li>	
									-->
								</ul>
								
								<!--
								<form class="form-inline">
									<input class="form-control mr-sm-2" type="text"> 
									<button class="btn btn-primary my-2 my-sm-0" type="submit">
										Search
									</button>
								</form>
								-->
								<!--
								<ul class="navbar-nav ml-md-auto">
									<li class="nav-item active">
										 <a class="nav-link" href="#">Link <span class="sr-only">(current)</span></a>
									</li>

									<li class="nav-item dropdown">
										 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Dropdown link</a>
										<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
											 <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
											<div class="dropdown-divider">
											</div> <a class="dropdown-item" href="#">Separated link</a>
										</div>
									</li>
								</ul>-->
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
					<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam reiciendis laboriosam corrupti delectus, quis et, rerum nostrum vitae, a culpa aperiam quo explicabo assumenda id asperiores eius earum non? Laboriosam.</span>
					<span>Unde accusantium, esse, in corporis velit sapiente harum! Esse repellendus vero laboriosam maiores vel aspernatur quae libero expedita quia sapiente maxime error asperiores sint, repellat doloribus harum veniam quibusdam natus!</span>
					<span>Harum maiores fugiat asperiores. Quo ut fuga sequi, facilis quam repudiandae minus a ipsa alias commodi ad perferendis ex ratione porro aliquam et natus deserunt, non, nisi. Exercitationem velit, animi.</span>
					<span>Mollitia tempore reiciendis qui praesentium, ea enim. Voluptatibus assumenda ad voluptate qui impedit ex commodi officiis incidunt neque magnam maxime cupiditate laborum, obcaecati eius cumque, ratione aperiam non, alias aliquam!</span>
					<span>Laboriosam temporibus numquam adipisci aut sapiente alias dolorem error quam, dolorum explicabo deleniti totam ipsa cumque necessitatibus suscipit dicta doloremque aperiam corporis excepturi laborum? Voluptatum repellat earum, quaerat laudantium soluta.</span>
					<span>Commodi unde officiis odit impedit quas, beatae ullam voluptates natus quis, doloremque inventore, pariatur deserunt distinctio voluptatem enim? Quia dolor deserunt expedita nihil itaque ab a veniam, repellat optio labore.</span>
					<span>Facere voluptas natus dolore, id quos vitae. Culpa porro eveniet ducimus earum veniam corporis libero illum eum maiores totam neque natus similique cupiditate sequi omnis aspernatur, officia itaque, nulla, impedit.</span>
					<span>Saepe ex tempora, ducimus distinctio. Odio earum consequatur vitae nulla quam porro, dolores, ad sed facere, atque unde nisi minima repudiandae recusandae. Mollitia error magni eius sapiente aperiam, beatae ab.</span>
					<span>Incidunt minus dignissimos explicabo illum nobis amet blanditiis similique modi nihil deleniti natus aspernatur rem quae, sit error, harum ea. Totam, earum, labore. Nisi recusandae vero quia officia, impedit earum.</span>
					<span>Explicabo, fugiat voluptatum itaque, sint alias distinctio commodi doloremque labore vel delectus in iste saepe! Dolorum fugiat, deserunt incidunt commodi quod alias sint quaerat rerum impedit, non vero, quos voluptate!</span>
					<span>Dolores, nemo quisquam ipsa sapiente sit perspiciatis! Iusto quam corporis veniam nesciunt eum aut quos voluptates at placeat voluptatibus repellendus eos, esse sint laborum ad est pariatur fugit necessitatibus magni.</span>
					<span>Id dicta saepe rem, numquam ratione unde, eaque distinctio a ullam facere consequatur voluptatem autem animi obcaecati, quis iste provident voluptate. Illo nihil esse, a consectetur blanditiis officia molestias repellat?</span>
					<span>Tempora ipsam libero voluptates neque necessitatibus unde dignissimos in incidunt quia illo, laborum expedita, dolore provident tempore maxime rerum praesentium! Ex explicabo maiores, et harum. Iusto id, numquam assumenda? Ullam!</span>
					<span>Quas aspernatur praesentium, tenetur? Consequuntur id eaque in consequatur harum error mollitia optio, voluptatum impedit vitae voluptatibus quis itaque est vero adipisci atque praesentium beatae officiis suscipit molestiae ea quod.</span>
					<span>Ex nobis praesentium eum quibusdam dolor pariatur quod eveniet veritatis iusto nam, deserunt asperiores tempore, temporibus numquam. Veritatis quam corrupti, error? Officiis eligendi inventore adipisci voluptatibus nesciunt a facilis fuga.</span>
				</p>
			</p>
		</article>
	</body>
</html>