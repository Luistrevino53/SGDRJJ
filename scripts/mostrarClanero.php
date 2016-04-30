<?php 
	include 'conexion.php';
	$clanero=$_GET['clanero'];
	$query='SELECT * FROM clanero WHERE cum LIKE "'.$clanero.'"';
	if(!$c=$conexion->query($query)){
		die('Error: '.$conexion->error);
	}
	while($row=$c->fetch_array()){
		echo '<div class="container">';
			echo '<div id="imagenClanero">';
				echo '<img src="img/perfil/'.$clanero.'"> height="100px" width="100px"';
			echo '</div>';
			echo '<br>';
			echo 'Nombre: '.$row['apellidop'].' '.$row['apellidom'].' '.$row['nombre'];
			echo '<br>';
			echo 'Telefono: '.$row['telefono'];
			echo '<br>';
			echo 'Correo: '.$row['correo'];
		echo '</div>';
	}
?>