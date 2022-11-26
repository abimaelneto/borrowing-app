<?php

	include "includes/topo.php";
	
	include "includes/conecta.php";
	
	$id = "";
	$nome = "";
	$email = "";
	$senha = "";
	
	//Se foi enviado ID via GET - se é edição
	if(isset($_GET['id'])){
		
		//Obtém valor enviado via GET
		$id = $_GET['id'];
		
		$sql = "SELECT * FROM usuarios WHERE id = $id";
		//Envia a consulta para obter dados 
		$res = mysqli_query($conn, $sql);
		//Armazena os dados obtidos
		$row = mysqli_fetch_assoc($res);
		
		$nome = $row['nome'];
		$email = $row['email'];
		$senha = $row['senha'];
		
	}

?>
	
		<header>
		  <h2>Cadastro de usuários</h2>
		</header>
		
		<section>
		  		  <?php 
		  
			include "includes/menu.php";
			
		  ?>
		  
		  <article>
			<form action="recebeusuario.php" method="post">
			
				<input type="hidden" name="id" value="<?php echo $id; ?>" />
			
				<label for="nome">Nome</label> 
				<input type="text" name="nome" value="<?php echo $nome; ?>" />
				

				<label for="email">E-mail</label>
				<input type="text" name="email" value="<?php echo $email; ?>"/>

				
				<label for="senha">Senha</label>
				<input type="password" name="senha" value="<?php echo $senha; ?>"/>
				

				<input type="submit">
			
			</form>
			<a href="listausuarios.php">Voltar</a>
		  </article>
		</section>
<?php

	include "includes/rodape.php";
	
?>