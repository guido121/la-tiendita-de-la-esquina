$('document').ready(function(){
	/*---------SCRIPT DE INICIO DEFAULT--------*/
	//$(".form-error-msg").hide();
	//$("#msgVerifiqueCampos").hide();

	$('.nav-tabs > li').click(function(){
		$('.nav-tabs > li').removeClass('active');
		$(this).addClass('active');
	});

	//Formulario para inicio de sesion cuenta
	//$('#cForm-Acceder > form > div').hide();
	$('#cForm-Inicio').show();

	function mostrarCapaFormularioRegistro(button){
		var direccion=button.attr('div-target');
		$('#cForm-Acceder > form > div').hide();
		$(direccion).show();
	};
	/*----------VALIDACIONES FORMULARIO-------------*/
	/*
	//BOTONES DE RETROCESO
	$(".cForm-backButton").click(function(){
		mostrarCapaFormularioRegistro($(this));
	});
		
	//CAPA01
	$("#cForm-regist-next-welcome").click(function(){
		
		mostrarCapaFormularioRegistro($(this));

	});
	//CAPA02
	$("#cForm-regist-next-usuario").click(function(){
		mostrarCapaFormularioRegistro($(this));

	});
	//CAPA03
	$("#cForm-regist-next-contacto").click(function(){
		mostrarCapaFormularioRegistro($(this));
	});*/

	//CAMBIO DE PROPIEDADES POR RADIOBUTTONS DEL PRIMER BOTON
	/*$(".radiosAcceder").click(function(){
		var idReferenciaRadio = $(this).attr("div-target");
		var tipoBoton=$(this).attr("button-type");
		var docProcesos=$(this).attr("action-form");
		$('#cForm-regist-next-welcome').attr('div-target',idReferenciaRadio);
		$('#cForm-regist-next-welcome').attr('type',tipoBoton);
		$('#form-acceder-registro').attr('action',docProcesos);
	});*/
	//cForm-regist-next-welcome
	//cForm-regist-next-usuario
	//cForm-regist-next-contacto
	
	$('#myTab a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
	/*--------------AUTENTICAR USUARIO----------------*/
	$('#btnIniciarSesion').click(function(e){
		var array =new Object();
		array['ruc']=$('#txtRUCAcceder').val();
		array['contrasenia']=$('#txtContraseniaAcceder').val();
		e.preventDefault();
			$.ajax({
			type: 'post',
			url: 'procesos/autenticar.php',
			data: array,
			success: function(datos){
				//bootbox.alert(datos+"");
				var response = $.parseJSON(datos);

				if(response.errorInicio!=""){
					$('.inputRegistro').val('');
					$('#mensaje-error-inicioSesion').html(response.errorInicio);
				}else{
					$(location).attr('href','index.php'); 
				}
			},
			error: function(response) {
				bootbox.alert(response);
			 }
		});
	});
	/*--------------REGISTRAR EMPRESA------------------*/
	$('input#btnRegistrarEmpresa').click(function(e){
		//validaciones
		e.preventDefault();
		
		var array = new Object();
		array['contrasenia1']=$('input#contrasenia1').val();
		array['contrasenia2']=$('input#contrasenia2').val();
		array['ruc']=$('input#registro-empresa-ruc').val();
		array['razonSocial']=$('input#registro-empresa-razonSocial').val();
		array['ruc']=$('input#registro-empresa-ruc').val();
		array['telefono']=$('input#registro-empresa-telefono').val();
		array['direccionFiscal']=$('input#registro-empresa-direccionFiscal').val();
		array['correo']=$('input#registro-empresa-correo').val();
		var valorFlagContactamePorCorreo=0;
		if($('#checkbox-registro').is(':checked')){
			valorFlagContactamePorCorreo=1;
		}
		array['flagContactoCorreo']=valorFlagContactamePorCorreo;//$('input#registro-empresa-razonSocial').val();

		$.ajax({
			type: 'post',
			url: 'procesos/registrarEmpresa.php',
			data: array,
			success: function(datos){

				//bootbox.alert(datos+"");
				var response = $.parseJSON(datos);
				$('div#msgErrorPassword1').html('<p>'+ response.errorContrasenia+'</p>');
				$('div#msgErrorRazonSocial').html('<p>'+ response.errorRazonSocial+'</p>');
				$('div#msgErrorRuc').html('<p>'+ response.errorRuc+'</p>');
				$('div#msgErrorDireccionFiscal').html('<p>'+ response.errorDireccionFiscal+'</p>');
				$('div#msgErrorTelefono').html('<p>'+ response.errorTelefono+'</p>');
				$('div#msgErrorCorreo').html('<p>'+ response.errorCorreo+'</p>');
				if(response.confirmation!=""){
					$('.inputRegistro').val('');
					$('#confirmation').html('<p>'+response.confirmation+" Pulse <a href='index.php?pag=acceder'>aqu&iacute;</a> para comenzar.</p>");
					
				}
			},
			error: function(response) {
				bootbox.alert(response);
			 }
		});
	});
	
});