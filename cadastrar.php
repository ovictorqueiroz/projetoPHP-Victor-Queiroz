<?php 	
 	$userName = $_POST['userName'];
 	$userEmail = $_POST['userEmail'];
 	$userPass = $_POST['userPass'];

 	if($userName == "admin" && $userPass == 123456){
 		echo "<table>";
 		echo "<tr>";
 		echo "<td>";
 		echo "<b>Bem vindo, $userName ! </b>";
 		echo "</td>";
 		echo "</tr>";
 		echo "</table>";
 	}
 	else{
 		echo("Usuário ou senha inválidos!");
 	}

 ?>
