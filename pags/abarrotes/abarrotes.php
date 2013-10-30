	<div>
		<div id="listaAbarrotes">
			<li><a href="#">Aceite de Oliva</a></li>
			<li><a href="#">Aceite Vegetal</a></li>
			<li><a href="#">Arroz</a></li>
			<ul>
				<li><a href="index.php?pag=abrt&&line=arrzXtra">Extra</a></li>
				<li><a href="#">Superior</a></li>
				<li><a href="#">Integral</a></li>
				<li><a href="#">Glaceado</a></li>	
			</ul>
				
				<li><a href="#">Azucar</a></li>
				<li><a href="#">etc</a></li>
					
		</div>
				<div id="cuerpoAbarrotes">
				<?php
				include ('pags/abarrotes/lineasProdAbarrotes/productosAbarrotes.php'); // obtiene div de pag/Categoria: "producto"+"lineaProducto.php"
				?>
				</div>
	</div>