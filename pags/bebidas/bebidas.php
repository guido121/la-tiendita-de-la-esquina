	<div>
		<div id="listaAbarrotes">
			<li><a href="index.php?pag=beb&item=gaseosa">Gaseosas</a></li>
			<li><a href="index.php?pag=beb&item=bebHidra">Bebidas hidratantes</a></li>
			<li><a href="index.php?pag=beb&item=yogurt">Lacteos</a></li>
			<ul>
				<li><a href="index.php?pag=beb&item=yogurt">Yogurt</a></li>
				<li><a href="index.php?pag=beb&item=leche">Leche</a></li>
			</ul>
				
				<li><a href="index.php?pag=beb&item=frugos">Frugos</a></li>
				<li><a href="index.php?pag=beb&item=agua">Agua</a></li>
					
		</div>
				<div id="cuerpoAbarrotes">
				<?php
					$direccion ='';
				
					if(isset($_GET['item'])){
					
					$item = $_GET['item'];
						
						switch ($item){
							case 'gaseosa' : $direccion = 'pags/bebidas/lineasProdBebidas/gaseosas.php';
											break;
							case 'bebHidra' : $direccion = 'pags/bebidas/lineasProdBebidas/bebidasHidratantes.php';
											break;
							case 'yogurt' : $direccion = 'pags/bebidas/lineasProdBebidas/yogurt.php';
											break;
							case 'leche' : $direccion = 'pags/bebidas/lineasProdBebidas/leche.php';
											break;
							case 'frugos' : $direccion = 'pags/bebidas/lineasProdBebidas/frugos.php';
											break;
							case 'agua' : $direccion = 'pags/bebidas/lineasProdBebidas/agua.php';
											break;
							default : $direccion = 'pags/pagError.php';
											 break;
											
						}
					}
					
					include ($direccion);
				?>
				</div>
	</div>