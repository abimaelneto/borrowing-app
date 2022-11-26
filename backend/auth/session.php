<?php

	//(Re)iniciar sessão
	session_start();
	
	//Se NÃO foi criada uma sessão auntenticada
	//Se NÃO existe o valor ID guardado na sessão
	if(!isset($_SESSION['id'])){
		
		header("Location: index.php?autentica=1");
		
	}
?>