<?php session_start();
    
    if (isset ($_GET["nombre_de_user"]) &&
        isset($_GET["password"])){

      $conxcion = new mysqli ("127.0.0.1", "root", "", "uni");
      $consulta = "SELECT * " .
      "FROM usuarios " .
      "WHERE nombre_de_user = '" .  $_GET["nombre_de_user"] . "'" .
      "  AND password = '" . $_GET["password"] . "'";

      echo $consulta;

      $resultado = $conxcion->query ($consulta);

      if ($resultado->num_rows ==1) {
        $_SESSION["nombre_de_user"] = "*";
        

        header ("Location: campus.php");
      }

      else{
        echo "Usuario y/o contraseña no validas";
      }

      };

if (!isset($_SESSION["nombre_de_user"])){

?>
  <!DOCTYPE html>
  <html lang="es">
  	<head>
  		<meta charset="UTF-8">
  		<title>Fomulario de inicio de seción Centro Universitario San Fernando</title>
  		<link rel="stylesheet" type="text/css" href="css/estilos-login.css">

      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

  	<body>

       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  		<div  class = "login-box" >
	     		<a href="index.php"><img src="images/velerosf.png" Class= "avatar" alt="Logo San Fernando"></a>
        <h1> Inicie sesión aquí </h1>
        <form>
          <!--ENTRADA DE USUARIO-->
          <label  for = "username"> Nombre de usuario </label >
          <input name="nombre_de_user" type = "text"  placeholder = "Enter Username">
          <!--ENTRADA DE CONTRASEÑA-->
          <label  para = "password" > Contraseña </label>
          <input name="password" type = "password"  placeholder = "Enter Password">
          <input  type = "submit"  value = "Log In" >
          <Un  href = "#"> perdido su contraseña? </a><br>
          <a  href = "registrate.php"> Registrate </a><br>
          <a class="solo_login"  href = "logout.php"> LOG OUT </a>

        </form>
      </div>
  	</body>
  </html>
<?php } ?>