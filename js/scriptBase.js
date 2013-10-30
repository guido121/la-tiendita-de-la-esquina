$('document').ready(function(){
//INICIAL ELEMENTOS NO VISIBLES
$(".form-error-msg").hide();
$("#msgVerifiqueCampos").hide();

	$('.nav-tabs > li').click(function(){
		$('.nav-tabs > li').removeClass('active');
		$(this).addClass('active');
	});

	//Formulario para inicio de sesion cuenta
	$('#cForm-Acceder > form > div').hide();
	$('#cForm-Inicio').show();

	function mostrarCapaFormularioRegistro(button){
		var direccion=button.attr('div-target');
		$('#cForm-Acceder > form > div').hide();
		$(direccion).show();
	};
	/*----------VALIDACIONES FORMULARIO-------------*/
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

	});

	//CAMBIO DE PROPIEDADES POR RADIOBUTTONS DEL PRIMER BOTON
	$(".radiosAcceder").click(function(){
		var idReferenciaRadio = $(this).attr("div-target");
		var tipoBoton=$(this).attr("button-type");
		var docProcesos=$(this).attr("action-form");
		$('#cForm-regist-next-welcome').attr('div-target',idReferenciaRadio);
		$('#cForm-regist-next-welcome').attr('type',tipoBoton);
		$('#form-acceder-registro').attr('action',docProcesos);
	});
	//cForm-regist-next-welcome
	//cForm-regist-next-usuario
	//cForm-regist-next-contacto
	
	$('#myTab a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
	$('#btnIniciarSesion').click(function(e){
	$(".form-error-msg").hide();
	$("#msgVerifiqueCampos").hide();
	var ok=true;
	var ruc=$("#txtRUCAcceder").val();
	var contrasenia=$("#txtContraseniaAcceder").val();
	if(ruc==""){
		$("#errorRUC").show();
		ok=false;
	}
		if(contrasenia==""){
		$("#errorContrasenia").show();
		ok=false;
	}
	if(ok==false){
		$("#msgVerifiqueCampos").show();
		e.preventDefault();
	}
	});
});