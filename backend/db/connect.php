<?php

	$conn = mysqli_connect("localhost", "root", "abimaelmysql", "atp");
  ini_set ('display_errors', 1);
// ini_set ('display_startup_errors', 1);
error_reporting(2);
	if($conn == false){
		die("ERRO: Não conseguiu conectar no MySQL. " . mysqli_connect_error());
	}

	
?>