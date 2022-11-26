<?php

	include "includes/topo.php";
	
	include "includes/conecta.php";
	
	$id = "";
	$nome = "";
	$codigo = "";
	$preparacao = "";
	
	//Se foi enviado ID via GET - se é edição
	if(isset($_GET['id'])){
		
		//Obtém valor enviado via GET
		$id = $_GET['id'];
		
		$sql = "SELECT * FROM tipoexames WHERE id = $id";
		//Envia a consulta para obter dados 
		$res = mysqli_query($conn, $sql);
		//Armazena os dados obtidos
		$row = mysqli_fetch_assoc($res);
		
		$nome = $row['nome'];
		$codigo = $row['codigo'];
		$preparacao = $row['preparacao'];
		
	}

?>
		<header>
		  <h2>Cadastro de Tipos de exame</h2>
		</header>
		
		<section>
		<?php 
		  
			include "includes/menu.php";
			
		  ?>
		  
			<article>
				<form action="recebetipoexame.php" method="post">
				
					<input type="hidden" name="id" value="<?php echo $id; ?>" />
				
					<label for="nome">Nome do exame</label> 
					<input type="text" name="nome" value="<?php echo $nome; ?>"  />
					
					<label for="codigo">Código do exame</label> 
					<input type="text" name="codigo" value="<?php echo $codigo; ?>"  />
					
					<label for="preparacao">Preparação</label> 
					<textarea name="preparacao"><?php echo $preparacao; ?></textarea>

					<input type="submit">
				
				</form>
				<a href="inicio.php">Voltar</a>
			</article>
		</section>

<?php

	include "includes/rodape.php";
	
?>