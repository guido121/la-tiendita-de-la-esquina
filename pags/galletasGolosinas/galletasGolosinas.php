	<div>
		<div id="listaAbarrotes">
			<li><a href="index.php?pag=glltgsn&item=chocolates">Chocolates</a></li>
			<li><a href="index.php?pag=glltgsn&item=carychup">Caramelos y Chupetines</a></li>
			<li><a href="index.php?pag=glltgsn&item=saladas">Galletas</a></li>
			<ul>
				<li><a href="index.php?pag=glltgsn&item=saladas">Saladas</a></li>
				<li><a href="index.php?pag=glltgsn&item=dulces">Dulces</a></li>
				<li><a href="index.php?pag=glltgsn&item=integrales">Integrales</a></li>	
			</ul>
					
		</div>
				<div id="cuerpoAbarrotes">
				<?php
				
					$direccion ='';
				
					if(isset($_GET['item'])){
					
					$item = $_GET['item'];
						
						switch ($item){
							case 'chocolates' : $direccion = 'pags/galletasGolosinas/lineasProdGalletasGolosinas/chocolates.php';
															break;
							case 'carychup' : $direccion = 'pags/galletasGolosinas/lineasProdGalletasGolosinas/caramelos.php';
															break;
							case 'saladas' : $direccion = 'pags/galletasGolosinas/lineasProdGalletasGolosinas/saladas.php';
															break;
							case 'dulces' : $direccion = 'pags/galletasGolosinas/lineasProdGalletasGolosinas/dulces.php';
															break;
							case 'integrales' : $direccion = 'pags/galletasGolosinas/lineasProdGalletasGolosinas/integrales.php';
															break;
							
							
						}
					}
				include ($direccion);
				?>
				</div>
	</div>