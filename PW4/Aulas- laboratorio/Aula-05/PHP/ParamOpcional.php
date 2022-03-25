<?php

# Funçóes - Parâmetros Opcionais
/** 
* Podemos criar funções que tenham parâmetros com uma quantidade pré definida. 
* Porém a chamada da função não se obriga passar todos os parâmetros .
*/

# Exemplo

function divisor($a, $b = 2)
{
    # Parâmetro $a
    #   Obrigatório
    #   Valorpassado com argumento na chamada

    # Parâmetro $b
    #   Opcional
    #   a) Valor também passado na chamada da função.
    #   b) Ou, caso não seja passado ele assumi um valor específico.
    echo 'Valor de a = ' . $a . '<br>';
    echo 'Valor de b = ' . $b . '<br>';
    echo 'Resultado da divisão = ' . $a / $b . '<hr> <br>';
    
}

//Exemplo de chamada com 1 Parâmetro 
echo 'Chamada da função com apenas 1 Parâmetro <br>';

divisor(10);

//Exemplo de chamada com 2 Parâmetro 
echo 'Chamada da função com os 2 Parâmetro <br>';
divisor(20, 10);

// Há uma observação importante
# Os parametros opcionais devem ser definidos  depois dos parâmetros obrigatórios.


?>