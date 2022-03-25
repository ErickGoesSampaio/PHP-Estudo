<?php
/** String*/

/**
 * Uma "String" é um conjunto de caracteres
 * armazenadas numa variável.
 * Podemos ainda Definir um a "String" como um conjunto
 * de letras, espaços, símbolos e designados por um texto
 */

 # Podemos delimitar um "String" com aspas simples (single quote)
 # ou duplas (double quote).
 # Podemos utilizar uma ou outra. Apenas devemos manter um padrão
 # de escrita do código.

 //Exemplo: 
 #----------------------------------#
 $A = 'Esta é uma String';
 $B = "Esta também é uma String";

 echo $A;
 echo "<br>";
 echo $B;
 echo "<br>";
#----------------------------------#

 $C = 'Esta é uma "String"';
 $D = "Esta também é uma 'String'";
 echo "<br>";
 echo $C;
 echo "<br>";
 echo $D;
#----------------------------------#

?>