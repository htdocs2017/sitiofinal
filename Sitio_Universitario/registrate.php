<?php  

session_start();

if(  isset($_POST["apellidos"]) &&
     isset($_POST["nombres"]) && 
     isset($_POST["telefono"]) && 
     isset($_POST["celular"]) && 
     isset($_POST["dni"])  && 
     isset($_POST["nombre_de_user"]) && 
     isset($_POST["prioridades"]) && 
     isset($_POST["pass"]))
{
  $conexion = new mysqli("127.0.0.1","root","","uni");


  $apellidos = $_POST["apellidos"];
  $nombre = $_POST["nombres"];
  $telefono = $_POST["telefono"];
  $celular = $_POST["celular"];
  $dni = $_POST["dni"];
  $nombre_de_user = $_POST["nombre_de_user"];
  $prioridades = $_POST["prioridades"];
  $pass = $_POST["pass"];


  $consulta= "INSERT INTO usuarios (apellido, nombre, nombre_de_user, dni, password, telefono, celular, prioridad) VALUES ('$apellidos', '$nombre', '$nombre_de_user', '$dni','$pass', '$telefono','$celular','$prioridades')";

  echo $consulta;

  $conexion->query($consulta);

}


/*
$resultado = $conexion->query($consulta);

  if ($resultado->num_rows ==1){
    
    echo"USUARIO YA REGISRADO";


  }
    else{

      $apellidos = $_GET["apellidos"];
      $nombre = $_GET["nombre"];
      $telefono = $_GET["telefono"];
      $celular = $_GET["celular"];
      $dni = $_GET["dni"];
      $nombre_de_user = $_GET["nombre_de_user"];
      $prioridades = $_GET["prioridades"];
      $pass = $_GET["pass"];
      
      
      



      $consulta= "INSERT INTO `usuarios` (`apellido`, `nombre`, `nombre_de_user`, `dni`, `password`, `telefono`, `celular`, `prioridad`) VALUES ('$apellidos','$nombre',' $telefono','$celular','$dni','$nombre_de_user','$prioridades','$pass')";


      $conexion->query($consulta);

      if (!$conexion->content_errno){
        echo "error";
      }
    }
}
 else{
/*

//SE CONFRIMA LA CONTRASEÑA
  if ($pass!=$rpass) {

    die ("LAS CONTRASEÑAS NO COINCIDEN <br><br><a href='registrate.php'> VOLVER</a>");
  }
*/


//if (!isset($SESSION["nombre_de_user"])){





 /*
  //CONECTAMOS CON EL SERVIDOR
  $conectar=@mysql_connect('localhost','root','');

  //VERIFICAMOS LA CONECION
  if(!$conectar){
    echo"NO SE PUDO COENETAR CON EL SERVIDOR";
  }else{
  $base=mysql_select_db('uni');
    if(!$base){
      echo"NO SE ENCONTRO LA BASE DE DATOS";
      }
  }

  //REPUPERARA LAS VARIABLES
  $apelidos=GET['apelidos'];
  $nombre=GET['nombres'];
  $celular=GET['celular'];
  $dni=GET['dni'];
  $nombre_de_user=GET['nombre_de_user'];
  $prioridades=GET['prioridades'];
  $pass=GET['pass'];
  $rpass=GET['rpass'];

  //HACEMOS LA SENTENCIAS DE SQL
  $SQL="INSERT INTO datos VALUES ('$apelidos','$nombres','$telefono','celular','dni','nombre_de_user','prioridades','pass','rpass')";

//EJECUTAMOS LA SENTENCIAS DE SQL
  $EJECUTAR = mysql_query($sql);

//VERIFICAMOS LA EJECUCCION
if (!$ejecutar){

  echo  "HUBI ALGUN ERROR";
    }
      else
          {
            echo "DATOS GUARDADOS CORRETAMENTE<br><a href='login.php'>VOLVER</a> "
          };

          if ($pass!=$rpass) {

           die ("LAS CONTRASEÑAS NO COINCIDEN <br><br><a href='registrate.php'> VOLVER</a>");    */      
 
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

        <form action="" method="POST">
          
          <div>

           <label for="apellidos" name="apellidos"  placeholder = "Enter Username">
              APELLIDOS
            </label>

            <input type="text" name="apellidos"  class="form-control" id="apellidos" placeholder = "Escriba los Apellidos"required>
          </div>


          <div>

            <label for="nombres" name="nombres"  placeholder = "Enter Username"> 
              NOMBRES
            </label>

            <input type="text" name="nombres" class="form-control" id="nombres" placeholder = "Escriba los nombres"required>
          </div>


          <div>

            <label for="telefono" name="telefono">
              TELEFONO
            </label>

            <input type="text" name="telefono" class="form-control" id="telefono" placeholder = "Escriba el número de telefono fijo"required>
          </div>


          <div>

            <label for="celular" name="celular">
             CELULAR
            </label>

            <input type="text" name="celular" class="form-control" id="celular"placeholder = "Escriba el número de celular"required>
          </div>


          <div>
             
            <label for="dni" name="dni">
              DNI
            </label>

            <input type="text" name="dni" class="form-control" id="dni" placeholder = "Escriba el dni sin los puntos y/o espacios"required>
          </div>


          <div>
             
            <label for="nombre_de_user"  name="nombre_de_user">
             NOMBRE DE USUARIO
            </label>
 
            <input type="text" name="nombre_de_user" class="form-control" id="nombre_de_user"  placeholder = "Escriba nombre de usuarios"required>
          </div>

          <div>
            <select class="prioridades"  name="prioridades">
              <option value="1">Profesores</option>
                <option value="2">Alumnos</option>
                  <!--<option value="3">Administrador</option>-->
            </select>
        </div>


          
          <div>
             
            <label for="password" name="password">
              PASSWORD
            </label>
            <input type="password"   name="pass" class="form-control" id="pass"  placeholder = "Ingreser la contraseña"required>
          </div>
          <!--ACA SE ENCUENTA EL PROBLEM AL ESTAR ACTIVO ESTE CAMPO NO SE PUEDE ENVIAR EL FORMULARIO-->


           
          <div>
             
            <label for="password"  name="rpassword">
               REINGRESER PASSWORD
            </label>
            <input type="password" name="rpassword"class="form-control" id="rpassword" placeholder = "Repita la contraseña"required>
          </div>
          <!--ACA SE ENCUENTA EL PROBLEM AL ESTAR ACTIVO ESTE CAMPO NO SE PUEDE ENVIAR EL FORMULARIO-->

            

          

            <label for="submit" name="enviar">
             <!-- <input type="checkbox"> Check me out-->
            </label>
            <input type="submit" value="ENVIAR">
            <!--<button type="submit" value="Log In" class="btn btn-primary" disabled="">
            Submit
            </button>-->

      </div>
          
       </form>
       </div>


      <?php //include ("partials/footer.php");?><!--INSERTA EL FOOTER-->      
    </body>
  </html>





  <!--PROBLEMAS-->

  <!--

    1.- QUE NO SE AJUSTA LA PAGUINA DE INICIO A FORMATO MAS CHICO QUEDO ESTANDAR PARA PANTANLLA DE 24".-

    2.- PROBLEMAS NO SE ENVIA EL FORMUALARIS A LA BASE DE DATOS-

    3.- COMO HACER PARA CONTROLAR CUANDO SE REE INGRESA LA CONTASEÑAS

    4.- HAY QUE PASAR DE GET A POST

    


    -->



