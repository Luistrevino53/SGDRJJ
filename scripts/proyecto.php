<?php
	session_start();
	include 'conexion.php';
	$query='SELECT * FROM proyecto';
	if(!$res=$conexion->query($query)){
		die('Ocurrió un error: [' . $conexion->error . ']');
	}
	echo '<button id="nuevoproyecto" class="btn btn-info">Registra Un Nuevo Proyecto</button>';
	while($row=$res->fetch_array()){
		echo '<div class="panel panel-default">';
		echo '<div class="panel-heading"><h1><a href="#" class="opc" data="'.$row['idproyecto'].'">'.$row['nombre'].'</a></h1></div>';
		echo '<div class="panel-body">'.$row['objetivo'].'</div>';	
		echo '</div>';
	}

?>