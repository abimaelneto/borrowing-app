<?php

	include "includes/topo.php";

	include "includes/conecta.php";
	
	$id = "";
	$nome = "";
	$telefone = "";
	$cpf = "";
	$dtnasc = "";
	$genero = "";
	
	//Se foi enviado ID via GET - se é edição de paciente
	if(isset($_GET['id'])){
		
		//Obtém valor enviado via GET
		$id = $_GET['id'];
		
		$sql = "SELECT * FROM pacientes WHERE id = $id";
		//Envia a consulta para obter dados do paciente atual
		$res = mysqli_query($conn, $sql);
		//Armazena os dados obtidos
		$row = mysqli_fetch_assoc($res);
		
		$nome = $row['nome'];
		$telefone = $row['telefone'];
		$cpf = $row['cpf'];
		$dtnasc = $row['dtnasc'];
		$genero = $row['genero'];
		
	}


?>

	
		<header>
		  <h2>Cadastro de pacientes</h2>
		</header>
		
		<section>
		  		  <?php 
		  
			include "includes/menu.php";
			
		  ?>
		  
		  <article>
			<form action="recebepaciente.php" method="post">
			
				<input type="hidden" name="id" value="<?php echo $id; ?>" />
			
				<label for="nome">Nome</label> 
				<input type="text" name="nome" value="<?php echo $nome; ?>" />
				

				<label for="cpf">CPF</label>
				<input type="text" name="cpf" autocomplete="off" value="<?php echo $cpf; ?>"/>
				

				<label for="telefone">Telefone/celular</label>
				<input type="text" name="telefone" value="<?php echo $telefone; ?>" />
				
				 
				<label for="dtnasc">Data de nascimento</label>
				<input type="date" name="dtnasc" value="<?php echo $dtnasc; ?>" />
				

				<label for="genero">Gênero</label>
				<select name="genero">
					<option value="M" <?php if($genero=='M'){echo "selected";}?> >Masculino</option>
					<option value="F" <?php if($genero=='F'){echo "selected";}?> >Feminino</option>
				</select>

				<input type="submit">
			
			</form>
			<a href="listapacientes.php">Voltar</a>
		  </article>
		</section>

<?php

	include "includes/rodape.php";
	
?>