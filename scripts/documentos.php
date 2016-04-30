<?php  
	include 'conexion.php';
	$query='SELECT * FROM documentos ORDER BY fecha';
	if(!$c=$conexion->query($query)){
		die($conexion->error);
	}
	while($r=$c->fetch_array()){
		echo '<div class="resultados">';
		echo '<h1><a href="#" class="opc" data="'.$r['id'].'">'.$r['nombre'].'</a></h1>';
		echo '<br>'.$r['clanero'];	
		echo '</div>';
	}
?>