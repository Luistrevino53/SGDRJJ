<?php
	include 'conexion.php';
	$query="SELECT * FROM clan";

	$r=$conexion->query($query);
	while ($row=$r->fetch_array()) {
		echo '<div class="panel panel-default">';
		echo '<div class="panel-body"><a href="#" id="clan" value="'.$row['id'].'">'.$row['nombre'].'</a></div>';
		echo '</div>';
	}
?>