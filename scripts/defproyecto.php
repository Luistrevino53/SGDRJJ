<?php
	session_start();
	if (!isset($_SESSION['usuario'])) {
		header("loaction:/index.php");
	}
	include 'conexion.php';
	$id=$conexion->escape_string($_GET['id_proyecto']);

	$query='SELECT * FROM proyecto WHERE idproyecto='.$id;
	$c=$conexion->query($query);
	while($row=$c->fetch_array()){
		echo '<h3>'.$row['nombre'].'</h3>';
		echo '<h3>'.$row['objetivo'].'</h3>';
		$query2='SELECT * FROM clanero WHERE cum="'.$row['lider'].'"';
		if(!$c2=$conexion->query($query2)){
			die('Ocurrió un error: [' . $conexion->error . ']');
		}
		while($r2=$c2->fetch_array()){
			echo '<h3>'.$r2['nombre'].' '.$r2['apellidop'].' '.$r2['apellidom'].'</h3>';
		}

		$query3='SELECT * FROM pc WHERE proyecto='.$row['idproyecto'];
		if(!$c3=$conexion->query($query3)){
			die('Ocurrio un error: ['.$conexion->error.']');
		}
		while($r3=$c3->fetch_array()){
			$query4='SELECT * FROM clanero WHERE cum="'.$r3['clanero'].'" ORDER BY apellidop';
			if(!$c4=$conexion->query($query4)){
				die('Ocurrio un error: ['.$conexion->error.']');
			}
			while($r4=$c4->fetch_array()){
				echo $r4['nombre'].' '.$r4['apellidop'].' '.$r4['apellidom'].'<br>';
			}
		}
	}
	echo '<br>';
	echo '<button type="button" id="registro" value="'.$id.'" class="btn btn-primary">Se parte del proyecto</button>';
	
?>