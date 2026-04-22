<?php

$resultado = ""
;


if(isset($_POST["enviar"])){
    $frase = $_POST["frase"];

    //removendo espaços extras
    $fraseLimpa = trim($frase);
    //formatando a frase
    $totalCaracteres = strlen($frase);
    //exibindo os resultados
    $fraseMaiuscula = strtoupper($frase);
    //exibindo a frase em minúsculas
    $fraseMinuscula = strtolower($frase);
    //exibindo a frase com a primeira letra em maiúscula
    $primeiraLetraMaiuscula = ucfirst($frase);

    $resultado = "frase sem espaços extras e formatada: $fraseLimpa <br>
   frase em maiúsculas: $fraseMaiuscula <br>
   frase em minúsculas: $fraseMinuscula <br>
   primeira letra em maiúscula: $primeiraLetraMaiuscula <br>
   total de caracteres: $totalCaracteres"
;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Strings PHP</title>
</head>
 
<body>
    <h2>Trabalhando com Strings</h2>
    <form method="post">
        Digite uma frase: <br><br>
        <input type="text" name="frase" size="40" required>
        <br><br>
        <button type="submit" name="enviar">Processar</button>
    </form>
    <br>
    <div>
        <?php echo $resultado; ?>
    </div>
</body>
 
</html>