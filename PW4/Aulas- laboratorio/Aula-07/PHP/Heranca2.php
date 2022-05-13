<?php
//Herança
//Uso de "extends"

# Exemplo de herança de Classe
# Classe Base (Mãe)

class baseMamifero
{
    public $especie;
    public $peso;
    
    function grupoEspec(){
        return "Este animal é do grupo {$this->especie}";
        // As chaves {} são necessárias para podermos fazer 
        // a concatenação de texto com a propriedade.
    }
}
#Exemplo
class Euterios extends baseMamifero{
    // Não é necessario definir novamente as mesmas
    // propriedades, pois estes já existem na classe base
    // 
    // Porém, podem acrescentar outras propriedades
    // métodos.
    
   public $qtdPernas;
   public $peloSimOuNao;

   function qtdPernasTem(){
       return "O animal possui ". $this->qtdPernas;
   }
}

$animal = new Euterios();
// Método da classe derivada
$animal->qtdPernas = 4;
echo 'Método da classe derivada';
echo "<br>";
echo $animal->qtdPernasTem();
echo '<br>';

// Método da classe base
$animal->especie = 'Euterio';
echo '<br>';
echo 'Método da classe base';
echo '<br>';
echo $animal->grupoEspec();
?>