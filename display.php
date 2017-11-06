<?php

include 'select.php';

class disp{
	public function __construct(){
		$totalRows=$statement->fetchAll();
		$this->dispTable($totalRows);
	}

	public function dispTable($e){
		echo '<table border=4>';

		print_r($e);
		echo '</tablle>';
	}
	

} 

?>
