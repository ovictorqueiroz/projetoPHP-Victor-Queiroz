<?php 
// Exercícios - Vetores - 07/10/25

//EXERCÍCIO 01

$turma = [
	["nome" => "Huguinho", "nota" => 10],
	["nome" => "Luizinho", "nota" => 8.75],
	["nome" => "Zézinho", "nota" => 7.0],
	["nome" => "Fred", "nota" => 6.5],
	["nome" => "Daphne", "nota" => 9.0],
	["nome" => "Velma", "nota" => 10],
	["nome" => "Salsicha", "nota" => 7.0],
	["nome" => "Scooby", "nota" => 6.0],
	["nome" => "Pernalonga", "nota" => 8.0],
	["nome" => "Patolino", "nota" => 9.5],
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
			$array[$l]["nota"] = $maiorNota;
		}
	
		if($array[$l]["nota"] == $maiorNota){
			$mlrAluno[$l] = $array[$l]["nome"];
		}
	}

	return $mlrAluno;
}

echo "A média da turma é " . mediaTurma($turma);



 ?>