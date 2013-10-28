	<div>
		<div id="listaAbarrotes">
			<li><a href="index.php?pag=embt&item=jamonada">Jamonada</a></li>
			<li><a href="index.php?pag=embt&item=chorizo">Chorizo</a></li>
			<li><a href="index.php?pag=embt&item=salchicha">Salchicha</a></li>				
			<li><a href="index.php?pag=embt&item=jamon">Jamón</a></li>
			<li><a href="index.php?pag=embt&item=hotdog">Hot-Dog</a></li>
					
		</div>
				<div id="cuerpoAbarrotes">
				<?php
				
					$direccion ='';
				
					if(isset($_GET['item'])){
					
					$item = $_GET['item'];
						
						switch ($item){
							case 'jamonada' : $direccion = 'pags/embutidos/lineasProdEmbutidos/jamonada.php';
												break;
							case 'chorizo' : $direccion = 'pags/embutidos/lineasProdEmbutidos/chorizo.php';
													break;
							case 'salchicha' : $direccion = 'pags/embutidos/lineasProdEmbutidos/salchicha.php';
													break;
							case 'jamon' : $direccion = 'pags/embutidos/lineasProdEmbutidos/jamon.php';
													break;
							case 'hotdog' : $direccion = 'pags/embutidos/lineasProdEmbutidos/hotdog.php';
													break;
							default : $direccion = 'pags/pagError.php';
											 break;
						}
					
					}
					include ($direccion);
				?>
				</div>
	</div>