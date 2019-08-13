<?php session_start();
    
    if (isset ($_GET["nombre_de_user"]) && isset($_GET["pass"])){

      $conxcion = new mysqli ("127.0.0.1", "root", "", "uni");
      $consulta = "SELECT * " .
      "FROM usuarios " .
      "WHERE nombre_de_user = '" .  $_GET["nombre_de_user"] . "'" .
      "  AND password = '" . $_GET["pass"] . "'";

      echo $consulta;

      $resultado = $conxcion->query ($consulta);

      if ($resultado->num_rows ==1) {
        $_SESSION["nombre_de_user"] = "*";
        echo "INGRESO";
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
  	</head>

  	<body>	


  		<div  class = "login-box" >
     		<!--<img  src = "images/logo.png"  class = "avatar"  alt = "Avatar Image">-->
     		<img src="images/velerosf.png" Class= "avatar" alt="Logo San Fernando">
        <h1> Inicie sesión aquí </h1>
        <form>
          <!--ENTRADA DE USUARIO-->
          <label  for = "username"> Nombre de usuario </label >
          <input name="nombre_de_user" type = "text"  placeholder = "Enter Username">
          <!--ENTRADA DE CONTRASEÑA-->
          <label  para = "password" > Contraseña </label>
          <input name="pass" type = "password"  placeholder = "Enter Password">
          <input  type = "submit"  value = "Log In" >
          <Un  href = "#"> perdido su contraseña? </a><br>
          <Un  href = "#"> ¿Todavía no tienes una cuenta? </a>
        </form>
      </div>

      <?php include ("parts/footer.php");?> <!--PROBLEMA A REVISAR-->
 
  	</body>
  </html>


<?php } ?>
      
      
  