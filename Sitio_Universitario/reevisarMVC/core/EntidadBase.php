<?php
class Usuario extends EntidadBase{
    private $id;
    private $apellido
    private $nombre;
    private $telefono;
    private $celular;
    private $Nombre_de_user;
    private $prioridades;
    private $password;
     
    public function __construct() {
        $table="usuarios";
        parent::__construct($table);
    }
     
    public function getId() {
        return $this->id;
    }
 
    public function setId($id) {
        $this->id = $id;
    }
     

    public function getApellido() {
        return $this->apellido;
    }
 
    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }
 

    public function getNombre() {
        return $this->nombre;
    }
 
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
 

    public function getNombre_de_user() {
        return $this->getNombre_de_user;
    }
 
    public function setNombre_de_user($Nombre_de_user) {
        $this->getNombre_de_user = $getNombre_de_user;
    }


 	public function getPassword() {
        return $this->password;
    }
 
    public function setPassword($password) {
        $this->password = $password;
    }


 	public function getTelefono() {
        return $this->telefono;
    }
 
    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }


 	public function getCelular() {
        return $this->celular;
    }
 
    public function setCelular($celular) {
        $this->celular = $celular;
    }


 	public function getPrioridades() {
        return $this->prioridades;
    }
 
    public function setPrioridades($prioridades) {
        $this->prioridades = $prioridades;
    }
 

    public function getPassword() {
        return $this->password;
    }
 
    public function setPassword($password) {
        $this->password = $password;
    }
 

    public function save(){
        $query="INSERT INTO usuarios (id,apellido,telefono, celular,nombre_de_user, prioridades,password)
                VALUES(NULL,
                       '".$this->apellido."',
                       '".$this->nombre."',
                       '".$this->telefono."',
                       '".$this->celular."',
                       '".$this->Nombre_de_user."',
                       '".$this->prioridades."',
                       '".$this->password."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }
 
}
?>



<!--

class EntidadBase{
	private $table;
	private $db;
	private $conectar;

	public function_contruct($table){
		$this->table=(string) $table;

		require_once 'Conectar.php';
		$this->conectar=new Conectar();
		$this->db=$this->conectar->conexion();
	}

	public function getConectar(){
		retur $this->conectar;
	}

	public function db(){
		retur $this->db;
	}

	public function getAll(){
		$query=$this->db->query("SELECT * FROM $this->table ORDER BY id DESC");

		//DEVOLVEMOS EL RESULTADO EN FORMA DE ARRARY DE OBJETOS
		while ($row=$query->fetch_objet()) {
			$resulSet=row;
		}
		return $resulSet;
	}

	public function getBy($column,$value){
		$query=$this->db->query("SELECT * FROM $this->table WHERE $column='$value'");
		while ($row=$query->fetch_objet()) {
			$resulSet[]=$row;
		}
		return $resulSet;
	}

	public function deleteById($id){
		$query=$this->db->query("DELETE FROM $this->table WHERE id=$id");
		return $query;
	}
}

 ?-->
