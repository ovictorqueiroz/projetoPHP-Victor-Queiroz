<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teste</title>
</head>
<body>
	<h1>Formulário</h1>

	<form action="cadastrar.php" method="post">

		<h3>Login</h3> <br>
		<label for="userName">Nome de Usuário:</label>  <input type="text" name="userName" id="userName"> 
		
		<br><br>
		
		<label for="userEmail">Email:</label> <input type="email" name="userEmail" id="userEmail"> 
		
		<br><br>
		
		<label for="userPass">Senha:</label> <input type="password" name="userPass" id="userPass"> 
		
		<br><br>
		
		<input type="submit" name="send">
	</form>

</body>
</html>
