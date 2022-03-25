<?php
/** Arrays - Associativo*/

/**
 * Ao contrário dos arrays de índice numérico (posicionado),
 * as chaves de acesso nos arrays associativos (nomeado) são do tipo "String".
 */

 //Exemplos:

 $valores1 = [
        'A' => 20,
        'B' => 30,
        'C' => 40
 ];

 echo $valores1 ['A']; 
 echo "<br>";
 
 $valores1 = [
    'A' => 200,
];
echo $valores1 ['A']; 
echo "<br>";
echo "<br>";

 
$valores2 = [
    'Nome' => 'Joio',
    'Email' => 'joio@gmail.com',
    'Nacionalidade' => 'Brasileira',
    'Idade' => 43
];
echo $valores2 ['Nome']; 
echo "<br>";
?>