<?php 
	/*
	//[EXERCICIO 01]
	echo("Exercicio 1 <br>");

	$m1 = [
		[25, 12, 35],
		[85, 47, 98],
		[32, 38, 105]
	];

	$m2 = [
		[98, 65, 35],
		[5, 27, 8], 
		[74, 14, 03]
	];


	echo("Matriz 1: <br>");
	for($l = 0; $l < 3; $l++){
		for ($i=0; $i < 3; $i++) { 
			echo($m1[$l][$i] . " | ");
		}
		echo("<br>");
	}

	echo"<br>";

	echo("Matriz 2: <br>");
	for($l = 0; $l < 3; $l++){
		for ($i=0; $i < 3; $i++) { 
			echo($m2[$l][$i] . " | ");
		}
		echo("<br>");
	}


	echo"<br>";

	echo "Somando as duas matrizes: <br>";

	for($l = 0; $l < 3; $l++){
		for ($i=0; $i < 3; $i++) { 
					
			$soma = $m1[$l][$i] + $m2[$l][$i];

			echo $m1[$l][$i] . " + " . $m2[$l][$i] . " = " . $soma . "<br>";

			$m3[$l][$i] = $soma;
			
		}
		echo("<br>");
	}

	
	echo("Matriz 3: <br>");
	for($l = 0; $l < 3; $l++){
		for ($i=0; $i < 3; $i++) {

			echo($m3[$l][$i] . " | ");
		}
		echo("<br>");
	}

	//[EXERCICIO 02]
	echo "<br> Exercicio 02 <br>";
	
	$somaM1= 0; $somaM2= 0; $somaM3 = 0;

	for($l = 0; $l < 3; $l++){
		for ($i=0; $i < 3; $i++) {

			$somaM1 += $m1[$l][$i];
			$somaM2 += $m2[$l][$i];
			$somaM3 += $m3[$l][$i];


		}
	}
	
	echo "A soma da Matriz 1 é: $somaM1 <br>";
	echo "A soma da Matriz 2 é: $somaM2 <br>";
	echo "A soma da Matriz 3 é: $somaM3 <br>";
	*/

	
	//[EXERCICIO 03]
	echo "<br> EXERCICIO 03 <br>";

	$alunos = [
		["Ana",  8],
		["Bernardo",  7.5],
		["Cláudio", 7],
		["Deyse", 6],
		["Emanuel", 5],
		["Fabrício", 9],
		["Guilherme", 9.5],
		["Heitor", 6.5],
		["Igor", 8.5],
		["Jacó",  10],
	];


	
	$somaNotas = 0;
	
	for($l = 0; $l < 10; $l++){
		$somaNotas += $alunos[$l][1];
	}

	$media = $somaNotas / (count($alunos));

	echo "A média da turma é: $media"
	
	

	/*
	//[EXERCICIO 04]
	echo "<br> EXERCICIO 04 <br>";

	$ano = [
		1 => "Janeiro",
		2 => "Fevereiro",
		3 => "Março",
		4 => "Abril",
		5 => "Maio",
		6 => "Junho",
		7 => "Julho",
		8 => "Agosto",
		9 => "Setembro",
		10 => "Outubro",
		11 => "Novembro",
		12 => "Dezembro",
	];

	$input = 5;

	echo $ano[$input];
	*/


?>