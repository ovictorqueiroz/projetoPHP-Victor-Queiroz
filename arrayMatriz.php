<?php 
//Exemplo1
$nomeAlunos = ['Maria', 'João', 'Pedro', 'Paulo', 'Lucas'];



foreach ($nomeAlunos as $nomes) {
	echo "<br> $nomes";
}

echo "<br>";

//Exemplo2
$numeros = [1,2,3,4,5];

foreach($numeros as $valor){
	echo "<br> Valor é $valor";
}

echo "<br>";

//Exemplo3 
$usernames["MA"] = "Maria";
$usernames["PE"] = "Pedro";
$usernames["MU"] = "Maurício";

echo "<pre>";
	var_dump($usernames);
echo "</pre>";


//Exemplo4
$s = ['João' => 1000, 'Maria' => 2000, 'José' => 6000];

foreach ($s as $salario){
	echo "<br> O Salário é R$ $salario";
}

?>
