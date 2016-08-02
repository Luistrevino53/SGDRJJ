<?php  
	include 'conexion.php';
	$query='SELECT  
				d.titulo,
				d.ruta,
				c.nombre, 
				c.apellidop,
				c.apellidom,
				n.nombre as clan
	FROM documentos d JOIN clanero c ON d.clanero_id = c.cum JOIN clan n ON c.clan = n.id';
	if(!$c=$conexion->query($query)){
		echo $conexion->error;
	}
	echo '<button class="btn btn-info">Subir Documento</button>';
	echo '<div class="panel panel-default">';
	echo '<div class="panel-body">';
	while ($r=$c->fetch_array()) {
		echo $r['titulo'].' '.$r['nombre'];
	}
	echo '</div></div>';
?>