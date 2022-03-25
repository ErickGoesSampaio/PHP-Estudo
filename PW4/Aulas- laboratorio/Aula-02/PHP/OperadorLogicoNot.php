<?php
/** Operadores*/

/**
 * Operadores Lógicos NOT(!)
 * É a negação (Inversão lógica) de qualquer
 * outra operação lógica.
 */

 # Exemplo: 
 $A = False;

 # Aplicando o operador NOT (!) o valor de $A
 # Altera para True.

 $B = ! $A; # Aplicado a inversão lógica

 if ($A){
    echo "<br> True <br>";
} else{
    echo "<br> False <br>";
}
if ($B){
   echo "<br>True <br>";
} else{
   echo "<br> False <br>";
}

?>