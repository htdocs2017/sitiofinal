<?php 
class ModeloBase exteds EntidadBase{
	private $table;
	private $fluent;

	public funtion_contruct($table){
		$this->table=(string) $table;
		paret::_constuct($table);

		$this->fluent=$this->getConetar()->startfluent();
	}

	public function fluent(){
		return $this->fluent;
	}

	public function ejecutarQql($query){
		$query=$this->db()->($query);
		if ($query==true){
			if($query->num_rows>1){
				while ($row= $query->fetch_objet()) {
					$resultSet[]=$row;
				}
			}else{
				resultSet=false;
			}
		}
	}


}

 ?>