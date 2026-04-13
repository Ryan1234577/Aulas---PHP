<?php
$resultado = "";
$numero = 0;
if(isset($_POST["jogar"])){
  if(isset($_POST["jogar"])){
    // Sorteio Inicial de 1 a 10
    $numero = rand(1,100);
 
 
    while($numero<1 || $numero > 100){
        $numero = rand(1,100);
    }
 
//Verifica resultado
if($numero == 40){
    $resultado = "Você ganhou!! Número sorteado:".$numero;
}
else{
    $resultado = "Texte novamente! Número Sorteado:".$numero;
}
  }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Jogo do Número 7</title>
</head>
<body>

    <h2>🎮 Jogo: Acerte o Número 7</h2>

    <form method="post">
        <button type="submit" name="jogar">Sortear Número</button>
    </form>

    <p><?php echo $resultado; ?></p>

</body>
</html>