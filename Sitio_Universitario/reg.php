<?php  

session_start();

if(  isset($_POST["apellidos"]) &&
     isset($_POST["nombres"]) && 
     isset($_POST["telefono"]) && 
     isset($_POST["celular"]) && 
     isset($_POST["dni"])  && 
     isset($_POST["nombre_de_user"]) && 
     isset($_POST["prioridades"]) && 
     isset($_POST["password"]))
{
  $conexion = new mysqli("127.0.0.1","root","","uni");


  $apellidos = $_POST["apellidos"];
  $nombre = $_POST["nombres"];
  $telefono = $_POST["telefono"];
  $celular = $_POST["celular"];
  $dni = $_POST["dni"];
  $nombre_de_user = $_POST["nombre_de_user"];
  $prioridades = $_POST["prioridades"];
  $password = $_POST["password"];


  $consulta= "INSERT INTO usuarios (apellido, nombre, nombre_de_user, dni, password, telefono, celular, prioridad) VALUES ('$apellidos', '$nombre', '$nombre_de_user', '$dni','$password', '$telefono','$celular','$prioridades')";

  echo $consulta;

  $conexion->query($consulta);

}

?>
<!--
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
 


/* 
//CONEXIÓN  CON LA BASE DE  DATOS Y EL SERVIDOR

$link=mysql_connect("localhost","root","", "uni") or die("<h2> NO SE ENCUENTRA EL SERVIDOR</h2>");;
$db=mysql_db("usuarios, $link") or die("<h2>ERROR DE CONEXIÓN</h2>");
//OBTENEMOS LOS VALORES DEL FORMULARIO
$apellidos=$_POST['apellidos'];
$nombres=$_POST['nombres'];
$telefono=$_POST['telefono'];
$celular=$_POST['celular'];
$dni=$_POST['dni'];
$nombre_de_user=$_POST['nombre_de_user'];
$prioridades=$_POST['prioridades'];
$pass=$_POST['password'];
$rpass=$_POST['rpass'];

//OBTENERT LA LONGITUD DE UN STRING
$require (strlen ($apellidos)* strlen($nombres) * strlen($telefono) * strlen(celular) * strlen(dni) * strlen($nombre_de_user) * strlen($prioridades) * strlen($pass) *strlen($rpass)) or die ("'NO SE ALLAN LLENADO TODOS LOS CAMPOS" <br><br><a href='registrate.php'</a>;

//SE CONFRIMA LA CONTRASEÑA
	if ($pass!=$rpass) {

		die ("LAS CONTRASEÑAS NO COINCIDEN <br><br><a href='registrate.php'> VOLVER</a>");
	}

//SE ENCRIPTA LA CONTRASEÑA
$CONTRASEÑA=md5($pass);

//INGRESAR LA INFORMACION A LA TABLA DE DATOS
mysql_query("INSERT INTO DATOS VALUES ('','$apellidos', '$nombres','$telefono','$celular','$dni','$nombre_de_user','$prioridades','$password','$rpassword')" $link or die(<h2> ERROR DE ENIVO</h2>));

	echo '

		<h2>REGISTRO COMPLETO</h2> 
		<h3>GRACIAS POR REGISTRARTE EN NUESTA WEB, YA PUEDE INGRESAR COMO USUARIO</h3>
		';

 }

  */
  -->