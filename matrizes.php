<?php
	/*
	$emp = array(
		array(1, "Maria", 5000),
		array(2, "José", 4000),
		array(3, "Pedro", 6000),
	);

	for ($lin = 0; $lin < 3; $lin++){
		for ($col = 0; $col <3; $col++){
			var_dump($emp[$lin][$col]);
								}
		echo "<br>";
	}
	*/

	$arr = array('v' => 'Vermelho', 'v' => 'Verde', 'a' => array('azul', 'marrom, preto'));

	echo json_encode($arr);

 ?>	