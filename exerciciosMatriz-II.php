<?php 
// Exercícios - Arrays e Matrizes - 07/10/25

/*
//EXERCÍCIO 01

$turma = [
	["nome" => "Huguinho", "nota" => 3],
	["nome" => "Luizinho", "nota" => 4],
	["nome" => "Zézinho", "nota" => 6.0],
	["nome" => "Fred", "nota" => 5.5],
	["nome" => "Daphne", "nota" => 5.0],
	["nome" => "Velma", "nota" => 5],
	["nome" => "Salsicha", "nota" => 7.0],
	["nome" => "Scooby", "nota" => 6.0],
	["nome" => "Pernalonga", "nota" => 7.0],
	["nome" => "Patolino", "nota" => 10],
];

function mediaTurma($array){
	$mTurma = 0;
	$somaNotas = 0;

	for($l = 0; $l < count($array); $l++){
		$somaNotas += $array[$l]["nota"];
	}

	$mTurma = $somaNotas / count($array);
	return $mTurma;
}

function melhorAluno($array){
	$mlrAluno = [];
	$maiorNota = 0;

	for($l = 0; $l < count($array); $l++){
		if($array[$l]["nota"] > $maiorNota){
			$maiorNota = $array[$l]["nota"];
		}
	
	}

	for($l = 0; $l < count($array); $l++){
		if($array[$l]["nota"] == $maiorNota){
			$mlrAluno[$l] = $array[$l]["nome"];
		}
	}

	return json_encode($mlrAluno);
}



echo "A média da turma é " . mediaTurma($turma) . "<br>";
echo "O melhor aluno é: " . melhorAluno($turma) . "<br>";
*/

/*
//EXERCICIO 02
 $dbNum = [44, 16, -63, 12, 81, 4, 22, -33, 5, 27];

 $par = 0;
 $imp = 0;
 $pos = 0;
 $neg = 0;

 for($i = 0; $i < count($dbNum); $i++){
 	if($dbNum[$i] % 2 == 0){
 		$par++;
 	}
 	else{
 		$imp++;
 	}

 	if($dbNum[$i] > 0){
 		$pos++;
 	}
 	else{
 		$neg++;
 	}
 }

 echo("São $par números pares, $imp números ímpares, $pos números positivos e $neg números negativos");
 */

 //EXERCÍCIO 03
 $mNum = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

 $res = [];

 $nEntrada = 6;

 for($i = 0; $i < 10; $i++){
 	$res[$i] = $mNum[$i] * $nEntrada;
 }

 echo(json_encode($res));


 ?>