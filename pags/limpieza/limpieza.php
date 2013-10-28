	<div>
		<div id="listaAbarrotes">
			<li><a href="index.php?pag=lmpz&item=deter">Detergentes</a></li>
			<li><a href="index.php?pag=lmpz&item=lejia">Lejías</a></li>
			<li><a href="index.php?pag=lmpz&item=jabon">Jabón de Ropa</a></li>
			<li><a href="index.php?pag=lmpz&item=suavizante">Suavizante</a></li>
			<li><a href="index.php?pag=lmpz&item=papel">Papel Higiénico</a></li>
					
		</div>
				<div id="cuerpoAbarrotes">
				<?php
					$direccion ='';
				
					if(isset($_GET['item'])){
					
					$item = $_GET['item'];
						
						switch ($item){
							case 'deter' : $direccion = 'pags/limpieza/lineasProdLimpieza/detergentes.php';
											break;
							case 'lejia' : $direccion = 'pags/limpieza/lineasProdLimpieza/lejia.php';
											break;
							case 'jabon' : $direccion = 'pags/limpieza/lineasProdLimpieza/jabonRopa.php';
											break;
							case 'suavizante' : $direccion = 'pags/limpieza/lineasProdLimpieza/suavizante.php';
											break;
							case 'papel' : $direccion = 'pags/limpieza/lineasProdLimpieza/papelHigienico.php';
											break;
							
							
						}
					}
				include ($direccion);
				?>
				</div>
	</div>