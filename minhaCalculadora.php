<?php 

	//Simulando painel de interação com o usuário
	echo "[CALCULADORA PHP] <br>";

	echo " <br>
	Escolha uma operação: <br>

	[1] Adição <br>
	[2] Subtração <br>
	[3] Divisão <br>
	[4] Multiplicação <br>
	";

	echo "<br>
	Digite os valores<br>

	Primeiro Valor: <br>
	Segundo Valor: <br>
	";

	$userOpt = 40;

	$num1 = 5; $num2 = 25;

	// Funções da Calculadora
	function calcSoma($v1, $v2){
		return $v1 + $v2;
	}

	function calcSubtr($v1, $v2){
		return $v1 - $v2;
	}

	function calcDiv($v1, $v2){
		return $v1 / $v2;
	}

	function calcMult($v1, $v2){
		return $v1 * $v2;
	}

	// Simulando escolhas do usuário para chamar as funções
	if($userOpt == 1){
		$resultado = calcSoma($num1, $num2);
		echo "<br> Os números digitados foram $num1 e $num2 <br>";
		echo "A operação escolhida foi [1] Adição <br>";
		echo "$num1 + $num2 = $resultado <br>";
	}

	else if($userOpt == 2){
		$resultado = calcSubtr($num1, $num2);
		echo "<br> Os números digitados foram $num1 e $num2 <br>";
		echo "A operação escolhida foi [2] Subtração <br>";
		echo "$num1 - $num2 = $resultado <br>";
	}

	else if($userOpt == 3){
		$resultado = calcDiv($num1, $num2);
		echo "<br> Os números digitados foram $num1 e $num2 <br>";
		echo "A operação escolhida foi [3] Divisão <br>";
		echo "$num1 / $num2 = $resultado <br>";
	}

	else if($userOpt == 4){
		$resultado = calcMult($num1, $num2);
		echo "<br> Os números digitados foram $num1 e $num2 <br>";
		echo "A operação escolhida foi [4] Multiplicação <br>";
		echo "$num1 X $num2 = $resultado <br>";
	}

	else{
		echo "<br> Entrada inválida! Tente novamente";
	}



 ?>