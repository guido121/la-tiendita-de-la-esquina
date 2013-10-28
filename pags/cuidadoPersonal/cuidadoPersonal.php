	<div>
		<div id="listaAbarrotes">
			<li><a href="index.php?pag=cuiPer&item=pastaDent">Pasta dental</a></li>
			<li><a href="index.php?pag=cuiPer&item=jabones">Jabones</a></li>
			<li><a href="index.php?pag=cuiPer&item=shampoo">Productos para el cabello</a></li>
			<ul>
				<li><a href="index.php?pag=cuiPer&item=shampoo">Shampoo</a></li>
				<li><a href="index.php?pag=cuiPer&item=acond">Acondicionador</a></li>
				<li><a href="index.php?pag=cuiPer&item=cremPeinar">Crema para peinar</a></li>
			</ul>
				
				<li><a href="index.php?pag=cuiPer&item=desod">Desodorantes</a></li>
				<li><a href="index.php?pag=cuiPer&item=prodDepil">Productos depilatorios</a></li>
					
		</div>
				<div id="cuerpoAbarrotes">
				<?php
					$direccion ='';
				
					if(isset($_GET['item'])){
					
					$item = $_GET['item'];
					
						switch ($item){
							case 'pastaDent' : $direccion = 'pags/cuidadoPersonal/lineasProdCuidadoPersonal/pastaDental.php';
												break;
							case 'jabones' : $direccion = 'pags/cuidadoPersonal/lineasProdCuidadoPersonal/jabones.php';
												break;
							case 'shampoo' : $direccion = 'pags/cuidadoPersonal/lineasProdCuidadoPersonal/shampoo.php';
												break;
							case 'acond' : $direccion = 'pags/cuidadoPersonal/lineasProdCuidadoPersonal/acondicionador.php';
												break;
							case 'cremPeinar' : $direccion = 'pags/cuidadoPersonal/lineasProdCuidadoPersonal/cremaPeinar.php';
												break;
							case 'desod' : $direccion = 'pags/cuidadoPersonal/lineasProdCuidadoPersonal/desodorante.php';
												break;
							case 'prodDepil' : $direccion = 'pags/cuidadoPersonal/lineasProdCuidadoPersonal/productDepil.php';
												break;
												
						}
					}	
				
				
					include ($direccion);
				?>
				</div>
	</div>