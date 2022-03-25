<?php
/** Arrays - Misto*/

/**
 * Array misto é a combinação de array numérico e associativo.
 * Não são utilizados com frequencia, pois é mais difícil de 
 * gerenciar o código de manipulação dos valores do array.
 */

 //Exemplos:

 $dados = [
        0 => 10,
        'Nome' => 'Erick',
        'Sobrenome' => 'Goes',
        10 => 100,00,
        11 => 'Endereço'
 ];

 # Para apresentar os dados
 echo $dados ['Nome']; 
 echo " ";
 echo $dados ['Sobrenome']; 
 echo "<br>";
 echo $dados [10];
 echo "<br>"; 

 
?>