<?php
    // Classes
    /** Introdução de programação orientada a Objetos. (POO) 
     * 
     *  Para trabalhar com classes precisamos
     *  instanciar a classe.
     * 
     * Para acessar as propriedades de uma classe
     * precisamos dos métodos com a utilizaçãos da
     * pseudo variável $this seguida com o operador
     * seta ->
    */
    # Exemplo 1 - Definição e Detalhes
    # A construção de classe antes ou depois do
    # código principal, não interfere na 
    # visibilidade ou na sintaxe.

    class Humano{
        # Propriedades - Neste caso já preenchidas.
        public $nome = "Amanda"; # public é um modificador de acesso
        public $codNome = "Professora";

        # Métodos 
        public function nomeCompleto(){
            return $this -> codNome . ' ' . $this -> nome ;
            # Atenção
            # Note que para acessar a propriedade nomeCompleto 
            # definida como public $nome foi necessário 
            # utilizar a pseudo variável $this seguida do 
            # operador seta ->
            
            # A variável "nome", definida abaixo do 
            # return, embora, tenha o mesmo nome, não 
            # é a propriedade definida como "public $nome".
            # É apenas uma variável da função
        }


    }

    # As classes se utilizão de "Access Modifiers", que 
    # são public e private, dos quais
    #indicam os Niveis de Acesso (ou seja a  abrangência 
    #da visibilidade destas propriedades e métodos).

    # Instanciação de um objeto da classe
    # um objeto - é uma variável criada apartir da 
    # classe. Instanciar um objeto  é riar um objeto
    #a partir de uma classe atribuindo a variável
    # a expressão "new" e o nome da classe.

    $mulher = new Humano();
    # Criamos um objeto de nome homem a partir da 
    # classe Humano. Podemos então acessar as propriedades e métodos deste novo objeto

    echo $mulher -> nomeCompleto();
     
    

?>