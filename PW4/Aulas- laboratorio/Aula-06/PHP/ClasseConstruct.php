<?php
    // Classes - Construct
    /** Introdução de programação orientada a Objetos. (POO) 
     * 
     * Nos exemplos anteriores tinhamos as propriedades
     * já preenchidas, oque só faria sentido na presença
     * de uma propriedade padrão, com a possibilidade
     * de alteração posterior..
      * 
     * Para tornar estas propriedades dinamicas, devemos 
     * utilizar o CONSTRUCT
    */

    //Exemplo
    
    class Humano2
    {
       private $nome;
       private $codNome;
       # O modificador de acesso private faz com
       # que estas proprie dades sejam visíveis 
       # apenas pelos métodos no interior da classe.
       # Os objetos não sabem, não conhecem estas 
       # propriedades. Apenas conhecem o método.


       # Esta função(Construct) é executada 
       # automaticamente quando se instancia um 
       # objeto da classe
       function __construct($n, $c){

            $this -> nome = $n;
            # $this -> nome recebe o valor de $n
            $this -> codNome = $c; 
            # $this -> codNome recebe o valor de $c
       }
       public function funCodnome(){
           return $this -> nome . ' ' . $this -> codNome;
       }
    }
    
    $mulher1 = new Humano2('Carla', 'Professora');
    # Ao criar o objeto "mulher" a função construct
    # é chamada automaticamente com a passagem dos
    # argumentos.

    echo $mulher1 -> funCodnome();
    echo '<br>';

    $mulher2 = new Humano2('Caroline', 'Professora');
    # Ao criar o objeto "mulher" a função construct
    # é chamada automaticamente com a passagem dos
    # argumentos.

    echo $mulher2 -> funCodnome();
    echo '<br>';


?>