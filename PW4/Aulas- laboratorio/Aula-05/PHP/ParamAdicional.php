<?php

# Funçóes - Parâmetros Adicionais
/** 
* Situação em que a função tem apenas UM Parâmetro.
* Porém na chamada da função são passados um número 
* maior de Argumentos.
*/

# Exemplo


function divisor($a)
{
    # Parâmetro $a - Obrigatório
    # Porém pode haver mais parâmetros
    # Avalia quantos argumentos foram passados
    $qtdArgs =  func_num_args();

    // Tratamento de ações em função do número de argumentos recebidos.

    switch($qtdArgs){
        case 1:
            $x = func_get_arg(0);
            echo '<br>';
            echo 'A função recebeu UM  argumentos <br>';
            echo 'Resultado da Divisão = ' . $x / 2 . '<br><hr>';
        break;
        case 2:
            $x = func_get_arg(0);
            $y = func_get_arg(1);
            echo '<br>';
            echo 'A função recebeu DOIS argumentos <br>';
            echo 'Resultado da Divisão = ' . $x / $y . '<br><hr>';
        break;

        case 3:
            $x = func_get_arg(0);
            $y = func_get_arg(1);
            $z = func_get_arg(2);
            echo '<br>';
            echo 'A função recebeu TRÊS argumentos <br>';
            echo 'Resultado da Divisão = ' . ($x / $y) / $z . '<br><hr>';
        break;

    }
}
divisor(20);

divisor(40, 20);

divisor(40, 20, 2);

// Propondo uma outra forma de tratamento 
# com os argumentos recebidos 
    function nova_funcao(...$argum)
    {
        foreach ($argum as $x) {
            echo $x . '<br>';
        }
    }
    nova_funcao(10, 20, 30, 40, 50);
    echo '<hr>';

?>