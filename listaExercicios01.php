<?php
	//EXERCICIOS 30/09/25
	/*
	// Exercicio 1
	$n1 = 5;
	$n2 = 5;
	$soma = $n1 + $n2;

	if($soma > 20){
		$soma += 8;
		echo "O resultado somado a 8 é $soma";
	} else{
		$soma -= 5;
		echo "O resultado subtraindo 5 é $soma";
	}
	*/




	/*
	// Exercício 2
	$numInput = 20;

	if($numInput % 10 == 0 && is_int($numInput) == True){
		echo "$numInput é divisível por 10";
	} 

	elseif ($numInput % 5 == 0 && is_int($numInput) == True) {
		echo "$numInput é divisível por 5";
	}

	elseif($numInput % 2 == 0 && is_int($numInput) == True){
		echo "$numInput é divisível por 2";
	} 

	else{
		echo "$numInput não é divisível nem por 10, 5 ou 2.";
	}
	*/


	/*
	// Exercício 3
	$nome = 'Carlos'; $idade = 35; $sexo = 'M';

	if($idade < 25 && $sexo ='F'){
		echo "NOME: $nome <br>";
		echo "IDADE: $idade anos  <br>";
		echo "SEXO: $sexo <br>";
		echo "STATUS: ACEITA";
	} else {
		echo "NOME: $nome <br>";
		echo "IDADE: $idade <br>";
		echo "SEXO: $sexo <br>";
		echo "STATUS: NÃO ACEITA";
	}
	*/


	/*
	// Exercício 4
	$A = 100; $B = 800; $C = 100;


		$temp = 0;

		if($A < $B){
			$temp = $A;
			$A = $C;
			$C = $temp;
		}

		if($B < $A && $B < $C){

			$temp = $B;
			$B = $C;
			$C = $temp;
		}

		if($B > $A && $B > $C){
			$temp = $B;
			$B = $A;
			$A = $temp;
		}

		if($C > $B && $C > $A){
			$temp = $C;
			$C= $A;
			$A = $temp;
		}	

		echo "$A , $B, $C";
	*/

	/*
	//Exercicio 5

		$altura1 = 1.75;
		$altura2 = 1.50;
		$altura3 = 1.67;
		
		$idade1 = 26;
		$idade2 = 15;
		$idade3 = 34;

		$sexo1 = 'M';
		$sexo2 = 'F';
		$sexo3 = 'F';

		function maiorAltura($a1, $a2, $a3){
			$maxAlt = "";

			if ($a1 > $a2 && $a1 > $a3){
				$maxAlt = $a1;
			} else if($a2 > $a1 && $a2 > $a3){
				$maxAlt = $a2;
			} else{
				$maxAlt = $a3;
			}

			return $maxAlt;
		}

		function menorAltura($a1, $a2, $a3){
			$minAlt = "";

			if ($a1 < $a2 && $a1 < $a3){
				$minAlt = $a1;
			} else if($a2 < $a1 && $a2 < $a3){
				$minAlt = $a2;
			} else{
				$minAlt = $a3;
			}

			return $minAlt;
		}

		function mediaMulheres($i1, $i2, $i3,$s1, $s2, $s3, ){
			$nF = 0;

			if(){
				
			}

		}

		echo "A maior altura do grupo é ", maiorAltura($altura1, $altura2, $altura3), "m <br>";

		echo "A menor altura do grupo é ", menorAltura($altura1, $altura2, $altura3), "m <br>";
		*/

 ?>