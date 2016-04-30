<?php 
	session_start();
	include '../conexion.php';
	$id=0;
	$nombre=$conexion->escape_string($_GET['nombre']);
	$descripcion=$conexion->escape_string($_GET['descripcion']);
	$fecha=$conexion->escape_string($_GET['fecha']);
	$proyecto=$conexion->escape_string($_GET['proyecto']);
	$area=$conexion->escape_string($_GET['area']);
	$date=time();
	$fechahoy=date('Y-m-d',$date);
	$clanero=$conexion->escape_string($_SESSION['clanero']);

	if($c=$conexion->prepare('INSERT INTO evento VALUES(?,?,?,?,?,?,?,?)')){
		$c->bind_param('dsssdssd',$id,$nombre,$descripcion,$clanero,$area,$fechahoy,$fecha,$proyecto);
		$c->execute();
		echo 'aa';
	}else{
		echo 'Error al registrarse. intentalo mas tarde.'.$conexion->error;
	}
?>