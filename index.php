<?php include 'scripts/conexion.php'; 
	$query='SELECT * FROM clan';
	if(!$c=$conexion->query($query)){
		die('Ocurrio un error ['.$conexion->error.']');
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Iniciar Secion</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script type="text/javascript" src="scripts/jquery-2.1.4.min.js"></script>
	<script src="../proyecto/jqueryui/jquery-ui.js"></script>
	<script type="text/javascript" src="scripts/indexval.js"></script>	
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
</head>
<body>
	<div class="contenedor">
	<div class="aa">
			<form class="form-inline">
				<input type="text" id="cum" class="form-control" placeholder="Escribe tu CUM">
				<input type="password" id="contrasena" class="form-control" placeholder="contraseña">
				<button id="boton" class="btn btn-primary">Ingresar</button>
				<button id="nuevoclanero" class="btn btn-info">Registrate</button>
			</form>
	</div>
	</div>
	<div id="cont">
		
	</div>
	<div id="form" class="container">
	<center>
		<form class="registro form-group">
		<br><br>
				<input type="text" id="cum2" class="form-control" placeholder="Escribe tu cum"><br><br>
				<input type="password" id="pass" class="form-control" placeholder="Escribe una contraseña"><br><br>
				<input type="text" id="nombre" class="form-control" placeholder="Escribe tu Nombre"><br><br>
				<input type="text" id="apellidop" class="form-control" placeholder="Escribe tu Apellido Paterno"><br><br>
				<input type="text" id="apellidom" class="form-control" placeholder="Escribe tu Apellido Materno"><br><br>
				<input type="text" id="fecha" class="form-control" placeholder="Ingresa la fecha de tu nacimiento"></input><br><br>
				<select id="clan" class="form-control">
					<option>Elije el clan al que perteneces</option>
					<?php 
						while($row=$c->fetch_array()){
							echo '<option value="'.$row['id'].'" id="opcion">'.$row['nombre'].'</option>';
						}
					?>
				</select><br><br>	
				<button id="aceptar" class="btn btn-primary btn-lg btn-block">Aceptar</button><br>
			</form>
	</center>
	</div>
	<div class="info">
		<p>aqui va info</p>
	</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>