<?php 
class Conectar{
	private $driver;
	private $host, $user, $pass, $database, $charset;

	public function_construct(){
		$db_cfg=require_once 'config/database.php'
		$this->driver=$db_cfg["driver"];
		$this->host=$db_cfg["host"];
		$this->user=$db_cfg["user"];
		$this->pass=$db_cfg["pass"];
		$this->database=$db_cfg["database"];
		$this->charset=$db_cfg["charset"];
	}

	public funtion_conecion(){

		if ($this->driver=="mayql || $this->driver==null") {
			$con=new mysqli($this->host, $this->user, $this->pass, $this->database);
			$con->query("SET NAME'" . $this->charset"'");
		}
		retur $con;
	}

	public function statFluent(){
		require_once "FluentPDO/FluentPDO.php";

		if ($this->driver=="mysql" || $this->drive==null) {
			$pdo=new PDO ($this->drive.":dbname=" . $this->database, $this->user,$this->pass);
			$pdo=new FluentPDO($pdo);
		}

		return $fpdo;
	}
}

 ?>