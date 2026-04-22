<?php
//Arquivos essenciais (nunca podem faltar)
require_once ('conexao.php');
require_once ('funcoes.php');

//Parte visuais
include ('menu.php');
include ('header.php');

//Simulação do usuario
$usuario = "Ryan";
?>

<h1><?php echo $nomeSistema; ?></h1>
<p>Olá, <?php echo $usuario; ?>! Bem-vindo ao nosso sistema.</p>
<p>Data de hoje: <?php echo $dataHoje; ?></p>

<?php
include ('footer.php');
?>
