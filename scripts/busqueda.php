<?php 
	include 'conexion.php';

	sleep(1);
	$search = '';
	if(isset($_GET['palabra'])){
		$search = $_GET['palabra'];
	}

	$query='SELECT * FROM clanero WHERE nombre LIKE "%'.$search.'%" OR apellidop LIKE "%'.$search.'%" OR apellidom LIKE "%'.$search.'%" ORDER BY apellidop';

	if(!$c=$conexion->query($query)){
		die('Error: '.$conexion->error);
	}
	while($row=$c->fetch_array()){
		echo '<div class="panel panel-default">';
		echo '<div class="panel-body" id="infoClanero" value="'.$row['id.'">'.$row['nombre'].'</div></div>';
	}
?>
