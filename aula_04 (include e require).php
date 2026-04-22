<?php

//include ('incluido.php');
//include é ideal para puxar o conteúdo de outro arquivo .php

//require ('incluido.php');
//require é ideal para puxar o conteúdo de outro arquivo .php, porém, 
//caso haja algum erro, o require irá interromper a execução do código, 
//enquanto o include apenas exibirá um aviso e continuará a execução.

// include -> exibe um aviso (warning) e continua a execução do código, tenta incluir o arquivo mesmo que ele não exista ou tenha erros.

// require -> exibe um erro fatal (fatal error) e interrompe a execução do código,
//não tenta incluir o arquivo se ele não existir ou tiver erros, 
//obrigando o desenvolvedor a corrigir o problema antes de prosseguir.

//_once -> Só inclui o arquivo uma vez, mesmo que seja chamado várias vezes, evitando erros de redefinição de funções ou variáveis.


//Atividade: Crie um arquivo chamado funcao.php e defina as seguintes funções:
//1. calculandoSoma($n1, $n2): Retorna a soma de dois números.
//2. calculandoSubtracao($n1, $n2): Retorna a subtração de dois números.
//3. calculandoMultiplicacao($n1, $n2): Retorna a   multiplicação de dois números.
//4. calculandoDivisao($n1, $n2): Retorna a divisão de dois números, mas deve verificar se o divisor não é zero para evitar erros.
//echo "Trabalhando com include e Require";
//echo "<br>";
//include ('funcao.php');
//echo "Valor da soma =" . calculandoSoma(5, 7);
//echo "<br>";
//echo "Valor da subtração = " . calculandoSubtracao(10, 5);
//echo "<br>";
//echo "Valor da multiplicação = " . calculandoMultiplicacao(4, 6);
//echo "<br>";
//echo "Valor da divisão = " . calculandoDivisao(15, 3);