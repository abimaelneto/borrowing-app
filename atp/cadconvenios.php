<?php

	include "includes/topo.php";

?>
		<header>
		  <h2>Cadastro de Convênios</h2>
		</header>
		
		<section>
		  <?php 
		  
			include "includes/menu.php";
			
		  ?>
		  
			<article>
				<form action="#" method="post">
				
					<label for="nome">Nome do convênio</label> 
					<input type="text" name="nome" />
					
					<label for="tipo">Tipo de convênio</label><br> 
					<input type="radio" name="tipo" /> Enfermaria<br/>
					<input type="radio" name="tipo" /> Apartamento<br/>

					<input type="submit">
				
				</form>
				<a href="inicio.php">Voltar</a>
			</article>
		</section>

<?php

	include "includes/rodape.php";
	
?>