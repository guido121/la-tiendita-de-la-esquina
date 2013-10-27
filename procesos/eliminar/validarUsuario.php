<?php 
	include("conexionBD.php");
	$conn=conectarBD("localhost","marketBD","root","");
	$rpta=consultar("SELECT * FROM empresa",$conn);
	var_dump($rpta);
	mysql_close($conn);
?>