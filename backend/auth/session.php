<?php
	session_start();
	echo 'session';
	if(!isset($_SESSION['id'])){
		header("Location: /index.php?autentica=1");
	}
?>