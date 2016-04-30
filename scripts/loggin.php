<?php
	session_start();
	include 'conexion.php';

	$cum=$conexion->escape_string($_GET['i_cum']);
	$pass=$conexion->escape_string($_GET['i_pass']);
	$query='SELECT * FROM clanero WHERE cum="'.$cum.'"';
	$resp=$conexion->query($query);
	while($row=$resp->fetch_array()){
		if($row['pass']==$pass){
			$_SESSION['clanero']=$cum;
			echo 'Usuario Correcto';

		}else{
			echo 'usuario incorrecto';
		}
	}
?>