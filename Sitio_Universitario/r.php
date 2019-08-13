<?php



if(  isset($_GET["apellidos"]) && !empty($_GET["apellidos"]) &&
     isset($_GET["nombres"]) &&  !empty($_GET["nombres"]) &&
     isset($_GET["telefono"]) && !empty ($_GET["telefono"]) &&
     isset($_GET["celular"]) && !empty ($_GET["celular"]) &&
     isset($_GET["dni"])  && !empty($_GET["dni"])  &&
     isset($_GET["nombre_de_user"]) && !emepty ($_GET["nombre_de_user"]) &&
     isset($_GET["prioridades"]) && !empety ($_GET["prioridades"]) &&
     isset($_GET["pass"]) && !empty($_GET["pass"])){

// Si entramos es que todo se ha realizado correctamente

$link =  mysqli("127.0.0.1","root","","uni")

// Ahora comprobaremos que todo ha ido correctamente
$my_error = mysql_error($link);

if(!empty($my_error) {

echo "Ha habido un error al insertar los valores. $my_error";

} else {

echo "Los datos han sido introducidos satisfactoriamente";

}

} else {

echo "Error, no ha introducido todos los datos";

}

?