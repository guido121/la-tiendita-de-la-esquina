<?
	$direccion='';
	if(!isset($_GET['pag'])){
		$direccion='pags/ayuda/ayudaRegistro.php';
	} else{
		$seccion=$_GET['pag'];
		switch($seccion){
			case 'beneficios': //Beneficios
				$direccion='./../pags/ayuda/beneficios.php';
			break;
			case 'comprar': //Comprar
				$direccion='./../pags/ayuda/comprar.php';
			break;
			case 'formasPago': //Formas de Pago
				$direccion='/pags/ayuda/formasPago.php';
			break;
			case 'preguntasFrecuentes': //Preguntas Frecuentes
				$direccion='/pags/ayuda/preguntasFrecuentes.php';
			break;
			case 'ayudaRegistro': //Ayuda de Registro
				$direccion='./../pags/ayuda/ayudaRegistro.php';
			break;
		}
	}
	include ($direccion);
	
?>