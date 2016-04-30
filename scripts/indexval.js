$(document).ready(function(){
	$('.registro').hide();
	$('#nuevoclanero').click(function(){
		$('.registro').show();
		return(false);
	});

	$('#boton').click(function(){
		var cum = $('#cum').val();
		var pass = $('#contrasena').val();
		alert(cum +' '+ pass);
		$.get('scripts/loggin.php',{i_cum:cum, i_pass:pass},function(resp){
			if(resp.indexOf('Usuario Correcto')> -1){
				alert('Bienvenido');
				document.location.href = 'inicio.php';
			}else{
				alert('Usuario o Contraseña incorrectas');
			}
		});
		return false;
	});

	

	$('.registro').submit(function(e){
		var cum2 = $('#cum2').val();
		var pass2 = $('#pass').val();
		var nombre = $('#nombre').val();
		var apellidop = $('#apellidop').val();
		var apellidom = $('#apellidom').val();
		var clan = $('#opcion').val();
		var fecha = $('#fecha').val();
		alert(cum2+' '+nombre+' '+apellidop+' '+apellidom+' '+clan+' '+pass2);
		$.get('scripts/altas/nuevoclanero.php',{cum:cum2,pass:pass2,nombre:nombre,apellidop:apellidop,apellidom:apellidom,clan:clan, fecha:fecha},function(resp){
			if(resp.indexOf('Completo')> -1){
				alert('Usuario registrado');
				//document.location.href = 'inicio.php';
			}else{
				alert(resp);
			}
		});
		e.preventDefault();
	});
});
$(function(){
	$('#fecha').datepicker();
	$( "#fecha" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
    
});