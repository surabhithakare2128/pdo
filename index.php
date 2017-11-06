<?php

$dsn = 'mysql:dbname=st638; host=sql2.njit.edu';
$user = 'st638';
$pass = 'adhere54';

try{
	$dbh = new PDO($dsn, $user, $pass);
	$dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo 'Connected successfully. <br>';
}catch(PDOException $e){
	echo 'connection failed: ' . $e -> getMessage() . '<br>';
}
