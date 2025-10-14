<?php 	
 	$userName = $_POST['userName'];
 	$userEmail = $_POST['userEmail'];
 	$userPass = $_POST['userPass'];

 	if($userName == 'Pedrinho123' and $userPass == 123456){
 		echo("Bem-Vindo, $userName!");
 	}
 	else{
 		echo("Usuário ou senha inválidos!");
 	}

 ?>
