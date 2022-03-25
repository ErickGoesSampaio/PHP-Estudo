<?php
/** Arrays*/

/**
 * É uma coleção de valores (em uma única dimensão).
 * Funciona como uma Variável que contém muitos valores.
 * A localização é designada por um índice do "array"  
 */

 //Exemplos Não Tradicionais:

 $valores1 = array(9,10,3,10,20,30); #Array numérico
 $nomes = array('Pedro','Paulo', 'Jose'); # Array Texto
 
 //Apartir do PHP 5.X passou a se representar o array de forma, mais simples.
 
 $valores2 = [9,10,3,10,20,30]; #Array numérico
 $nomes2 = ['Pedro','Paulo', 'José']; # Array Texto

//  Os "arrays" possuem como índice como base o valor zero (0)

echo $valores2[0];
echo "<br>";
echo $valores2[1];
echo "<br>";
echo "<----------------------------->";

// Outra forma dse atribuição é com a utilização de atribuidoe
// =>
#Exemplo: 
echo "<br>";
$dados = [
            10 => 100,
            20=> 50,
            30 => 300
         ];
echo $dados[10];
echo "<br>";
?>