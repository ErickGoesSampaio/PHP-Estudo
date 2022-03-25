<?php

# Funçóes 
/** 
* São blocos de código identificados por um nome e
* assinatura. Permite a reutilização deste código.
*/
# Estes blócos são executados apenas quando são chamados.

# Uma função é definida com o uso da palavra "function" 
# seguida do nome, um conjunto de parnteses e um bloco de código.

// Exemplo de criação de  função:
# Por conveção o bloco de código  inicia-se com as chaves em outra
# linha e não ao final dos parênteses:

function nomeDaFuncao()
{
    // Código da função
    echo 'Código dentro da função';
    echo '<br>';
    echo '<hr>';
}

# A função pode ser construida antes ou depois do código principal.

# Exemplo de chamada da função.

nomeDaFuncao();

// Notar que os nomes das funções são "Case insensitive".
# Ou seja, nomeDaFuncao() é igual a nomeDAFUNCAO()
nomeDAFUNCAO();

// Não há um padrão de nomeclatura. 
# "Camel Case" ou "Snake Case"
# Porém, há por definição que se utilize uma mesma nomeclatura
# em todo o projeto de código 

// Exemplo - Camel Case

function camelCase()
{
    echo '<br>';
    echo 'Camel Case';
    echo '<br>';
    echo '<hr>';
}
camelCase();

// Exemplo - Snake Case
function snake_case()
{
    echo '<br>';
    echo 'Snake Case';
    echo '<br>';
    echo '<hr>';
}
snake_case();


?>