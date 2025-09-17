<?php 
	
	//EXERCICIO 01
	
	$userNum = 15;
	$maiorNum = 0;

	while (true) {

		if($userNum == 0){
			break;
		}

		else {

			if($userNum > $maiorNum){
			$maiorNum = $userNum;
			}
			
		}
	}
	echo "O maior número é $maiorNum";
	

	/*
	//EXERCICIO 02
	for( $cont = 0; $cont <= 100; $cont++){

		if($cont % 10 == 0){
			echo "$cont é múltiplo de 10 <br>";
		}
		else{
			echo "$cont <br>";
		}
		
	}
	*/

	/*
	//EXERCICIO 03
		$grao = 1;

	for($casa = 1; $casa <= 64; $casa++){
		
		echo "Casa $casa: $grao de grãos de trigo<br>";
		$grao = $grao * 2;
	}
	*/

 ?>