<?php
session_start();
//include('conexionBD.php');
	include "config.php";
	include "funciones.php";

if(isset($_POST['contrasenia1']) && isset($_POST['contrasenia2']) && isset($_POST['razonSoc']) && isset($_POST['ruc']) && isset($_POST['dirFiscal']) && isset($_POST['correo']) && isset($_POST['telefono'])){
	$contrasenia1=$_POST['contrasenia1'];
	$contrasenia2=$_POST['contrasenia2'];
	$razonSocial=$_POST['razonSoc'];
	$ruc=$_POST['ruc'];
	$dirFiscal=$_POST['dirFiscal'];
	$correo=$_POST['correo']; 
	$telefono=$_POST['telefono'];
	$flagContactoCorreo=1;
	$verificar=true;
	$mensaje="";
		if(!is_numeric($ruc)){
			$verificar = false;
			$mensaje.=' -El ruc debe de ser num&eacute;rico';
		}
		if(strlen($ruc) != 11){
			$verificar = false;
			$mensaje.='<br/> -La longitud del ruc debe de ser de 11 digitos.';
		}
	//CONTRASENIA 1 y 2	
		if($contrasenia1 != $contrasenia2){
			$verificar = false;
			$mensaje.='<br/> -Las contrase&ntilde;as no coinciden.';
		}
		if($contrasenia1==""){
			$verificar = false;
			$mensaje.='<br/> -La primera contrase&ntilde;a no puede estar vac&iacute;a.';
		}
		if($contrasenia2==""){
			$verificar = false;
			$mensaje.='<br/> -La segunda contrase&ntilde;a no puede estar vac&iacute;a.';
		}		
		if(strlen($contrasenia1) <= 6){
			$verificar = false;
			$mensaje.='<br/> -La longitud m&iacute;nima de la contrase&ntilde;a es de 6.';
		}
		if($contrasenia1 == $ruc){
			$verificar = false;
			$mensaje.='<br/> -El nro de RUC no puede ser la contra&ntilde;a.';
		}
	
		//RAZON SOCIAL
		if($razonSocial==""){
			$verificar = false;
			$mensaje.='<br/> -El ruc no puede estar vac&iacite;o.';
		}
		//TELEFONO
		if($telefono==""){
			$verificar = false;
			$mensaje.='<br/> -El n&uacute;mero de tel&eacute;fono no puede estar vac&iacite;o.';
		}
		if(!is_numeric($telefono)){
			$verificar = false;
			$mensaje.='<br/> -El tel&eacute;fono debe de ser num&eacute;rico.';
		}
		if($verificar==true){
			$contrasenia1=md5($contrasenia1);
			consulta_bd_sin_resultados("INSERT INTO empresa(razonSocial,direccionFiscal,telefono,correo,flagContactoCorreo,ruc,contrasenia) VALUES('$razonSocial','$dirFiscal',$telefono,'$correo','$flagContactoCorreo',$ruc,'$contrasenia1')",$config);
			//mysql_close($conn);
			$mensaje="Se ha registrado satisfactoriamente";
	
		}
			$_SESSION["feedBackRegistro"]=$mensaje;
		
}
	//Se realizara redireccion cuando se accese por otro medio, ya que el formulario de registro siempre envía todos los parámetro a pesar de estar vacíos
	header("Location:../index.php?pag=registrate");


?>
		