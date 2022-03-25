<?php
/** Concatenação de String*/

/**
 * É um processo de junção de "Strings" por meio do código
 * Temos dois operadores para realizar a concatenação:
 */
# . Concatenação de uma "String" entre variáveis.
# .= Concatenaçãode uma "String" com outra já existente em uma variável.

//Ezemplo com " . "
 //Exemplo: 
 #----------------------------------#
 $A = 'Roberta ' . "Vasconcelos " . "Santos";


 echo $A;
 echo "<br>";

 $B = ' de Alencar';
 $C = $A .= $B;
 echo "<br>";
 echo $C;
 echo "<br>";

#----------------------------------#
/**
 * Teste rapido de verificação de que uma "String"
 *  é uma sequência de caracteres em uma variável.
 */
 echo "<br>";
 echo $C[0];


?>