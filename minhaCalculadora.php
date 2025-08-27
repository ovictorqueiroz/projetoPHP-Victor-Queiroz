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

	$userOpt = 4;

	$num1 = 100; $num2 = 120;

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

	function printResult($n1, $n2, $resultado, $operacao){
		echo "<br> Os números digitados foram $n1 e $n2 <br>";
		echo "A operação escolhida foi  $operacao <br>";
		echo "O resultado da operação é $resultado <br>";
	}

	// Simulando escolhas do usuário para chamar as funções
	if($userOpt == 1){
		$operacao = "[1] Adição";
		$resultado = calcSoma($num1, $num2);
		printResult($num1, $num2, $resultado, $operacao);
	}

	else if($userOpt == 2){
		$operacao = "[2] Subtração";
		$resultado = calcSubtr($num1, $num2);
		printResult($num1, $num2, $resultado, $operacao);
		
	}

	else if($userOpt == 3){
		$operacao = "[3] Divisão";
		$resultado = calcDiv($num1, $num2);
		printResult($num1, $num2, $resultado, $operacao);
	
	}

	else if($userOpt == 4){
		$operacao = "[4] Multiplicação";
		$resultado = calcMult($num1, $num2);
		printResult($num1, $num2, $resultado, $operacao);

	}

	else{
		echo "<br> Entrada inválida! Tente novamente";
	}



 ?>