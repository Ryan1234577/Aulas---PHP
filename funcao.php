<?php
function calculandoSoma ($n1, $n2){
    $soma = $n1 + $n2;
    return $soma;
} 
function calculandoSubtracao ($n1, $n2){
    $subtracao = $n1 - $n2;
    return $subtracao;
}
function calculandoMultiplicacao ($n1, $n2){
    $multiplicacao = $n1 * $n2;
    return $multiplicacao;
}
function calculandoDivisao ($n1, $n2){
    if($n2 != 0){
        $divisao = $n1 / $n2;
        return $divisao;
    } else {
        return "Não é possível dividir por zero.";
    }
}
?>