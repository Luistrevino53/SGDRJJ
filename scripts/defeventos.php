<?php
	include 'conexion.php';
	$query='SELECT * FROM evento ORDER BY fechaevento';

	if(!$c=$conexion->query($query)){
		die($conexion->error);
	}
	echo '<button id="nuevoevento" class="btn btn-info">Crea Un Evento</button>';
	while($r=$c->fetch_array()){
		echo '<div class="panel panel-default">';
		echo '<div class="panel-heading"><h3><a href="#" value="'.$r['idevento'].'">'.$r['nombre'].'</a></h3></div>';
		echo '<div class="panel-body"><h5>'.$r['descripcion'].'</h5></div>';
		echo '</div>';
	}
?>