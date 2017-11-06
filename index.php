<?php

include 'establishCon.php';
include 'select.php';
include 'display.php';

$obj = new main();

class main{
	public function __construct(){
		new accounts;
	}
}
?>
