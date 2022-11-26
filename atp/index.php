<!DOCTYPE html>
<html>
	<head>
		<title>MeuLab - Login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/estilo.css" rel="stylesheet">
	</head>
	<body>
	
		<header>
		  <h2>MeuLab - Login</h2>
		</header>
		
		
	
		<div>
			<p style="text-align:center">Caso deseje visualizar resultados de exames, <a href="verificaexames.php">clique aqui</a>.</p>
			<p style="text-align:center">Caso contrário, realize o login para acessar a área restrita.</p>
			
			<?php
			
				//Se foi enviado parâmetro de erro - se não autenticou
				if(isset($_GET['erro'])){
					echo '<p style="text-align:center;color:red">Usuário e/ou senha incorreto(s).</p>';
				}
				
				if(isset($_GET['autentica'])){
					echo '<p style="text-align:center;color:red">Você não tem permissão de acesso.</p>';
				}
			
			?>
			
			<form action="login.php" method="post">
			
				<label for="login">Login</label> 
				<input type="text" name="login" id="login"/>
				
				<label for="senha">Senha</label> 
				<input type="password" name="senha" id="senha" /><br/><br/>
				
				<input type="submit" value="Autenticar">
			
			</form>
			
		</div>
		
		

		<footer>
		  <p>Todos direitos reservados.</p>
		</footer>
	</body>
</html>