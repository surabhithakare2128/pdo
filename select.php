<?php

include 'establishCon.php';

class collection{
	public function __construct(){
		$calledClass=get_called_class();
		$this->searchRow(6,$cllaedClass);
	}
	
	public function searchRow($count,$calledClass){
		$database=connect::getConnect();
		$sql='SELECT * FROM ' .$calledCLass . 'WHERE ID<' .$count;
		$statement=$database->prepare($sql);
		$statement->execute();
	
	}

} 
?>
