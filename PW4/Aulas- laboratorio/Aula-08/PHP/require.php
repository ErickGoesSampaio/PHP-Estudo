<?php 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Require</title>
</head>
<body>
    <?php 
    echo "<br> 1 - Uso de Include <br>";
        require '2-Cabecalho.php';
    ?>

    <?php 
    echo "<br> 2 - Uso de Include <br>";
        require '3-Rodape.php';
    ?>
</body>
</html>