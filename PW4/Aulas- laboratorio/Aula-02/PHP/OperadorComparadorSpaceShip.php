<?php
/** Operadores*/

/**
 * Operador SpaceShip foi adcionado no PHP
 * e possui a seguinte operação: 
 */
# Compara o valor da "Esquerda" com o valor da "Direita".
/**
 * Este operador retorna três valores: [0, 1, -1]
 */

 # Exemplo
 $A = 1 <=> 1; # Retorna 0

 #Equivale (1==1)
 # O valor da Esquerda é igual o da Direita
 echo $A,"<br>";

 $A = 3 <=> 2; # Retorna 1
 #Equivale (3 > 2)
 #O valor da Esquerda é maior que o da Direita
 echo $A,"<br>";

 $A = 1 <=>2; #Retorna -1
 #Equivale (1 < 2)
 # O valor da Esquerda é menor que o da Direita
 echo $A,"<br>";



?>