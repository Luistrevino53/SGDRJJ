<?php
	session_start();
	include '../conexion.php';
	$id=0;
	$nombre=$conexion->escape_string($_GET['nombre']);
	$area=$conexion->escape_string($_GET['area']);
	$objetivo=$conexion->escape_string($_GET['objetivo']);
	$lider=$_SESSION['clanero'];
	$date=time();
	$fecharegistro=date('Y-m-d',$date);
	echo $fecharegistro;

	if($c=$conexion->prepare('INSERT INTO proyecto VALUES(?,?,?,?,?,?,?)')){
		$c->bind_param('dsssdss',$id,$nombre,$objetivo,$lider,$area,$fecharegistro,$fecharegistro);
		$c->execute();
		echo 'aa';
	}else{
		echo 'Error al registrarse. intentalo mas tarde.'.$conexion->error;
	}
?>