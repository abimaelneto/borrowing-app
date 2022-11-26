<?php

	include "includes/conecta.php";

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	//Se ID estiver vazio - então é INSERT
	if(empty($id)){
	
		//Monta o SQL para inserir os dados do formulário do MySQL
		$sql = "INSERT INTO usuarios (nome, email, senha) 
					VALUES 
				('$nome', '$email', '$senha')";
		
		//Envia código SQL para o MySQL
		$res = mysqli_query($conn, $sql);
		
		//Se inseriu com sucesso
		if($res){
			//Redireciona usuário para a listagem
			header("Location: listausuarios.php");
		}
		else{
			echo "ERRO AO INSERIR!";
		}
		
	}
	else{
		
		$sql = "UPDATE usuarios SET
					nome = '$nome',
					email = '$email',
					senha = '$senha'
				WHERE
					id = $id";
					
		//Envia código SQL para o MySQL
		$res = mysqli_query($conn, $sql);
		
		//Se atualizou com sucesso
		if($res){
			//Redireciona usuário para a listagem
			header("Location: listausuarios.php");
		}
		else{
			echo "ERRO AO ATUALIZAR!";
		}
		
	}
	
?>