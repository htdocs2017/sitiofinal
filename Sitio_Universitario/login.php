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
          <input name="pass" type = "password"  placeholder = "Enter Password">
          <input  type = "submit"  value = "Log In" >
          <Un  href = "#"> perdido su contraseña? </a><br>
          <a  href = "registrate.php"> Registrate </a><br>
          <a class="solo_login"  href = "logout.php"> LOG OUT </a>

        </form>
      </div>

      
   	</body>
  </html>
<?php } ?>



<!-- 
    include_once PATH_HELPERS . '/database_helper.php';


    if ( isset( $_POST["user_name"] ) && isset( $_POST["password"] ) && 
         $_POST["user_name"] != "" && $_POST["password"] != "" ){

        $conexion = getConexion();

        $consulta = "SELECT * " . 
                    "FROM usuarios " .
                    "WHERE usr_nombre_usuario = '" . $_POST["user_name"] . "'" .
                    " AND usr_password = '" . $_POST["password"] . "'";

        $resultado = $conexion->query( $consulta );


        if ( $resultado->num_rows == 1  ){

            //Obtengo el nombre del usuario

            $usuario = $resultado->fetch_assoc();

            $_SESSION["usuario"] = $usuario["usr_nombre_real"];
            $_SESSION["id_usuario"] = $usuario["usr_id"];
            

        }
        else{
            $mensaje_alerta = "Usuario y/o contraseña no valida";
        }
    }
    else{
        $mensaje_alerta = "Debe completar el usuario y la contraseña";
    }

    $contenido_seccion1 = PATH_VIEWS . "/index/partials/slider_publicidades.inc.php";
    $contenido_seccion2 = PATH_VIEWS . "/index/partials/contenido_index.inc.php";
    $contenido_listado  = PATH_VIEWS . "/index/partials/listado_index.inc.php";

    include( PATH_VIEWS . '/common/base.php' );

-->