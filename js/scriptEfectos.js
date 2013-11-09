$('document').ready(function(){	
	//Porción para todos los Tabs
	$('#myTab a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	});
	
});