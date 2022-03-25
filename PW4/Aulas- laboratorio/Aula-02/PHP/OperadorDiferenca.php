<?php
/** Operadores*/

/**
 * Operadores são simbolos que permitem executar operaçoes matemáticas,
 * ou lógicas / compativeis.
 */

# Operadores de DIFERENÇA
/**
 * Simbolos != ou <>
 */


# Exemplo 1:
$A = (2 != 3); # True

# Exemplo 2
$B = (100 <> 100); # False


# Exemplo 3
$C = (50 != '50'); # False
/** 
 * Neste exemplo ocorre uma comparação entre valores
 * SEM a verificação do tipo dos valores
 * envolvidos na comparação.
 */

# Exemplo 4
$D = (50 !== '50'); # True
/**
 * Já neste exemplo ocorre uma comparação entre valores
 * COM a verificação do tipo dos valores envolvidos
 * na comparação.
 */

// Então
# Os operadores com três simbolos comparam
# valor eo tipo  dos atributos Testados


# TESTES

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