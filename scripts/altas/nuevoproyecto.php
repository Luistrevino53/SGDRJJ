<?php
	include '../conexion.php';
	echo '<center>';
	echo '<form class="form-group">';
		echo '<input id="nombre" class="form-control" placeholder="Nombre del Proyecto" type="text">';
		echo '<br>';
		echo '<textarea id="objetivo" class="form-control" placeholder="Objetivo" style="margin: 0px; width: 344px; height: 151px;"></textarea>';
		echo '<br>';
		$query='SELECT * FROM area';
		if(!$c=$conexion->query($query)){
			die('Ocurrió un error: [' . $conexion->error . ']');
		}
		echo '<select class="form-control">';
		while($r=$c->fetch_array()){
			echo '<option class="area" value="'.$r['idarea'].'">'.$r['nombre'].'</option>';
		}
		echo '</select>';
		echo '<br>';
		echo '<input id="fecha" class="form-control" placeholder="Fecha a realizar">';
		echo '<br>';
		echo '<br>';
		echo '<button id="registrop" class="btn btn-primary">Registrar</button>';
	echo '</form>';
	echo '</center>';
?>
