<?php

$produto = 'Gás';
$valor;
$valorAlterado;

echo "Escolha o Produto";
echo "1 - Gás";
echo "2 - Oléo";

switch ($produto) {
    case 'Gás':
        $valor = 100;
        $valorAlterado = $valor * 0.05;
        echo 'O valor alterado do produto' . $produto . 'é: ' . $valorAlterado;
        break;
    case 'Oléo':
        
        $valor = 15.60;
        $valorAlterado = $valor * 0.05;
        echo 'O valor alterado do produto' . $produto . 'é: ' . $valorAlterado; 
        break;
    
    default:
    echo 'O produto ' . $produto . 'não foi encontrado';
        break;
}

?>