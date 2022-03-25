<?php
/** Declarações IF com Proposições*/

/**
 * A) Utilizando OPERADORES DE COMPARAÇÂO e 
 * B) OPERADORES LÓGICOS
 */


 # Exemplo 1.

      $valor = 20;
      if($valor > 10  && $valor != 30){
           # code ...

      }else {
            # code...
      }



      echo "<br>";
      echo "<hr>";
      echo "<br>";

 # Exemplo 2.
 # IF alinhado 

 if ($valor >= 0) {
       if ($valor >= 100) {
            echo "O numero é maior ou igual a 100.<br>";
       }else {
            echo "O numero é positivo, porém é menor do que 100. <br>";
       }
}else {
      echo "O numero é negativo>";
      }

?>