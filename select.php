<?php

include 'establishCon.php';
include 'display.php';

class collection{


	public function __construct(){
		$calledClass=get_called_class();
		$this->searchRow(6,$calledClass);
	}
	
	public function searchRow($count,$calledClass){
		$database=connect::getConnect();
		$sql='SELECT * FROM ' .$calledClass . '  WHERE id<' . $count;
		$statement=$database->prepare($sql);
		$statement->execute();
		$row=$statement->rowCount();
		echo 'Number of rows whose user ID is less than 6 are: ' .$row . '<br><br>';
		$totalRows=$statement->fetchAll();
		disp::dispTable($totalRows);
	}
}

class accounts extends collection{


}
?>
