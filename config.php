<?php 
	$hostname= "localhost";
	$user= "root";
	$password= "";
	$database= "monan";
	$link=mysqli_connect($hostname,$user,$password,$database);
	mysqli_set_charset($link,"UTF8");
?>