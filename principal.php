<?php

	include("cabecalho.php");
	
	$idade = 25;

	if($idade < 16){
		include 'votacaoMenor.php';
	}

	elseif ($idade < 18) {
		include 'votacao16.php';
	}

	else{
		include 'votacaoMaior.php';
	}


	include("rodape.php");
 ?>