<?php
/** Arrays - Multi dimencional*/

/**
 * São arrays numéricos ou associativos, cujos
 * válores são outros "arrays"
 */


 /**
  * É uma estrutura Multi dimensional pois possui
  * elementos de "array" dentro de uma "array".
  */

 //Exemplos:
 // Array Multidimensional NUMÉRICO

 $dados = [
       [10, 20, 30, 40], # Elemente 1 de índice 0 é um array.
       [100, 200, 300, 400], # Elemento 2 de índice 1 tambêm é um array
       [1000,
       2000,
       3000,
       4000
       ]
 ];

 # Como acessar os elementos do array multidimensional NUMÉRICO
echo $dados[1][1];
echo '<br>';
echo '<hr>';

// Exemplo 2
// Array Multidimensional ASSOCIATIVO

$dados2 = [
     'Cliente' =>  ['Nome01', 'Endereco01', 'Phone01'],
     'Estados' =>  ['São Paulo', 'Espirito Santos', 'Rio de Janeiro']

 ];
 # Como acessar os elementos do array multidimensional ASSOCIATIVO.
 echo $dados2['Cliente'][0][0];
echo '<br>';
echo '<br>';
?>