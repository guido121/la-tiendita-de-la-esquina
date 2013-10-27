<?php
session_start();
include "config.php";
include "funciones.php";
if(isset($_POST['ruc']) && isset($_POST['claveAcceso'])){

	$ruc=$_POST["ruc"];
	$password=$_POST["claveAcceso"];
	$companyWithOpenedSession=consulta_bd_fetchByIndex("SELECT * FROM empresa WHERE ruc='$ruc' AND contrasenia='$password'",$config);
	if(count($companyWithOpenedSession)>0){
		$element=$companyWithOpenedSession[0];
			//$_SESSION["codigoEmpresa"]=
			$_SESSION["objUsuarioEmpresa"]=$element;
			$_SESSION["razonSocial"]=$element["razonSocial"];
			$_SESSION["autenticado"]=true;
		}else{
		$_SESSION["autenticado"]=false;
			header("Location: ../index.php?pag=loginRegist");
			die;	
		}
}
	header("Location:../index.php");
?>