<?php
	$address='';
		if(isset($_GET['pag'])){
			$pag=$_GET['pag'];
			switch($pag){
				case 'regA':
					$address = 'pags/registroA.php';
				break;
			
				case 'registrate': //Registrarse
					$address='pags/registrarAcceder/registrate.php';
				break;
				case 'acceder': //Acceder
					$address='pags/registrarAcceder/formularioLoginRegistro.php';
				break;
				case 'car':   //Carrito
					$address='pags/carrito/carrito.php';
				break;
				case 'help': //Ayuda
					$address='pags/ayuda/seccionAyuda.php';
				break;
				case 'abrt': //Abarrotes
					$address='pags/abarrotes/abarrotes.php';
				break;
				case 'beb': //Bebidas
					$address='pags/bebidas/bebidas.php';
				break;
				case 'cuiPer': //Cuidado Personal
					$address='pags/cuidadoPersonal/cuidadoPersonal.php';
				break;
				case 'beb': //Bebidas
					$address='pags/bebidas/bebidas.php';
				break;
				case 'desy': //Desayuno
					$address='pags/desayuno/desayuno.php';
				break;
				case 'embt': //Embutidos
					$address='pags/embutidos/embutidos.php';
				break;
				case 'eltds': //Enlatados
					$address='pags/enlatados/enlatados.php';
				break;
				case 'glltgsn': //Galletas y golosinas
					$address='pags/galletasGolosinas/galletasGolosinas.php';
				break;
				case 'licrs': //Licores
					$address='pags/licores/licores.php';
				break;
				case 'lmpz': //Limpieza
					$address='pags/limpieza/limpieza.php';
				break;
				case 'snkspqs': //Snacks  y piqueos
					$address='pags/snacksPiqueos/snacksPiqueos.php';
				break;
				case 'nosotros': //Nosotros
					$address='pags/nosotros.php';
				break;
				case 'contactenos': //Contactenos
					$address='pags/contactenos.php';
				break;
				/*case 'mapaSitio': //Mapa de sitio
					$address='pags/mapaSitio.php';
				break;*/
				case 'infoLegal': //Informacion Legal
					$address='pags/informacionLegal.php';
				break;
				default:
						$address='pags/defaultPag.php';
				break;
				}
		}
		else{
			$address='pags/defaultPag.php';
		}
		include($address);
//		else
//ve si el usuario es nuevo y desea crear una nueva cuenta , y luego lo manda a la pag correspondiente
//Nota: lo toma como que no existe el directorio pags/registroB.php	
//		if(isset($_POST['estadoUsuario']) && isset($_POST['btn-acceder'])){
//			if($_POST['estadoUsuario'] == "nuevo" && $_POST['btn-acceder'] == "Continuar"){
//				$address ='pags/registroB.php';
//			}
//		}

?>