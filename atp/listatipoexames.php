<?php

	include "includes/topo.php";

?>
	
		<header>
		  <h2>Cadastro de Tipos de exame</h2>
		</header>
		
		<section>
		  <?php 
		  
			include "includes/menu.php";
			
		  ?>
		  
		  <article>
		  
				<div>
					<a href="cadtiposexames.php">Cadastra novo tipo de exame</a>
				</div>
		  
				<table border="1">
					<tr>
						<td>ID</td>
						<td>Nome</td>
						<td>Codigo</td>
						<td> - </td>
						<td> - </td>
					</tr>
					<?php
					
						include "includes/conecta.php";
						
						//Monta comando SQL para obter todos os usuários
						$sql = "SELECT id, nome, codigo FROM tipoexames";
						
						//Envia código SQL para o MySQL
						$res = mysqli_query($conn, $sql);
						
						//Se encontrou algum registro
						if($res){
							//Percorre os registros encontrados
							while($row = mysqli_fetch_assoc($res)){
								
								echo "<tr>
										<td>". $row['id'] ."</td>
										<td>". $row['nome'] ."</td>
										<td>". $row['codigo'] ."</td>
										<td><a href='cadtiposexames.php?id=". $row['id'] ."'>Editar</a></td>
										<td><a href='excluitiposexames.php?id=". $row['id'] ."'>Excluir</a></td>
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
		