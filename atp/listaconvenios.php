<?php

	include "includes/topo.php";

?>
	
		<header>
		  <h2>Cadastro de convênios</h2>
		  <h3 style="color:red">ESTA ROTINA NÃO ESTÁ FINALIZADA!</h3>
		</header>
		
		<section>
		  <?php 
		  
			include "includes/menu.php";
			
		  ?>
		  
		  <article>
		  
				<div>
					<a href="cadconvenios.php">Cadastra novo convênio</a>
				</div>
		  
				<table border="1">
					<tr>
						<td>ID</td>
						<td>Nome</td>
						<td>Tipo</td>
						<td> - </td>
						<td> - </td>
					</tr>
					<?php
					
						include "includes/conecta.php";
						
						//Monta comando SQL para obter todos 
						$sql = "SELECT id, nome, tipoconvenio FROM convenios";
						
						//Envia código SQL para o MySQL
						$res = mysqli_query($conn, $sql);
						
						//Se encontrou algum registro
						if($res){
							//Percorre os registros encontrados
							while($row = mysqli_fetch_assoc($res)){
								
								echo "<tr>
										<td>". $row['id'] ."</td>
										<td>". $row['nome'] ."</td>
										<td>". $row['tipoconvenio'] ."</td>
										<td><a href='cadconvenios.php?id=". $row['id'] ."'>Editar</a></td>
										<td><a href='excluiconvenios.php?id=". $row['id'] ."'>Excluir</a></td>
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
		