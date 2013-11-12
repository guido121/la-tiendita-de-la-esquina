<?

$ruc = $_SESSION['ruc'];

$consulta = "SELECT * FROM empresa WHERE codigoEmpresa = '$ruc'";
$datos = consulta_bd($consulta, $config);

?>


<div>

<h1>Actualizar Datos</h1>

<form action="./procesos/procesar_edicion.php" method="post">
	<label for="ruc">
		RUC : <?php echo  $datos[0]['ruc']; ?>
		<input name="ruc" type="hidden" value="<?php echo  $datos[0]['ruc'];?>" />
	</label></br>
	<label>Razon Social :</label><input type="text" name="razon_social" value="<? echo $datos[0]['razonSocial'];?>"/></br>
	<label>Direccion Fiscal :</label><input type="text" name="direc_fiscal" value="<? echo $datos[0]['direccionFiscal'];?>"/></br>
	<label>Telefono :</label><input type="text" name="telefono" value="<? echo $datos[0]['telefono'];?>" /></br>
	<label>Email :</label><input type="text" name="email" value="<? echo $datos[0]['correo'];?>" /></br>
	<input type="submit" value="Guardar"/>
</form>


</div>