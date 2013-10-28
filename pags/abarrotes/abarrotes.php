	<div>
		<div id="listaAbarrotes">
			<li><a href="index.php?pag=abrt&item=aceiteOlv">Aceite de Oliva</a></li>
			<li><a href="index.php?pag=abrt&item=aceiteVeg">Aceite Vegetal</a></li>
			<li><a href="index.php?pag=abrt&item=arrozExt">Arroz</a></li>
			<ul>
				<li><a href="index.php?pag=abrt&item=arrozExt">Extra</a></li>
				<li><a href="index.php?pag=abrt&item=arrozSup">Superior</a></li>
				<li><a href="index.php?pag=abrt&item=arrozInt">Integral</a></li>
				<li><a href="index.php?pag=abrt&item=arrozGla">Glaceado</a></li>	
			</ul>
				
				<li><a href="index.php?pag=abrt&item=azucar">Azucar</a></li>
					
		</div>
				<div id="cuerpoAbarrotes">
				<?php
					$direccion ='';
				
					if(isset($_GET['item'])){
					
					$item = $_GET['item'];
						
						switch ($item){
							case 'aceiteOlv' : $direccion = 'pags/abarrotes/lineasProdAbarrotes/AceitedeOliva.php';
											 break;
							case 'aceiteVeg' : $direccion = 'pags/abarrotes/lineasProdAbarrotes/AceiteVegetal.php';
											 break;
							case 'arrozExt' : $direccion = 'pags/abarrotes/lineasProdAbarrotes/ArrozExtra.php';
											 break;
							case 'arrozSup' : $direccion = 'pags/abarrotes/lineasProdAbarrotes/ArrozSuperior.php';
											 break;
							case 'arrozInt' : $direccion = 'pags/abarrotes/lineasProdAbarrotes/ArrozIntegral.php';
											 break;
							case 'arrozGla' : $direccion = 'pags/abarrotes/lineasProdAbarrotes/ArrozGlaceado.php';
											 break;
							case 'azucar' : $direccion = 'pags/abarrotes/lineasProdAbarrotes/Azucar.php';
											 break;
							default : $direccion = 'pags/pagError.php';
											 break;
								
						}
					
					}
					
				
								include ($direccion); 
				?>
				</div>
	</div>