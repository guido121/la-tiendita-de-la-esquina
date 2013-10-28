	<div>
		<div id="listaAbarrotes">
			<li><a href="index.php?pag=desy&item=infusiones">Infusiones</a></li>
			<li><a href="index.php?pag=desy&item=molde">Pan</a></li>
			<ul>
				<li><a href="index.php?pag=desy&item=molde">Molde</a></li>
				<li><a href="index.php?pag=desy&item=normal">Normal</a></li>
				<li><a href="index.php?pag=desy&item=integral">Integral</a></li>
			</ul>
			
				<li><a href="index.php?pag=desy&item=combo1">Combo1</a></li>				
				<li><a href="index.php?pag=desy&item=combo2">Combo2</a></li>
				<li><a href="index.php?pag=desy&item=combo3">Combo3</a></li>
					
		</div>
				<div id="cuerpoAbarrotes">
				<?php
					$direccion ='';
				
					if(isset($_GET['item'])){
					
					$item = $_GET['item'];
					
						switch ($item){
							case 'infusiones' : $direccion = 'pags/desayuno/lineasProdDesayuno/infusiones.php';
												break;
							case 'molde' : $direccion = 'pags/desayuno/lineasProdDesayuno/molde.php';
												break;
							case 'normal' : $direccion = 'pags/desayuno/lineasProdDesayuno/normal.php';
												break;
							case 'integral' : $direccion = 'pags/desayuno/lineasProdDesayuno/integral.php';
												break;
							case 'combo1' : $direccion = 'pags/desayuno/lineasProdDesayuno/combo1.php';
												break;
							case 'combo2' : $direccion = 'pags/desayuno/lineasProdDesayuno/combo2.php';
												break;
							case 'combo3' : $direccion = 'pags/desayuno/lineasProdDesayuno/combo3.php';
												break;
												
						}
					}
				include ($direccion);
				
				?>
				</div>
	</div>