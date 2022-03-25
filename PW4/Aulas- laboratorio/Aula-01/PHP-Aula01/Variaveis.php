<?php

//Variáveis
/** 
* Utilizados para armazenar dados: números, textos, valores lógicos etc
* Podemos apresentar e modificar os valores contidos em seu interior ao
* longo do código (programa).
* #####################################################################
*
* São definidas copm o simbolo de $ e o nome da variável como indentificador
* exemplo variavel:
*/
 $variavel01;
 /**
* No exemplo foi criado um espaço de memória sem conteúdo
* Variavel não inicializada.
*
* Exemplo de variável iniocializada
*/
$variavel02 = 100;
/**
 * Foi criado um espaço de memória nomeado com uma inicialização numérica.
 */
$variavel02 = "Esta é uma Variavel";
/**
 * O conteudo da variável foi alterado com outro tipo de dado.
 * Observamos que a variável não é tipificada
 * 
 * Apresentar o conteúdo das vaáriaveis.
 */
echo $variavel02;
echo "<br>";
/**
 * As váriaveis são "Case sensitive"
 */
$variavel03 = 150; // Neste caso são duas variáveis diferentes
$Variavel03 = 100; // Está é  uma outra variável

#####################################################################

/**
 * Formas INADEQUADAS de nomes de variáveis:
 * $1var = 0;
 * $!var = 0;
 * $var(1)= 0;
 * $var um = 0;
 * $var-um = 0;
 * 
 * Formas ADEQUADAS de inicializarmos uma variável:
 * $var1 = 0;
 * $var_um = 0;
 * $varUm = 0;
 * $_1var = 0;
 *
 */

#####################################################################

/**
 * Não há uma definição da forma correta mde nomear uma variável.
 * Poré é recomendado um mesmo padrão em um mesmo projeto.
 * Ou, verificar se o cliente te ou deseja algum padrão. 
 */
# Exemplo: 
/**
 * Camel Case - É um padrão muito utilizado
 */
$umaVariave = 0; // Camel Case
/**
 * Snake Case
 */
$uma_variavel = 0; //Snake Case




?>