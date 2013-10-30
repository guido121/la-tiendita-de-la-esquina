<?php 


function consulta_bd($consulta,$config){
		$conexion=mysql_connect($config['servidor'],
		$config['usuario'],
		$config['password']);
		if(!$conexion){
			die('No se pudo establecer conexion al servidor: ' . mysql_error());
		}
		$seleccion_bd = mysql_select_db($config['base_datos']);
		if(!$seleccion_bd){
			die('No se pudo establecer una conexion a la base de datos: ' . mysql_error());
		}
		$resultado=mysql_query($consulta);
		if(!$resultado){
			die('No se pudo ejecutar la consulta: ' . mysql_error());
		}
		$datos=array();
		while($fila = mysql_fetch_assoc($resultado)){
			$datos[]=$fila;
		}
		mysql_free_result($resultado);
		return $datos;

}
function consulta_bd_fetchByIndex($consulta,$config){
		$conexion=mysql_connect($config['servidor'],
		$config['usuario'],
		$config['password']);
		if(!$conexion){
			die('No se pudo establecer conexion al servidor: ' . mysql_error());
		}
		$seleccion_bd = mysql_select_db($config['base_datos']);
		if(!$seleccion_bd){
			die('No se pudo establecer una conexion a la base de datos: ' . mysql_error());
		}
		$resultado=mysql_query($consulta);
		if(!$resultado){
			die('No se pudo ejecutar la consulta: ' . mysql_error());
		}
		$datos=array();
		while($fila = mysql_fetch_array($resultado)){
			$datos[]=$fila;
		}
		mysql_free_result($resultado);
		return $datos;
}
function  consulta_bd_sin_resultados($consulta,$config){
		$conexion=mysql_connect($config['servidor'],
		$config['usuario'],
		$config['password']);
		if(!$conexion){
			die('No se pudo establecer conexion al servidor: ' . mysql_error());
		}
		$seleccion_bd = mysql_select_db($config['base_datos']);
		if(!$seleccion_bd){
			die('No se pudo establecer una conexion a la base de datos: ' . mysql_error());
		}
		$resultado=mysql_query($consulta);
	}
?>