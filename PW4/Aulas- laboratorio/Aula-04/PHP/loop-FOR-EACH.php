<?php
/**Loop FOREACH*/
# Permite executar um bloco de código apartir de valores  de um "Array"

# Ao utilizar o FOREACH não há necessidade de uma váriável incremental (contador), 
# Pois, o ciclo passa automaticamente de forma sequencial, em cada elemento do "Array"

# Cada elemento do array é carregado para a variável após a declaração "AS" 

# Exemplo 1

$vetor = [ 'Maria', 'Pedro', 'José'];
foreach($vetor as $variavel){
 echo $variavel.'<br>';
}
echo '<hr>';

#Exemplo 2
$EstadoCapital = [
    'Acre' => 'Rio Branco',
    'Amapá' => 'Macapá',
    'Alagoas' => 'Maceió',
    'Ceará' => 'Fortaleza'
];
foreach($EstadoCapital as $chave => $value){
    echo 'Para o estado ' .$chave. ' a capital é: '.$value.'<br>';
   }
   echo '<hr>';

?>