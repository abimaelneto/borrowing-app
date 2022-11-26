<?php

	include "includes/conecta.php";

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$codigo = $_POST['codigo'];
	$preparacao = $_POST['preparacao'];
	
	//Se ID estiver vazio - então é INSERT
	if(empty($id)){
	
		//Monta o SQL para inserir os dados do formulário do MySQL
		$sql = "INSERT INTO tipoexames (nome, codigo, preparacao) 
					VALUES 
				('$nome', '$codigo', '$preparacao')";
		
		//Envia código SQL para o MySQL
		$res = mysqli_query($conn, $sql);
		
		//Se inseriu com sucesso
		if($res){
			//Redireciona usuário para a listagem
			header("Location: listatipoexames.php");
		}
		else{
			echo "ERRO AO INSERIR!";
		}
		
	}
	else{
		
		$sql = "UPDATE tipoexames SET
					nome = '$nome',
					codigo = '$codigo',
					preparacao = '$preparacao'
				WHERE
					id = $id";
					
		//Envia código SQL para o MySQL
		$res = mysqli_query($conn, $sql);
		
		//Se atualizou com sucesso
		if($res){
			//Redireciona usuário para a listagem
			header("Location: listatipoexames.php");
		}
		else{
			echo "ERRO AO ATUALIZAR!";
		}
		
	}
	
?>