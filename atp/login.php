<?php
	
	$email = $_POST["email"];
	$password = $_POST["password"];
	
	//Conecta com a base de dados
	include "includes/conecta.php";
	
	$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
	$res = mysqli_query($conn, $sql);
	
	//Obtém QTDE de registros encontrados
	$qtdeRegistros = mysqli_num_rows($res);
	
	//Encontrou login e password compatíveis
	if($qtdeRegistros > 0){
		
		//Inicia a sessão
		session_start();
		
		//Obtém dados do usuário
		$row = mysqli_fetch_assoc($res);
		
		//Armazena informaçoes do usuário na Sessão
		$_SESSION['id'] = $row['id'];
		$_SESSION['name'] = $row['name'];
		
		header("Location: inicio.php");
	}
	else{
		header("Location: index.php?erro=1");
	}

?>