$(document).ready(function(){
	$('.more').hide();
//proyectos inicio
	$('#proyecto').click(function(){
		$('.more').hide();
		$.get('scripts/proyecto.php',{nu:''},function(resp){
			$('.principal').html(resp);
		});
		return false;
	});


	$('.principal').on("click",".opc",function(){
		var id=$(this).attr("data");
		$.get('scripts/defproyecto.php',{id_proyecto:id},function(resp){
			$('.more').html(resp);
			$('.more').dialog({
				width: 590,             	
				height: 350,
            	show: "scale", 
            	hide: "scale",
            	resizable: "false", 
            	position: "center",
            	modal: "true"
			});
		});
		return false;
	});


	$('.principal').on('click','#clan',function(){
		var id=$(this).attr("value");
		$.get('scripts/defclanes.php',{id_clan:id},function(resp){
			alert(resp);
			$('.more').html(resp);
			$('.more').dialog({
				width: 590,             	
				height: 350,
            	show: "scale", 
            	hide: "scale",
            	resizable: "false", 
            	position: "center",
            	modal: "true"
			});
		});
		return false;
	});


	$('#inicio').click(function(){
		$('.more').hide();
		$.get('scripts/inicio.php',function(resp){
			$('.principal').html(resp);
		})
		return false;
	});


	$('#clan').click(function(){
		$('.more').hide();
		$.get('scripts/clanes.php',function(resp){
			$('.principal').html(resp);
		});
		return false;
	});



	$('.more').on("click","#registro",function(){
		var proyecto=$(this).val();
		$.get('scripts/registropc.php',{id_proyecto:proyecto},function(resp){
			alert(resp);
		});
		return false;
	});

	$('.principal').on('click','#nuevoproyecto',function(){
		$.get('scripts/altas/nuevoproyecto.php',function(resp){
			$('.more').html(resp);
			$('.more').dialog({
				width: 590,             	
				height: 350,
            	show: "scale", 
            	hide: "scale",
            	resizable: "false", 
            	position: "center",
            	modal: "true"
			});
		});
		return false;
	});

	$('.more').on('click','#registrop',function(){
		var nombrepro=$('#nombre').val();
		var objetivopro=$('#objetivo').val();
		var areapro=$('.area').val();
		alert(nombrepro+' '+objetivopro+' '+areapro);
		$.get('scripts/altas/altaproyecto.php',{nombre:nombrepro, objetivo:objetivopro, area:areapro},function(resp){
			alert(resp);
			if(resp.indexOf('aa') > -1){
				alert('Proyecto Registrado');
			}else{
				$('#principal').html(resp);
			}
		});
		return false;
	});

	$('#eventos').click(function(){
		$('.more').hide();
		$.get('scripts/defeventos.php',function(resp){
			$('.principal').html(resp);
		});
		return false;
	});

	$('#nuevoevento').on('click',function(){
		$.get('scripts/formevento.php',function(resp){
			$('.more').html(resp);
		});
		return false;
	});

	$('.principal').on('click','#nuevoevento',function(){
		$.get('scripts/formeventos.php',function(resp){
			$('.more').html(resp);
			$('.more').dialog({
				width: 590,             	
				height: 350,
            	show: "scale", 
            	hide: "scale",
            	resizable: "false", 
            	position: "center",
            	modal: "true"
			});
		});
		return false;
	});

	$('.more').on('click','#aceptarevento',function(){
		var nombreeevt=$('#nombreevento').val();
		var descripcioneevt=$('#descripcionevento').val();
		var fechainicioeevt=$('#Fechainicioevento').val();
		var proyectoeevt=$('.proyectoevento').val();
		var areaeevt=$('.areaevento').val();
		alert(nombreeevt+' '+descripcioneevt+' '+fechainicioeevt+' '+proyectoeevt+' '+areaeevt);
		$.get('scripts/altas/nuevoevento.php',{nombre:nombreeevt,descripcion:descripcioneevt,fecha:fechainicioeevt,proyecto:proyectoeevt,area:areaeevt},function(resp){
			if(resp.indexOf('aa') > -1){
				alert('Correcto');
			}else{
				alert(resp);
			}
		});
		return false;
	});

	$('#prin').css({"height": '500px'});

	var flag=false;
	var scroll;

	$(window).scroll(function(){
		scroll = $(window).scrollTop();

		if(scroll > 50){
			if(!flag){
				$('#logo').css({'margin-top': '-5px', 'width': '50px', 'height': '50px'});
				$('ul a').css({'color': '#FFF'});	
				flag = true;
				$('header').css({'background-color': '#3C3C3C'});
			}
		}else{
			if(flag){
				$('#logo').css({'margin-top': '150px', 'width': '250px', 'height': '250px'});
				$('ul a').css({'color': '#000'});
				flag = false;	
				$('header').css({'background-color': 'transparent'});
			}
			

		}
	});
//codigo para busqueda de usuarios...
	
	//bloqueamos el enter para que no envie el formulario...


	//Busqueda de usuarios al precionar una tecla...
	$('#buscador').keyup(function(){
		var busqueda = $('#buscador').val();

		$('.principal').html('<h2><img src="img/cargar.gif"  alt="" /></h2>');

		$.get('scripts/busqueda.php',{palabra:busqueda},function(resp){
			$('.principal').html(resp);
		});
		return false;
	});

	//Documentos...

	//Mostramos los documentos...
	$('#documentos').click(function(){
		$.get('scripts/documentos.php',function(resp){
			$('.principal').html(resp);
		});
	});
	return false;

	
});

//Mostrar informacion de los claneros
	$('.more').on('click','#consulclanero',function(){
		clanero=$(this).val();
		$.get('scripts/mostrarClanero.php',{clanero:clanero},function(resp){
			$('.more').html(resp);
			$('.more').dialog({
				width: 590,             	
				height: 350,
            	show: "scale", 
            	hide: "scale",
            	resizable: "false", 
            	position: "center",
            	modal: "true"
			});
		});
	});


$(function(){
	$('#fecha').datepicker();
	$( "#fecha" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
});