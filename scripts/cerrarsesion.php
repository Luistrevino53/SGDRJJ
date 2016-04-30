<?php  
	session_start();
	unset($_SESSION['clanero']);
	session_destroy();
	header('Location:../index.php');
	
?>