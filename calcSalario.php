<?php 
	$salBruto = 2500;

	function calcINSS($salInit){
		return ($salInit * 14 / 100);
	}

	function calcIR($salInit){
		if ($salInit < 2428.80){
			return 0;
		}
	
		else if($salInit >2428.81 && $salInit < 2826.65){
			return ($salInit * 0.075);
		}


		else if($salInit >2826.66 && $salInit < 3751.05){
			return ($salInit * 0.015);
		}

		else if($salInit > 3751.06 && $salInit < 4664.68){
			return ($salInit * 0.0225);
		}

		else {
			return ($salInit * 0.0275);
		}
	}

	function catIR($salInit){
		if ($salInit < 2428.80){
			return 1;
		}
	
		else if($salInit >2428.81 && $salInit < 2826.65){
			return 2;
		}


		else if($salInit >2826.66 && $salInit < 3751.05){
			return 3;
		}

		else if($salInit > 3751.06 && $salInit < 4664.68){
			return 4;
		}

		else {
			return 5;
		}
	}


	$salLiq = (($salBruto - calcINSS($salBruto)) - calcIR($salBruto));

	echo "=== CALCULADORA SALÁRIO LÍQUIDO === <br>";
	echo "Seu salário é R$ $salBruto <br>";
	echo "O valor do desconto do seu INSS é de R$ ",  calcINSS($salBruto), "<br>";
	echo "Você se enquadra na Faixa ", catIR($salBruto)," do Imposto de Renda <br>", "O valor do desconto do seu IR é de R$ ", calcIR($salBruto), "<br>";
	echo "Seu salário líquido é de R$ ", $salLiq;

	
 ?>