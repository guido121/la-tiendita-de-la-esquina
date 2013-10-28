	<div>
		<div id="listaAbarrotes">
			<li><a href="index.php?pag=eltds&item=atun">Atún</a></li>
			<li><a href="index.php?pag=eltds&item=conservas">Conservas de Frutas</a></li>
			<li><a href="index.php?pag=eltds&item=mermelada">Mermelada</a></li>
			
					
		</div>
				<div id="cuerpoAbarrotes">
				<?php
					$direccion ='';
				
					if(isset($_GET['item'])){
					
					$item = $_GET['item'];
						
						switch ($item){
							case 'atun' : $direccion = 'pags/enlatados/lineasProdEnlatados/atun.php';
										break;
							case 'conservas' : $direccion = 'pags/enlatados/lineasProdEnlatados/conservas.php';
										break;
							case 'mermelada' : $direccion = 'pags/enlatados/lineasProdEnlatados/mermeladas.php';
										break;
										
						}
					}
				include ($direccion);
				?>
				</div>
	</div>