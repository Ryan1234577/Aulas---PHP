<?php
//Atividade: Crie um arquivo chamado recebe.php e utilize o método GET para receber os parâmetros "nome" e "idade" a partir da URL.
//Exiba esses valores na página. 
echo "Trabalhando com GET";
echo "<br>";
echo $_GET['nome'];
echo "<br>";
echo $_GET['idade'];
//http://10.91.47.51/html-UC15/php_101/recebe.php?nome=Ryan&idade=19

//_GET -> É uma superglobal em PHP que permite acessar os dados enviados através do método GET, geralmente usados para enviar informações na URL. 
//Os dados são acessados usando a sintaxe $_GET['nome_do_parametro'].

//_POST -> É uma superglobal em PHP que permite acessar os dados enviados através do método POST, geralmente usados para enviar informações de formulários.
//Os dados são acessados usando a sintaxe $_POST['nome_do_parametro'].
?>
