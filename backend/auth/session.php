<?php
	session_start();
	
	$url = $_SERVER['REQUEST_URI'];  
	$path = explode("?", $url)[0];
	if($path != '/index.php' && !isset($_SESSION['id'])){
		header("Location: /index.php?autentica=1");
	}
?>