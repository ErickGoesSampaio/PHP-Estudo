<?php
/** Declarações e instruçoes condicionais 
 * SWITCH - É uma alternativa de encadeamento 
 * de IF..ELSEIF
 */

$nome = 'Erick';
/**
 * Neste caso não temos uma construção de condição lógica
 * Mas, podemos construir a condição lógica e armazenar
 * em uma váriavel.
 */

switch ($nome) {
     case 'João':
          # code...
          // Executa este código até encontrar a declaração: break;
          echo "Execução no codigo 'Joao' <br>";

          break;
     case 'Maria':
           # code...
           // Executa este código até encontrar a declaração: break;
           echo "Execução no codigo 'Maria' <br>";
     
               break;
     case 'Erick':
          # code...
          // Executa este código até encontrar a declaração: break;
          echo "Execução no codigo 'Erick' <br>";
          
          break;
     
     default:
            // Executa este código até encontrar a declaração: break;
            echo "Execução no codigo 'DEFAUT' <br>";
          break;
}
 # Exemplo 1.



?>