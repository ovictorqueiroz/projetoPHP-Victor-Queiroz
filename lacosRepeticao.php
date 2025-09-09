<?php
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



	// Exercício 3
	$nome = 'Camila'; $idade = 15; $sexo = 'F';

	if($idade < 25 && $sexo ='F'){
		echo "NOME: $nome <br>";
		echo "IDADE: $idade anos <br>";
		echo "SEXO: $sexo <br>";
		echo "STATUS: ACEITA";
	} else {
		echo "NOME: $nome";
		echo "IDADE: $idade";
		echo "SEXO: $sexo";
		echo "STATUS: NÃO ACEITA";
	}

 ?>