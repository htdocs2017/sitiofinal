 <?php /*session_start();
if(isset($_GET["apellidos"]) && isset($_GET ["nombres"]) && isset(["telefono"]) && isser(["celular"]) && isset(["dni"]) isset(["nombre_de_user"]) && isset(["prioridades"]) && isset(["pass"]));

$conecion = new mysqli("127.0.0.1","root","","uni");
$consulta = "SELECT * " .
"FROM usuarios " .
"WHERE apellidos= '" . $_GET["apellidos"] . "'"
" AND passswoed = '" .$_GET["pass"] . "'";

echo $consulta;

$resultado = $conecion->query($consulta);

if ($resultado->num_rows ===1){
  $_SESSION ["nombre_de_user"] ="*";
  echo"REGISRADO CORRECTAMENTE";
}
  else{
    echo "USUARIO YA REGISRADO Y/O OLVIDO SU CONTRASENA Y/O USUARIO"
  }
};
if (!isset($SESSION["nombre_de_user"])){*/
?>

<!DOCTYPE html>
  <html lang="es">
  	<head>
  		<meta charset="UTF-8">
  		<title>resitrate</title>
  		<link rel="stylesheet" type="text/css" href="css/estilos-registrate.css">
      <link rel="stylesheet" href="js/saludo.js">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

  	<body>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     
  		<div  class = "resitrate-box" >
     		<a href="index.php">
          <img src="images/velerosf.png" Class= "avatar" alt="Logo San Fernando">
        </a>
        <h1> REGISTRATE</h1>

        <form method="POST">
          
          <div>

           <label for="apellidos" nome="apellidos" required>
              APELLIDOS
            </label>

            <input type="text" class="form-control" id="apellidos">
          </div>


          <div>

            <lable for="nombres"required>
             NOMBRES
            </label>

            <input type="text" class="form-control" id="nombres">
          </div>


          <div>

            <lable for="telefono"required>
             TELEFONO
            </label>

            <input type="text" class="form-control" id="telefono">
          </div>


          <div>

            <label for="celular"required>
             CELULAR
            </label>

            <input type="text" class="form-control" id="celular">
          </div>


          <div>
             
            <label for="dni"required>
              DNI
            </label>

            <input type="text" class="form-control" id="dni">
          </div>


          <div>
             
            <label for="nombre_de_user"required>
             NOMBRE DE USUARIO
            </label>

            <input type="text" class="form-control" id="nombre_de_user">
          </div>

          <div>
            <select class="prioridades"  nome=prioridades>
              <option value="1">Profesores</option>
                <option value="2">Alumnos</option>
                  <option value="3">Administrador</option>
            </select>
        </div>


          <div>
             
            <label for="pass"required>
              Password
            </label>
            <input type="password" class="form-control" id="pass">
          </div>


          
          <div class="checkbox">
            <label>
             <!-- <input type="checkbox"> Check me out-->
            </label>
            <input type="submit" value="ENVIAR">
          <!--<button type="submit" value="Log In" class="btn btn-primary" disabled="">
            Submit
          </button>-->
        
          


       </form>
      </div>


      <?php include ("partials/footer.php");?><!--INSERTA EL FOOTER-->      
  	</body>
  </html>



  <!--PROBLEMAS-->

  <!--

    1.- QUE NO SE AJUSTA LA PAGUINA DE INICIO A FORMATO MAS CHICO QUEDO ESTANDAR PARA PANTANLLA DE 24".-

    2.- FALTA CONFIGURAR EL ENLACE CON LA BASE DE DATOS.-

    3.- FALTA CONFIGURAR EL BOTON ENVIAR.-


    -->


<!--
    <div class="form-group">

     
    <label for="exampleInputEmail1">
      APELLIDOS
    </label>

    <input type="email" class="form-control" id="exampleInputEmail1">
  </div>
  -->


 
