<!doctype html>
<html>
	<head>
		<title>Test Catalogo</title>
		 <link href="estilo.css" type="text/css" rel="stylesheet"/>
		 <link href="bootstrap.css" type="text/css" rel="stylesheet"/>
		 <link href="bootstrap-responsive.css" type="text/css" rel="stylesheet"/>
	</head>
	<body>
		<div id="catalogo" class="container">
			<div id="subcategorias" data-spy="scroll">
				<?php
				 include ('pags/abarrotes/subcategorias_abarrotes.php'); 
				?> 				
			</div>
			<div id="paginasCatalogo">
				<?php
				 include ('pags/abarrotes/aceite.php'); 
				?>		
			</div>
			
		</div>
	</body>
</html>