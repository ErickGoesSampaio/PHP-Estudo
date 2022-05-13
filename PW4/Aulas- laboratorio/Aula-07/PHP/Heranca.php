<?php

/**
 * Herança - É uma classe base da qual a partir dela
 * outras serão criadas por esta classe
 * 
 * Todas as classes provem desta classe base
 * são denominadas de classes derivada.
 */

 /*
    Mamíferos são classificados em três grupos:
        a) Monotremados
        b) Marsupiais
        C) Eutérios
 */
    
    # Exemplo de uma classe base

    class baseMamifero
    {
        public $especies;
        public $peso;
        
        function grupoEspec(){
            return "Este animal é do grupo {$this->especies}";
            // As chaves {} são necessárias para podermos fazer 
            // a concatenação de texto com a propriedade.
        }
    }
    $grupAnimal = new baseMamifero;

    $gupAnimal->especies = "Monotermado";
    
    echo $grupoAnimal->grupoEspec();
    



?>