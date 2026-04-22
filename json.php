<?php
//JSON -> JavaScript Object Notation, é um formato leve de troca de dados, fácil de ler e escrever para humanos, e fácil de analisar e gerar para máquinas.
//json_encode() -> Converte um valor PHP para uma representação JSON.
//json_decode() -> Converte uma string JSON para um valor PHP.
//Atividade: Crie um array em PHP com alguns valores, utilize a função json_encode() para converter esse array em uma string JSON e exiba o resultado. 
//Em seguida, utilize a função json_decode() para converter a string JSON de volta para um array PHP e exiba o resultado.
$dados=[
    'valor1', 'valor2'
];
var_dump($dados);
echo "<br>";
$valor = json_encode($dados);
var_dump($valor);
echo "<br>";
$array = json_decode($valor);
var_dump($array);
?>