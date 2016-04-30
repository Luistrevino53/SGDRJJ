
<?php 
	include '../conexion.php';
	if(!(isset($_GET) && !empty($_GET))){
		echo 'No hay datos';
	}
	$nombre= $conexion->escape_string($_GET['nombre']);
	$cum= $conexion->escape_string($_GET['cum']);
	$apellidop = $conexion->escape_string($_GET['apellidop']);
	$apellidom = $conexion->escape_string($_GET['apellidom']);
	$clan = $conexion->escape_string($_GET['clan']);
	$fecha = $conexion->escape_string($_GET['fecha']);
	$pass = $conexion->escape_string($_GET['pass']);
	$tel=0;
	$correo=0;

	echo $nombre.' '.$cum.' '.$apellidop.' '.$apellidom.' '.$clan.' '.$fecha.' '.$pass;
	if($c = $conexion->prepare('INSERT INTO clanero VALUES(?,?,?,?,?,?,?,?,?)')){
		$c->bind_param('ssssddsss',$cum,$nombre,$apellidop,$apellidom,$clan,$tel,$correo,$fecha,$pass);
		$c->execute();
		echo 'Completo';
	}else{
		die($conexion->error);
	}

?>