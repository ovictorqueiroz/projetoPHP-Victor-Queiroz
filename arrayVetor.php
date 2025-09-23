<?php 

//Criando array usando a função:
$alunos = array();

$alunos[0] = 'Maria';
$alunos[1] = 'João';

echo ($alunos[0]. "<br>");
echo ($alunos[1]. "<br>");

//Criando array e já atribuindo valores:
$cores = array("vermelho", "amarelo", "azul");

echo "<br>";
echo($cores[0] . "<br>" . $cores[1] . "<br>" . $cores[2] . "<br>");


//Criando um array vazio usando apenas colchetes:
$carros = [];

$carros[0] = 'Volkswagen';
$carros[1] = 'Fiat';
$carros[2] = 'Renault';

echo "<br>";
echo($carros[0] . "<br>" . $carros[1] . "<br>" . $carros[2] . "<br>");
 ?>