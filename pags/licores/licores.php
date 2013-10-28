	<div>
		<div id="listaAbarrotes">
			<li><a href="index.php?pag=licrs&item=whisky">Whisky</a></li>
			<li><a href="index.php?pag=licrs&item=ron">Ron</a></li>
			<li><a href="index.php?pag=licrs&item=clasica">Cerveza</a></li>
			<ul>
				<li><a href="index.php?pag=licrs&item=clasica">Clásica</a></li>
				<li><a href="index.php?pag=licrs&item=negra">Negra</a></li>
				<li><a href="index.php?pag=licrs&item=malta">Malta</a></li>
				<li><a href="index.php?pag=licrs&item=trigo">Trigo</a></li>	
			</ul>
				
				<li><a href="index.php?pag=licrs&item=vino">Vino</a></li>
				<li><a href="index.php?pag=licrs&item=pisco">Pisco</a></li>
					
		</div>
				<div id="cuerpoAbarrotes">
				<?php
					$direccion ='';
				
					if(isset($_GET['item'])){
					
					$item = $_GET['item'];
						
						switch ($item){
							case 'whisky' : $direccion = 'pags/licores/lineasProdLicores/whisky.php';
											break;
							case 'ron' : $direccion = 'pags/licores/lineasProdLicores/ron.php';
											break;
							case 'clasica' : $direccion = 'pags/licores/lineasProdLicores/clasica.php';
											break;
							case 'negra' : $direccion = 'pags/licores/lineasProdLicores/negra.php';
											break;
							case 'malta' : $direccion = 'pags/licores/lineasProdLicores/malta.php';
											break;
							case 'trigo' : $direccion = 'pags/licores/lineasProdLicores/trigo.php';
											break;
							case 'vino' : $direccion = 'pags/licores/lineasProdLicores/vino.php';
											break;
							case 'pisco' : $direccion = 'pags/licores/lineasProdLicores/pisco.php';
											break;
							
						}
					}
					
				include ($direccion);
				?>
				</div>
	</div>