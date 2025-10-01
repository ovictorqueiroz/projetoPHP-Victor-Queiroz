<?php 

	//[EXERCICIO 01]
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

	/*
	$m3 = [
		[],
		[],
		[]
	];
	*/

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
	
	

?>