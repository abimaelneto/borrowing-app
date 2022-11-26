<?php

	include "includes/topo.php";

?>
	
		<header>
		  <h2>Cadastro de usuários</h2>
		</header>
		
		<section>
		  <?php 
		  
			include "includes/menu.php";
			
		  ?>
		  
		  <article>
		  
				<div>
					<a href="cadusuarios.php">Cadastra novo usuário</a>
				</div>
		  
				<table border="1">
					<tr>
						<td>ID</td>
						<td>Nome</td>
						<td>E-mail</td>
						<td> - </td>
						<td> - </td>
					</tr>
					<?php
					
						include "includes/conecta.php";
						
						//Monta comando SQL para obter todos os usuários
						$sql = "SELECT id, nome, email FROM usuarios";
						
						//Envia código SQL para o MySQL
						$res = mysqli_query($conn, $sql);
						
						//Se encontrou algum registro
						if($res){
							//Percorre os registros encontrados
							while($row = mysqli_fetch_assoc($res)){
								
								echo "<tr>
										<td>". $row['id'] ."</td>
										<td>". $row['nome'] ."</td>
										<td>". $row['email'] ."</td>
										<td><a href='cadusuarios.php?id=". $row['id'] ."'>Editar</a></td>
										<td><a href='excluiusuarios.php?id=". $row['id'] ."'>Excluir</a></td>
									</tr>";
								
							}
						}
										
					?>
				</table>
		  </article>
		</section>
<?php

	include "includes/rodape.php";
	
?>
		