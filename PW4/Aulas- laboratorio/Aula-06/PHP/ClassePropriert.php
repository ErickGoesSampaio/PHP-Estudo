<?php
    // Classes - Construct
    /** Apenas com Propriedades ou apenas com Métodos
     * 
    */

    # Exemplo 1
    class Pessoa1
    {
        # Classe apenas com propriedades
        public $nome;
        public $codNome;

    }

    class Pessoa2
    {
        # Classe apenas com Método
        public function msg()
        { 
            echo $this -> nome . ' ' . $this -> codnome;
            
        }

        public function movimento()
        {
            $this ->msg();
        }
    }

    # A classe Pessoa1 Permite o acesso de duas 
    # propriedades 
    $humano1 = new Pessoa1();
    $humano1 -> nome = 'João';
    $humano1 -> codnome = 'Acessor';

    $humano2 = new Pessoa2();
    echo $humano2 -> movimento();




?>