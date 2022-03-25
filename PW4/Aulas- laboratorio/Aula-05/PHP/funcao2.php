<?php

# Funçóes - Com Parâmetros 
/** 
* Parâmetros são variáveis ou valores inseridos dentro 
* dos parenteses da função.0
*/

# Exemplo
function adicao($a, $b)
{
    //Código da Função
    # As variáveis $a e $b dentro dos parênteses da 
    # função, são chamados de argumentos da função
    echo 'Variável recebida na função A = ' . $a . '<br>';
    echo 'Variável recebida na função B = ' . $b . '<br>';
}

# Exemplo de chamada com Parâmetros

$x = 10;
adicao($x, 20);

echo '<br>';

// Exemplo com "Array"
echo '<hr>';

$nomes = ['Maria','Agda','Dalena'];

foreach($nomes as $nome){
    saudacao($nome);
}

function saudacao($varNome)
{
    echo'Boa Tarde ' . $varNome . '<br>';  
}
echo '<hr>';


?>