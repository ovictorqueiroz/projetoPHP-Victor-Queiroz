<?php 
	/*

	// Criando uma função 'fechada'
	function somaValor (){

		$n1 = 10;
		$n2 = 10;

		$resposta = $n1 + $n2;
		
		echo "A soma de $n1 + $n2 é $resposta";
	}

	// Chamando/ executando a função 
	somaValor();
	*/

	/*
		// Criando uma função com parâmetros
	function somaValor ($n1, $n2){

		$resposta = $n1 + $n2;
		
		echo "A soma de $n1 + $n2 é $resposta";
	}


	$valor1 = 10;
	$valor2 = 20;


	somaValor($valor1, $valor2)
	*/

	// Criando uma função com 'return', para deixar a função ainda mais enxuta
	function somaValor ($n1, $n2){

	return ($n1 + $n2);
	
	}


	$valor1 = 100;
	$valor2 = 20;


	$resposta = somaValor($valor1, $valor2);

	echo "A soma de $valor1 + $valor2 é $resposta";

 ?>