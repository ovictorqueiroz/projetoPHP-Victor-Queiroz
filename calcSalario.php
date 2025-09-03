<?php 
	$salBruto = 5000;
	$clube = 'C';


	function calcINSS($salInit){
		return ($salInit * 14 / 100);
	}

	function calcIR($salInit){
		if ($salInit < 2428.80){
			return 0;
		}
	
		else if($salInit >2428.81 && $salInit < 2826.65){
			return ($salInit * (7.5 / 100));
		}


		else if($salInit >2826.66 && $salInit < 3751.05){
			return ($salInit * (15 / 100));
		}

		else if($salInit > 3751.06 && $salInit < 4664.68){
			return ($salInit * (22.5 / 100));
		}

		else {
			return ($salInit * (27.5 / 100));
		}
	}

	function desClube($c){
		switch ($c) {
			case 'A':
				return 50;
				break;
			
			case 'B':
				return 30;
				break;

			default:
				return 20;
				break;
		}
	}

	$salLiq = ((($salBruto - calcINSS($salBruto)) - calcIR($salBruto)) - desClube($clube));

	echo "=== INFORME SALÁRIO LÍQUIDO === <br>";
	echo "Salário Bruto: R$ ", $salBruto, "<br>";
	echo "Desconto INSS: R$ ", calcINSS($salBruto), "<br>";
	echo "Desconto IR: R$ ", calcIR($salBruto), "<br>";
	echo "Clube de Benefícios: ", $clube, " - R$ ", desClube($clube), "<br>";
	echo "Salário Líquido: R$ ", $salLiq;
	
	
	
 ?>