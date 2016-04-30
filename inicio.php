<?php session_start();
	if(!isset($_SESSION['clanero'])){
		header("Location:index.php");
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="estilos/inicio.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="scripts/jquery-2.1.4.min.js"></script>
	<script src="../proyecto/jqueryui/jquery-ui.js"></script>
	<script type="text/javascript" src="scripts/inicio.js"></script>
</head>
<body>
	<header>
		<nav>
			<div class="imgperfil">
				<?php 
					echo '<img src="img/perfil/'.$_SESSION['clanero'].'.jpg" height="50px" width="50px">'
				?>
			</div>
			<ul>
				<li id="documentos"><a href="#/inicio">Documentos</a></li>
				<li id="clan"><a href="#/clanes">Clanes</a></li>
			</ul>
				<img src="img/logo.png" id="logo" height="250px" width="250px">
			<ul>
				<li id="proyecto"><a href="">Proyectos</a></li>
				<li id="eventos"><a href="">Eventos</a></li>

			</ul>
			<div class="buscador">
					<form id="form-buscador" class="form-inline">
						<input type="text" id="buscador" class="form-control" placeholder="Buscar..." />
						<a href="scripts/cerrarsesion.php" class="btn btn-danger" id="cerrarsesion">Cerrar Sesion</a>
					</form>
				</div>
				
		</nav>
	</header>
	<section id="prin">
		
	</section>
			
	
	<div class="principal container"></div>
	<section class="more"></section>
	<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>