<?php

	include "includes/conecta.php";

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$crm = $_POST['crm'];
	$telefone = $_POST['telefone'];
	
	//Se ID estiver vazio - então é INSERT
	if(empty($id)){
	
		//Monta o SQL para inserir os dados do formulário do MySQL
		$sql = "INSERT INTO medicos (nome, crm, telefone) 
					VALUES 
				('$nome', '$crm', '$telefone')";
		
		//Envia código SQL para o MySQL
		$res = mysqli_query($conn, $sql);
		
		//Se inseriu com sucesso
		if($res){
			//Redireciona usuário para a listagem
			header("Location: listamedicos.php");
		}
		else{
			echo "ERRO AO INSERIR!";
		}
		
	}
	else{
		
		$sql = "UPDATE medicos SET
					nome = '$nome',
					crm = '$crm',
					telefone = '$telefone'
				WHERE
					id = $id";
					
		//Envia código SQL para o MySQL
		$res = mysqli_query($conn, $sql);
		
		//Se atualizou com sucesso
		if($res){
			//Redireciona usuário para a listagem
			header("Location: listamedicos.php");
		}
		else{
			echo "ERRO AO ATUALIZAR!";
		}
		
	}
	
?>