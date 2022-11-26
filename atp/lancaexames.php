<?php

	include "includes/topo.php";
	include "includes/conecta.php";

?>
		<header>
		  <h2>Lançamento de exames</h2>
		</header>
		
		<section>
		<?php 
		  
			include "includes/menu.php";
			
		  ?>
		  
			<article>
				<form action="#" method="post">
				
					<label for="paciente_id">Paciente</label> 
					<select name="paciente_id">
						<option>Selecione</option>
						<?php
						
							$sql = "SELECT id, nome FROM pacientes";
							
							$res = mysqli_query($conn, $sql);
							
							if($res){
								while($row = mysqli_fetch_assoc($res)){
									
									echo "<option value='".$row['id']."'>".$row['nome']."</option>";
									
								}
							}
						
						?>
					</select>
					
					<label for="medico_id">Médico solicitante</label> 
					<select name="medico_id">
						<option>Selecione</option>
						<?php
						
							$sql = "SELECT id, nome FROM medicos";
							
							$res = mysqli_query($conn, $sql);
							
							if($res){
								while($row = mysqli_fetch_assoc($res)){
									
									echo "<option value='".$row['id']."'>".$row['nome']."</option>";
									
								}
							}
						
						?>
					</select>
					
					<label for="tipoexame_id">Tipo de exame</label> 
					<select name="tipoexame_id">
						<option>Selecione</option>
						<?php
						
							$sql = "SELECT id, nome FROM tipoexames";
							
							$res = mysqli_query($conn, $sql);
							
							if($res){
								while($row = mysqli_fetch_assoc($res)){
									
									echo "<option value='".$row['id']."'>".$row['nome']."</option>";
									
								}
							}
						
						?>
					</select>
					
					<label for="exame">Convênio</label>
					<select name="convenio_id">
						<option>Selecione</option>
						<?php
						
							$sql = "SELECT id, nome FROM convenios";
							
							$res = mysqli_query($conn, $sql);
							
							if($res){
								while($row = mysqli_fetch_assoc($res)){
									
									echo "<option value='".$row['id']."'>".$row['nome']."</option>";
									
								}
							}
						
						?>
					</select>
					
					<label for="dtexame">Data do exame</label>
					<input type="date" name="dtexame" />
					
					<label for="resultado">Resultado</label>
					<input type="text" name="resultado" />

					<input type="submit">
		
				</form>
				<a href="inicio.html">Voltar</a>
			</article>
		</section>

<?php

	include "includes/rodape.php";
	
?>