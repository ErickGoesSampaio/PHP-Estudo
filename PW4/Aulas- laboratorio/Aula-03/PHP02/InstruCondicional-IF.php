<?php
/** Declarações - Instruções Condicionais*/

/**
 * São instruçoes de controle de fluxo do programa de
 *  acordo com uma condição lógica.
 */


/**
 * Esta condição lógica é construida com OPERADORES 
 * DE COMPARAÇÂO associados com OPERADORES LÓGIGOS.
 */

 //Declarção IF com OPERADORES DE COMPARAÇÃO.

 # Definie um bloco de código que são executados se a condição 
 # lógica testada for verdadeira

 # Exemplo 1 - Teste com variável "String".

      $nome = 'Jogo';
      if($nome = 'Jogo'){
            echo "# --- Exemplo 1 - Teste com variável 'String'";
            echo "<br>";
            echo "Este teste será apresentado apenas se a";
            echo "<br>";
            echo "condição lógica testada entre parenteses";
            echo "<br>";
            echo "for verdadeira. Significa que este bloco de chaves";
            echo "<br>";
            echo "será executado";
            echo "<br>";  

      }
      echo "<br>";
      echo "<hr>";
      echo "<br>";

      # Exemplo 02 - Teste (SE/ENTÃO ... SENÃO) com variável numérica
      # Este exemplo conta com uma alternativa para ao caso 
      # da comparação lógica falhar.

      $idade = 19; # se For 18 ou menor entra no bloco IF, Se não Entra no bloco ELSE.
      if($idade <= 18){
            echo "# --- Exemplo 2 - Teste com variável numéreica e um bloco IF Executado";
            echo "<br>";
            echo "Considere que a 'Idade' menor ou igual a 18";
            echo "<br>";
            echo "para que este bloco seja executado"; 

      } else {
            echo "# --- Exemplo 2 - Teste com variável numéreica e um bloco ELSE Executado";
            echo "<br>";
            echo "Esta parte do código será executada caso ";
            echo "<br>";
            echo "a condição lógica tenha sido  falsa";
            echo "<br>";
      }
      echo "<br>";
      echo "<hr>";
      echo "<br>";
      echo "<br>";
      

      # Exemplo 3 - Teste com variável numérica
      # Se...SENÃOSE...SENÃO...
      # Esta construção permite a construção do 
      # código que realiza mais de uma verificação de teste lógico.
      echo " # --- Exemplo 3 - Teste com variável numérica";
      echo "<br>";

      $media = 8; 
      if($media <=3){
            echo "Sua média é inferior ou igual a 3,0.";
            echo "<br>";
            echo'REPROVADO';
            echo "<br>";
      }elseif ($media <= 6){
            echo "Sua média é inferior ou igual a 6,0.";
            echo "<br>";
            echo "Requer a execução de 'EXAME'.";
            echo "<br>";
      }elseif ($media < 7 ) {
            echo "Sua nota é inferior a 7,0.";
            echo "<br>";
            echo "Requer Atividade de recuperação.";
            echo "<br>";
      }else{
            echo "Nota igual ou superior a 8,0.";
            echo "<br>";
            echo "APROVADO";
      }

      echo "<br>";
      echo "<hr>";
      echo "<br>";


      
      # Exemplo 4
      # Podemos deixar e utilizar as "Chaves", Apenas se 
      # existir uma unica instrução no bloco

      echo " # --- Exemplo 4 - Teste de única instrução sem Chaves";
      echo "<br>";
      $media = 2; 
      if($media <=3)

            echo "Sua média é inferior ou igual a 3,0. <br> REPROVADO <br>";

      elseif ($media <= 6){
            echo "Sua média é inferior ou igual a 6,0.";
            echo "<br>";
            echo "Requer a execução de 'EXAME'.";
            echo "<br>";
      }elseif ($media < 7 ) {
            echo "Sua nota é inferior a 7,0.";
            echo "<br>";
            echo "Requer Atividade de recuperação.";
            echo "<br>";
      }else{
            echo "Nota igual ou superior a 8,0.";
            echo "<br>";
            echo "APROVADO";
      }

      echo "<br>";
?>