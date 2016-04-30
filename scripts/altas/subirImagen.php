<?php 
	session_start();

	$usuario=$_SESSION['clanero'];

	if($_FILES['archivo']['error']>0){
		echo 'Error: '.$FILES['archivos']['error']. '<br>';
	}else{
		move_uploaded_file($_FILES['archivo']['tmp_name'], 'img/perfil/'.$usuario.'.jpg');
		echo 'Imagen Actualizada';
		sleep(3);
		header('Location:inicio.php');
	}

	
 ?>