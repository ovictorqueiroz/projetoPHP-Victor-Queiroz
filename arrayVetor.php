<?php 

//Criando array usando a função:
$alunos = array();

$alunos[0] = 'Maria';
$alunos[1] = 'João';

echo "Vetor de alunos: <br>";
echo ($alunos[0]. "<br>");
echo ($alunos[1]. "<br>");

//Criando array e já atribuindo valores:
$cores = array("vermelho", "amarelo", "azul");

echo "<br>";
echo "Vetor de cores: <br>";
echo($cores[0] . "<br>" . $cores[1] . "<br>" . $cores[2] . "<br>");


//Criando um array vazio usando apenas colchetes:
$carros = [];

$carros[0] = 'Volkswagen';
$carros[1] = 'Fiat';
$carros[2] = 'Renault';

echo "<br>";
echo "Vetor de carros: <br>";
echo($carros[0] . "<br>" . $carros[1] . "<br>" . $carros[2] . "<br>");

//print_r e var_dump
$mail[] = "joao.silva@gmail.com"; 
$mail[] = "cristhian.borges@hotmail.com"; 
$mail[] = "ana.menezes@outlook.com"; 

echo "Testando print_r e var_dump <br>";

echo "<pre>";
print_r($mail);
echo "</pre>";

echo "<pre>";
	var_dump($mail);
echo "</pre>";

echo "<br>";

	$teste = array('Cleiton', 26, 1.75, true);

echo "<pre>";
	var_dump($teste);
echo "</pre>";


//usando for para percorrer o array
echo "<br>";

$num = [];

for ($i=0; $i <6; $i++){
	$num[$i] = 10;
	
}

for ($i=0; $i <6; $i++){
	echo "$i. O valor é $num[$i] <br>";
}
 
 ?>