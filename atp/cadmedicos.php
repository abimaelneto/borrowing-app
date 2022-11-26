<?php

	include "includes/topo.php";
	
	include "includes/conecta.php";
	
	$id = "";
	$nome = "";
	$crm = "";
	$telefone = "";
	
	//Se foi enviado ID via GET - se é edição
	if(isset($_GET['id'])){
		
		//Obtém valor enviado via GET
		$id = $_GET['id'];
		
		$sql = "SELECT * FROM medicos WHERE id = $id";
		//Envia a consulta para obter dados 
		$res = mysqli_query($conn, $sql);
		//Armazena os dados obtidos
		$row = mysqli_fetch_assoc($res);
		
		$nome = $row['nome'];
		$crm = $row['crm'];
		$telefone = $row['telefone'];
		
	}

?>
	
		<header>
		  <h2>Cadastro de Médicos</h2>
		</header>
		
		<section>
		  		  <?php 
		  
			include "includes/menu.php";
			
		  ?>
		  
		  <article>
		
			<form action="recebemedico.php" method="post">
			
				<input type="hidden" name="id" value="<?php echo $id; ?>" />
			
				<label for="nome">Nome</label> 
				<input type="text" name="nome" value="<?php echo $nome; ?>"  />
				
				<label for="crm">CRM</label> 
				<input type="text" name="crm" value="<?php echo $crm; ?>"  />
				
				<label for="telefone">Telefone</label> 
				<input type="text" name="telefone" value="<?php echo $telefone; ?>"  />

				<input type="submit">
			
			</form>
			<a href="inicio.php">Voltar</a>
		</article>
		</section>

<?php

	include "includes/rodape.php";
	
?>