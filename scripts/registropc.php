<?php
	session_start();
	include 'conexion.php';

	$proyecto=$conexion->escape_string($_GET['id_proyecto']);
	$clanero=$_SESSION['clanero'];
	if($c=$conexion->prepare('INSERT INTO pc VALUES(?,?)')){
		$c->bind_param('ds',$proyecto,$clanero);
		$c->execute();
		$c->close();
		echo 'Registro Completado';
	}else{
		echo 'Error al registrarse. intentalo mas tarde.'.$conexion->error;
	}
?>