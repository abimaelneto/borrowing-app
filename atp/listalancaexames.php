<?php

	include "includes/topo.php";

?>
	
		<header>
		  <h2>Lançamento de exames</h2>
		  <h3 style="color:red">ESTA ROTINA ESTÁ PARCIALMENTE FINALIZADA!</h3>
		</header>
		
		<section>
		  <?php 
		  
			include "includes/menu.php";
			
		  ?>
		  
		  <article>
		  
				<div>
					<a href="lancaexames.php">Lança novo exame</a>
				</div>
		  
				<table border="1">
					<tr>
						<td>ID</td>
						<td>Paciente</td>
						<td>Medico</td>
						<td>Tipo exame</td>
						<td>Convênio</td>
						<td>Data</td>
						<td> - </td>
						<td> - </td>
					</tr>
					<?php
					
						include "includes/conecta.php";
						
						//Monta comando SQL para obter todos os usuários
						$sql = "SELECT id, paciente_id, medico_id, tipoexame_id, convenio_id, dataexame FROM usuarios";
						
						//Envia código SQL para o MySQL
						$res = mysqli_query($conn, $sql);
						
						//Se encontrou algum registro
						if($res){
							//Percorre os registros encontrados
							while($row = mysqli_fetch_assoc($res)){
								
								echo "<tr>
										<td>". $row['id'] ."</td>
										<td>". $row['paciente_id'] ."</td>
										<td>". $row['medico_id'] ."</td>
										<td>". $row['tipoexame_id'] ."</td>
										<td>". $row['convenio_id'] ."</td>
										<td>". $row['dataexame'] ."</td>
										<td><a href='lancaexames.php?id=". $row['id'] ."'>Editar</a></td>
										<td><a href='excluiexames.php?id=". $row['id'] ."'>Excluir</a></td>
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
		