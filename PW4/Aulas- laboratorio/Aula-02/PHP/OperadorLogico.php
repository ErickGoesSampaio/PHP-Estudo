<?php
/** Operadores*/

/**
 * Operadores Lógicos
 * São frequente mente utilizados com os operadores de comparação.
 * Permitem fazer concatenações de comparações, gerando proposições.
 */

 # AND e OR
 # &&    ||


#  Testes

$A = 100;
$B = 200;

# Os valores armazenados em 'C' são tipo "Boleano"
$C = ( $A < $B ) && ( $A < 1000 ); # AND -> True
$D = ( $A > $B ) || ( $A > 1000 ); # OR -> False

$C = ( $A < 150 ) && ( $B > 300 ); # AND -> False
$D = ( $A > 10 ) || ( $B > 500 ); # OR -> True

$E = ( $A == 100 ) && ( $B < $A ); # AND -> False

$F = ( True && True ); # AND -> True
$G = ( False || False ); # OR -> False


#Mostrando Resultado

if ($C){
   echo "<br> True <br>";
} else{
   echo "<br> False <br>";
}
if ($D){
   echo "<br> True <br>";
} else{
   echo "<br> False <br>";
}
if ($E){
    echo "<br> True <br>";
 } else{
    echo "<br> False <br>";
 }
 if ($F){
    echo "<br> True <br>";
 } else{
    echo "<br> False <br>";
 }
 if ($G){
    echo "<br> True <br>";
 } else{
    echo "<br> False <br>";
 }



?>