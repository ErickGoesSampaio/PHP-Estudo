<?php
/** Operadores*/

/**
 * Operadores são simbolos que permitem executar operaçoes matemáticas,
 * ou lógicas / compativeis.
 */

# Operadores de COMPARAÇÂO
# Permite a comparação entre valores
# Verificam igualdade, diferença, mairo, menor, ou de mesmo tipo.
# O resultado da comparação é sempre "Boleano" False ou True.

# Observe a diferença entre o operador de :
# "Atribuição" e de "Comparação"

# Exemplo 1:
$A = (2==3); # False

# Exemplo 2
$B = (100 == 100); # True


# Exemplo 3
$C = (50 == '50'); # True
/** 
 * Neste exemplo ocorre uma comparação entre valores
 * SEM a verificação do tipo dos valores
 * envolvidos na comparação.
 */

# Exemplo 4
$D = (50 === '50'); # False
/**
 * Já neste exemplo ocorre uma comparação entre valores
 * COM a verificação do tipo dos valores envolvidos
 * na comparação.
 */

 //ATENÇÂO
 /**
  * Não conseguimos visualizar o resultado (False ou True)
  * da comparação. Mas, Podemos verificar sua existência.
  */

# TESTE
$A = (2==3); # False
echo $A;
echo "<br>";



 # Então temos que expressar a sua existência.
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



?>