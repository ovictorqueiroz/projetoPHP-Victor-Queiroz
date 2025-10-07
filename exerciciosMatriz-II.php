<?php 
// Exercícios - Vetores - 07/10/25

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

//EXERCICIO 02


 ?>