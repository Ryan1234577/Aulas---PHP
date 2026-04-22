<?php
//Trabalhando com datas, como decretar:
//echo date("d/m/Y");

//Trabalhando com data com uso de variavel:
//$data = date("d/m/Y");
//echo '<br>';
//echo ("Data de hoje =".$data);

// Significados de alguns atributos:
//d = dia
//m = mês
//Y = ano (com 4 digitos)
//H = hora (24h)
//i = minutos
//s = segundos

//definição de horarios em base do fuso-horário:
//date_default_timezone_set("America/Sao_Paulo");
//echo date("d/m/Y H:i:s");

//forma moderna de trabalhar com data:
//$data = new DateTime();
//echo("data atual =" .$data)
//echo $data->format("d/m/Y");

//forma de saber diferença de dias, contagem. Com métodos e classes:
//-> acessa algo dentro do ojeto(método)
//$data1 = new DateTime("2026-04-01");
//$data2 = new DateTime("2026-04-15");
//$diferenca = $data1->diff($data2);
//echo $diferenca->days."dias";

//Outro exemplo abaixo:
//echo $diferenca->days . "dias";
//$dataNascimento = new DateTime("2007-02-12");
//$hoje = new DateTime();
//$idade = $hoje->diff($dataNascimento);
//echo "Idade: " .$idade->y . "anos";

//string

//strlen(): Representa o tamnho da string ou a quantidade de caracters dentro da string ou o tipo de dado estipulado:
//$nome = "Ryan";
//echo strlen($nome);

//$nome = " ryan marcos a                     a ";
//Quantidade de caracter
//echo strlen($nome);
//echo '<br>';
//Tudo minusculo
//echo strtolower($nome);
//echo '<br>';
//Tudo maiusculo
//echo strtoupper($nome);
//echo '<br>';
//A primeira letra somente em maiusculo
//echo ucfirst($nome);
//echo '<br>';
// Deixa a Primera letra de todas as palavras maiusculas
//echo ucwords($nome);
//echo '<br>';
//Retira/Remove os espaços 
//echo trim($nome);
//echo '<br>';
//Procurar textos 
//echo strpos("Programando com PHP","PHP");

//explode () -> tranformar em array
//$texto_php = "PHP, (Hypertext, Preprocessor), é, uma, linguagem, de, programação, interpretada, amplamente, utilizada, para, o, desenvolvimento, de, sites, e, sistemas, web, dinâmicos, Ela, funciona, principalmente, no, lado, do, servidor, ou, seja, o, código, é, executado, no, servidor, e, o, resultado, é, enviado, para, o, navegador, do, usuário";
//echo '<br>';
//$array = explode(",", $texto_php);
//echo '<br>';
//print_r($array);

//implode () -> juntar array em string
//$array = ["PHP", "HTML", "CSS"];
//echo implode("-", $array);

//Exercício
$nome = " Ryan Marcos ";
echo "Original: $nome <br>";

$nome = trim($nome);
echo "Sem espaços: $nome <br>";

$nome = ucwords($nome);
echo "Formatando: $nome <br>";

echo "Total de letras " . strlen($nome);
?>