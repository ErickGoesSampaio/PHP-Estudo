<?php
/**Loop FOR*/
# Permite executar um bloco de código em um determinado número

# O laço FOR se constitue de três parâmetros
# 1° - Valor inicial numérico (Contador) - Utilizado para contyrolar o número
# de vezes do loop (de repetição) 
# 2° - Condição -  Utilizado para avaliar o Contador e o encerramento do loop.
# 3° - Encremento ou Decremento - Altera o valor do contador. 

# Nota que a variável é criada e inicializada dentro do laço  FOR.

 #Exemplo 1
for ($i = 1; $i < 10; $i++ ) { 
   echo 'Exemplo 1 - Valor de i = '. $i .'<br>';
}
echo '<hr>';
echo '<br>';

 #Exemplo 2
for ($i = 1; $i < 10; $i++ ) echo 'Exemplo 2 - Valor de i = '. $i .'<br>';
 
 echo '<hr>';
 echo '<br>';


 #Exemplo 3
 $i = 1;
 for (; $i < 10;  ) { 
    echo 'Exemplo 3 - Valor de i = '. $i .'<br>';
    $i++;
 }
 echo '<hr>';

?>