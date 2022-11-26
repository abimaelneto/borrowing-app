<?php

	include "includes/conecta.php";

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['telefone'];
	$dtnasc = $_POST['dtnasc'];
	$genero = $_POST['genero'];
	
	//Se ID estiver vazio - então é INSERT
	if(empty($id)){
	
		//Monta o SQL para inserir os dados do formulário do MySQL
		$sql = "INSERT INTO pacientes (nome, cpf, telefone, dtnasc, genero) 
					VALUES 
				('$nome', '$cpf', '$telefone', '$dtnasc', '$genero')";
		
		//Envia código SQL para o MySQL
		$res = mysqli_query($conn, $sql);
		
		//Se inseriu com sucesso
		if($res){
			//Redireciona usuário para a listagem
			header("Location: listapacientes.php");
		}
		else{
			echo "ERRO AO INSERIR!";
		}
		
	}
	else{
		
		$sql = "UPDATE pacientes SET
					nome = '$nome',
					cpf = '$cpf',
					telefone = '$telefone',
					dtnasc = '$dtnasc',
					genero = '$genero'
				WHERE
					id = $id";
					
		//Envia código SQL para o MySQL
		$res = mysqli_query($conn, $sql);
		
		//Se atualizou com sucesso
		if($res){
			//Redireciona usuário para a listagem
			header("Location: listapacientes.php");
		}
		else{
			echo "ERRO AO ATUALIZAR!";
		}
		
	}
	

	/*
	echo "Nome: " . $_POST["nome"] . "<br>";
	echo "CPF: " . $_POST["cpf"] . "<br>";
	echo "Telefone: " . $_POST["telefone"] . "<br>";
	echo "Data de nascimento: " . $_POST["dtnasc"] . "<br>";
	echo "Gênero: " . $_POST["genero"] . "<br>";
	*/
?>