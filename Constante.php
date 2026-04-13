<?php

//contantes - POR CONVENÇÃO NOMES EM MAISCULAS
//Constante não possui $ e deve ser maiuscula
//define('NOME', "Ryan");
//echo(NOME);
//echo('<br>');

//Outra maneira de decretar constante
//const VALOR = 10;
//echo VALOR;
//echo('<br>');

//cast - (ou type casting) é o processo de converter um valor de um tipo para outro de forma explicita.
//$valor = 10.5;
//var_dump($valor);
//echo('<br>');
//$inteiro = (int) $valor;
//var_dump($inteiro);
//echo('<br>');

//Forma implicita 
//$valor = 100;
//var_dump($valor);
//echo '<br>';
//$texto = (string) $valor;
//var_dump($texto);
//echo '<br>';

//Regras Importantes:
//0, "", "0", null -> False
//Qualquer outro valor -> True
//$valor = 0;
//$bool = (bool) $valor;
//var_dump($bool);
//echo '<br>';

//array
//$nomes = ["ti101", true, 100];
//echo $nomes[0] = "ti97";
//echo('<br>');

//array associativo com chave numéricas 
// => "aponta para" associar uma chave a um valor
//$nomes = [1=>"valor 1",
//        2=> "valor 2",
//        3=> "valor 3"];
//    print_r ($nomes);

//função
//function olaMundo(){
//    echo "Olá Mundo";
//}
//function olaTI101(){
//    echo "Olá TI 101";
//}
//function olaSaoPaulo(){
//    echo "Olá São Paulo";
//}

//função com parâmetro
//function saudacao($nome){
//    echo("Olá". $nome);
//}
//saudacao("Ryan");

//função return

//function multiplicar($a,$b){
  //  return $a*$b;
//}
//$resultado = multiplicar(10,10);
//echo ("Resultado da multiplicação =" .$resultado); 
//echo('<br>');

//function subtrair($a,$b){
 //   return $a-$b;
//}
//$resultado = subtrair(10,8);
//echo ("Resultado da subtração =" .$resultado);
//echo('<br>');

//function somar($a,$b){
 //   return $a+$b;

//$result = somar(5,5);
//echo ("Resultado da soma =" .$result);
//}

//function calcularmedia($nota1, $nota2, $nota3){
  //  return ($nota1 + $nota2 + $nota3)/3;
//$valor = calcularmedia(5,7,8);}
//echo ("Sua média é =" .$valor);


//function calcularMedia($nota1, $nota2, $nota3) {
  //  return ($nota1 + $nota2 + $nota3) / 3; 
//}
//echo "A média é: " . calcularMedia(5, 7, 8);

//Função para converter para maiusculo
    function maiusculo($texto){
        return ($texto);
    }
    echo maiusculo("Programando com PHP");
 

?>
