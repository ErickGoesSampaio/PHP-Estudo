<?php
    // Classes
    /** Introdução de programação orientada a Objetos. (POO) 
     * 
     * Uma classe é definida pela declaração "class"
     * seguido do nome da classe. Também possue chaves
     * de limitação de construção do  código
    */

    /**
     * Por convenção do PSR-1 o nome de uma classe deve ser 
     * sempre atribuido de forma:
     * StudlyCaps, PascalCase, ou MixedCase
     *  
     * Link: https://www.php-fig.org/psr/psr-1/
     */

     # Exemplo de definição de classe

     class AnimaisMamiferos # Primeira letra capital
     {
         //Inserimos as propriedades e funçoes
     }

     class FiguraGeometrica
     {
         // Definição de propriedades
         public $largura, $altura;
         public $x;
         public $y;

         // Definição de um método (função)
         function metCalcArea($a,$b){
             return $a * $b;
         }

     }
     
    

?>