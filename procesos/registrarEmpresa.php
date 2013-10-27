<?php
//include('conexionBD.php');
	include "config.php";
	include "funciones.php";
function verificar_ruc($ruc){
	$verificar = true;
	if(!isset($ruc)){
		$verificar = false;
	}
	if(!is_numeric($ruc)){
		$verificar = false;
	}
	if(strlen($ruc) != 11){
		$verificar = false;
	}
	
<<<<<<< HEAD
	$result = "SELECT FROM empresa WHERE ruc='".$ruc."'";
	$numero_filas = consulta_bd($resultado);
=======
	$resultado = "SELECT FROM empresa WHERE ruc='".$ruc."'";
	$numero_filas = mysql_num_rows($resultado);
>>>>>>> 16e78a08f45190c64e5e7b804218eae4dcaac472
	
	if(count($numero_filas) != 0){
		$verificar = false;
	}
	return $verificar;
}

function verificar_contrasenia($contrasenia1,$contrasenia2,$ruc){
	$verificar = true;
	if($contrasenia==""){
		$verificar = false;
	}
	if(count($contrasenia1) <= 6){
		$verificar = false;
	}
	if($contrasenia1 == $ruc){
		$verificar = false;
	}
	if($contrasenia1 != $contrasenia2){
		$verificar = false;
	}
	return $verificar;
}

function verificar_razonsocial($razonsocial){
	$verificar = true;
	if($razonsocial=="")){
		$verificar = false;
	}
	return $verificar;
}

function verificar_telefono($telefono){
	$verificar = true;
	if($telefono==""){
		$verificar = false;
	}
	if(!is_numeric($telefono)){
		$verificar = false;
	}
	return $verificar;
}

//se guardan los datos POST en variables que luego van a ser ingresadas en la bd
if(verificar_ruc($_POST['ruc'])){
	$ruc = $_POST['ruc'];
}
if(verificar_contrasenia($_POST['contrasenia1'],$_POST['contrasenia2'],$_POST['ruc'])){
	$contrasenia = $_POST['contrasenia'];
}
if(verificar_razonsocial($_POST['razonSoc'])){
	$razonSocial = $_POST['razonSoc'];
}
if(isset($_POST['dirFiscal'])){
	$direccionFiscal = $_POST['dirFiscal'];
}
if(verificar_telefono($_POST['telefono'])){
	$telefono = $_POST['telefono'];
}
if(isset($_POST['correo'])){
	$correo = $_POST['correo'];
}

/*
$ruc = (verificar_ruc($_POST['ruc']))? $_POST['ruc'];
$contrasenia = (verificar_contrasenia($_POST['contrasenia1'],$_POST['contrasenia2'],$_POST['ruc'])) ? $_POST['contrasenia'];
$razonSocial=(verificar_razonsocial($_POST['razonSoc'])) ? $_POST['razonSoc'];
$direccionFiscal= (isset($_POST['dirFiscal'])) ? $_POST['dirFiscal'];
$telefono=(verificar_telefono($_POST['telefono'])) ? $_POST['telefono'];
$correo = (isset($_POST['correo'])) ? $_POST['correo'];*/

$flagContactoCorreo=1;//$_POST[""];

$conn=conectarBD("localhost","marketBD","root","");
$rpta=operacion("INSERT INTO empresa(razonSocial,direccionFiscal,telefono,correo,flagContactoCorreo,ruc,contrasenia) VALUES('".$razonSocial."','".$direccionFiscal."','".$telefono."','".$correo."','".$flagContactoCorreo."','".$ruc."','".$contrasenia."')");
mysql_close($conn);


?>