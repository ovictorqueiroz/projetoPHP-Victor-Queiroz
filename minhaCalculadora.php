<?php 
	
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

	$userOpt = 2;

	$num1 = 50; $num2 = 25;

	function calcSoma($v1, $v2){
		return $v1 + $v2;
	}

	function calcSubtr($v1, $v2){
		return $v1 - $v2;
	}

	if($userOpt == 1){
		$resultado = calcSoma($num1, $num2);
		echo "<br> Os números ditados foram $num1 e $num2 <br>";
		echo "A operação escolhida foi [1] Adição <br>";
		echo "$num1 + $num2 = $resultado <br>";
	}

	else if($userOpt == 2){
		$resultado = calcSubtr($num1, $num2);
		echo "<br> Os números ditados foram $num1 e $num2 <br>";
		echo "A operação escolhida foi [2] Subtração <br>";
		echo "$num1 - $num2 = $resultado <br>";
	}




 ?>