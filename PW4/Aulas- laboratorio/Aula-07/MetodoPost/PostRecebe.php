<?php

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Apenas para gerir o código para visualizar as váriaveis

    echo '<br>';
    echo "Seu E-mail é = $email <br>";
    echo "Sua senha é = $senha <br>";

    var_dump($_POST);
?>