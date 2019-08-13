<?php
class UsuariosController extends ControladorBase{
     
    public function __construct() {
        parent::__construct();
    }
     
    public function index(){
         
        //Creamos el objeto usuario
        $usuario=new Usuario();
         
        //Conseguimos todos los usuarios
        $allusers=$usuario->getAll();
        
        //Cargamos la vista index y le pasamos valores
        $this->view("index",array(
            "allusers"=>$allusers,
            "Hola"    =>"Bienvenidos"
        ));
    }
     
    public function crear(){
        if(isset($_POST["nombre"])){
             
            //Creamos un usuario
            $usuario=new Usuario();
            $usuario->setApellido($_POST["apellido"]);
            $usuario->setNombre($_POST["nombre"]);
            $usuario->setTelefono($_POST["telefono"]);
            $usuario->setCelular($_POST["celular"]);
            $usuario->setDNI($_POST["dni"]);
            $usuario->setNombre_de_user($_POST["nombre_de_user"]);
            $usuario->setPrioridades($_POST["prioridades"]);

            $usuario->setPassword(sha1($_POST["password"]));
            $save=$usuario->save();
        }
        $this->redirect("Usuarios", "index");
    }
     
    public function borrar(){
        if(isset($_GET["id"])){
            $id=(int)$_GET["id"];
             
            $usuario=new Usuario();
            $usuario->deleteById($id);
        }
        $this->redirect();
    }
     
     
    public function hola(){
        $usuarios=new UsuariosModel();
        $usu=$usuarios->getUnUsuario();
        var_dump($usu);
    }
 
}
?>
