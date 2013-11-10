<?php
	$consulta = "SELECT * FROM producto WHERE codigosubCategoria LIKE '3' AND codigoMarca LIKE '81'";
	$personas = consulta_bd($consulta, $config);
?>

<div id="primeraPagina" class="scroll">


	<div id="contenedor_imagenes">
	
		<?php foreach ($personas as $p) { ?>
			
		<div id="imagenes">
			<div id="img" class="imagenMarco">
				<img src="<?php echo $p['direccionImagen']; ?>">
				<p> S/.<?php echo $p['precioUnitario']; ?> la unidad </p>	
			</div>
			
			<div id="detalle img">
				<p> <?php echo $p['nombreProducto']; ?></p>
				<p> <?php echo $p['unidadesCaja']; ?> unidades x <?php echo $p['tamanioUnidad']; echo $p['unidadMedida'];?></p>	
				<p> S/.<?php echo $p['precioCaja']; ?></p>
			</div>
		</div>
		
		<?php } ?>
		
	
</div>		