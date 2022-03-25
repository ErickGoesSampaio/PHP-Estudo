<?php

# Funçóes -Retorno de valor pela função
# RETURN
/** 
* Declaração RETURN provoca o fim da execução do código de uma função.
* Retornando o controle da execução para o código que chamou a função.
*/

# Exemplo 1

function apresentar_texto()
{
    echo 'Este texto será apresentado <hr><br>';
    return;
    echo 'Este texto não será presentado <hr><br>';
}

apresentar_texto();

# Exemplo 2
function adicionar($a, $b)
{
    # Primeira forma 
    $resultado = $a + $b;
    return $resultado;

    # Segunda forma
    return($a + $b);
    
}

$x = 10;
$y = 20;
$soma = adicionar($x, $y);
echo 'Faz a operação de adição <br>';
echo " $x + $y  = " . $soma . '<br>';
echo '<hr>';

# Exemplo 3 -  Retorno de um valor booleano
$nome = "Erick";
if (avalia_nome($nome)) {
    echo 'Nome do cliente Correto  <hr><br>';
}else {
    echo 'Nome do cliente NÂO esta correto  <hr><br>';
}

function avalia_nome($n)
{
    if ($n == "maria") {
        return true;
    }else {
        return false;
    }
}

# Exemplo 4 -  Retorno de um valor NULL
$nome = "Agda";
if (avalia() == Null) {
    echo 'Função retornou NULL  <hr><br>';
}else {
    echo 'Função retornou valor valido  <hr><br>';
}

function avalia()
{
    // Código ...
    return Null;
}
?>