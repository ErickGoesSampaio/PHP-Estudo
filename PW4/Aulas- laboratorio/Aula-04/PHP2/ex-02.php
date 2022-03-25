<?php
$desc3a; 
$desc5a;
$desc4g; 
$desc6g;
$litros;
$total_a_pagar1;
$total_a_pagar2;
$total_a_pagar3;
$total_a_pagar4;
$valor1;
$valor2;
$valor3;
$valor4;
$combustivel;

echo"Combustivel A-Alcool ou G-Gasolina:"; 
$combustivel = 'A'; 
echo ' '. $combustivel.'<br>';
echo"Quantos litros deseja abastecer?:";
$litros = 20;
echo ' '. $litros.'<br>';
switch($combustivel){
case 'A':

    if($combustivel == 'A' || $combustivel == 'a'){
        echo"O combustivel escolhido foi Alcool = 5.799";
         echo'<br>';

	    if($litros <=20.00){
	
	        $valor1 = $litros*5.799;
	        $desc3a = $valor1*0.03;
	        $total_a_pagar1 = $valor1-$desc3a;
	
	        echo"O preco a ser pago e: " . $total_a_pagar1;
	        echo'<br>';
	    }
     
        else if($litros >20.00){
	
	     $valor2 = $litros*5.799;
	     $desc5a = $valor2*0.05;
	     $total_a_pagar2 = $valor2-$desc5a;
	
	     echo"O preco a ser pago e: " . $total_a_pagar2;
	     echo'<br>';	
        }
    }
    break;
case 'G' :

    if($combustivel == 'G' || $combustivel == 'g'){
	    printf("O combustivel escolhido foi Gasolina = 7.699");
        echo'<br>';
	    if($litros <= 20.00){
	
	    $valor3 = $litros*7.699;
    	$desc4g = $valor3*0.04;
	    $total_a_pagar3 = $valor3-$desc4g;
	
    	echo"O preco a ser pago e: " . $total_a_pagar3;
	    echo'<br>';
    	}

    	else if($litros > 20.00){
	
    	$valor4 = $litros*7.699;
    	$desc6g = $valor4*0.06;
    	$total_a_pagar4 = $valor4-$desc6g;
	
    	echo"O preco a ser pago e: ". $total_a_pagar4;
       echo'<br>';
    	}
    }
    break;
}
?>