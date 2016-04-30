<?php
	session_start();
	include 'conexion.php';
	$query1='SELECT * FROM proyecto,evento ORDER BY proyecto.fecharegistro';
	if(!$c=$conexion->query($query1)){
		die('Ocurrió un error: [' . $conexion->error . ']');
	}
	while($row=$c->fetch_array()){
		echo $row['proyecto.nombre'];
	}
	
?>
