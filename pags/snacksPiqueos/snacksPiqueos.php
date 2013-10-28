	<div>
		<div id="listaAbarrotes">
			<li><a href="index.php?pag=snkspqs&item=chizito">Snacks</a></li>
			<ul>
				<li><a href="index.php?pag=snkspqs&item=chizito">Chizitos</a></li>
				<li><a href="index.php?pag=snkspqs&item=chees">Cheesetrese</a></li>
				<li><a href="index.php?pag=snkspqs&item=tortees">Tortees</a></li>
				<li><a href="index.php?pag=snkspqs&item=cuates">Cuates</a></li>	
			</ul>
				
				<li><a href="index.php?pag=snkspqs&item=piqueos">Piqueos</a></li>
		</div>
				<div id="cuerpoAbarrotes">
				<?php
					$direccion ='';
				
					if(isset($_GET['item'])){
					
					$item = $_GET['item'];
						
						switch ($item){
							case 'chizito' : $direccion = 'pags/snacksPiqueos/lineasProdSnacksPiqueos/chizitos.php';
												break;
							case 'chees' : $direccion = 'pags/snacksPiqueos/lineasProdSnacksPiqueos/cheese.php';
												break;
							case 'tortees' : $direccion = 'pags/snacksPiqueos/lineasProdSnacksPiqueos/tortees.php';
												break;
							case 'cuates' : $direccion = 'pags/snacksPiqueos/lineasProdSnacksPiqueos/cuates.php';
												break;
							case 'piqueos' : $direccion = 'pags/snacksPiqueos/lineasProdSnacksPiqueos/piqueos.php';
												break;
												
						}
					}
				include ($direccion);
				?>
				</div>
	</div>