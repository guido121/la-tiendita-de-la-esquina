<div>
<h1>Actualizar Datos</h1>

<form action="procesar/procesar_edicion.php" method="post">
	<label for="dni">
		RUC : <?php echo  $datos[0]['DNI']; ?>
		<input name="dni" type="hidden" value="<?php echo  $datos[0]['DNI'];?>" />
	</label></br>
	<label>Razon Social</label><input type="text" name="nombre" value="<? echo $datos[0]['Nombre'];?>"/></br>
	<label>Direccion Fiscal</label><input type="text" name="apellido" value="<? echo $datos[0]['Apellido'];?>"/></br>
	<label>Telefono</label><input type="text" name="edad" value="<? echo $datos[0]['Edad'];?>" />
	<label>Email</label><input type="text" name="edad" value="<? echo $datos[0]['Edad'];?>" />
	<input type="submit" value="Guardar"/>
</form>


</div>