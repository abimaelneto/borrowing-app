<?php

	include "includes/topo.php";

?>
	
		<header>
		  <h2>MeuLab - Painel inicial</h2>
		</header>

		<section>
		  		  <?php 
		  
			include "includes/menu.php";
			
		  ?>
		  
		  <article>
			Bem-vindo usuário <?php echo $_SESSION['nome']; ?>!<br/><br/><br/><br/>
		
		
			<a href="cadusuarios.php?id=<?php echo $_SESSION['id']; ?>">Editar perfil</a>
			<br/><a href="logout.php">Sair</a>
		  </article>
		</section>

<?php

	include "includes/rodape.php";
	
?>