<?php
	session_start();
	if (!isset($_SESSION['usuario'])) {
		header("loaction:/index.php");
	}
	include 'conexion.php';
	$id=$conexion->escape_string($_GET['id_clan']);
	$query='SELECT * FROM clan WHERE id="'.$id.'"';
	if(!$c=$conexion->query($query)){
		die('Ocurrió un error: [' . $conexion->error . ']');
	}
	$query3='SELECT * FROM clanero WHERE clan='.$id;
	if(!$c3=$conexion->query($query3)){
		die('Ocurrió un error: [' . $conexion->error . ']');
	}
	while($r=$c->fetch_array()){
		echo '<h3>Promotor del Clan</h3>';
		$query2='SELECT * FROM clanero WHERE cum="'.$r['promotor'].'"';
		if(!$c2=$conexion->query($query2)){
			die('Ocurrió un error: [' . $conexion->error . ']');
		}
		while($r2=$c2->fetch_array()){
			echo $r2['nombre'].' '.$r2['apellidop'].' '.$r2['apellidom'];
		}
		echo '<h3>Grupo:</h3>';
		$query4 ='SELECT * FROM grupo WHERE idgrupo='.$r['grupo'];
		if(!$c4=$conexion->query($query4)){
			die('Ocurrió un error: [' . $conexion->error . ']');
		}
		while($r4=$c4->fetch_array()){
			echo $r4['nombre'];
		}
		echo '<h3>Integrantes:</h3>';
		while ($r3=$c3->fetch_array()) {
			echo '<a href="#" value="'.$r3['cum'].'" id="consulclanero">';
			echo $r3['nombre'].' '.$r3['apellidop'].' '.$r3['apellidom'];
			echo '</a><br>'	;
		}
	}
?>