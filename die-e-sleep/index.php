<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Die e Sleep</title>
</head>
<body>
    <h1>Estudando Die e Sleep</h1>
    <hr>
    <br>

    <?php
    
    //sleep - faz o script esperar um determinado tempo,em segundos, para executar o código

    sleep(5); //o servidor espera 5 segundos para executar o código

    echo "Olá!";

    echo "<br>";

//------------------------------------------------------------------------------------------------------------------------------

    //die - mata o script e exibe uma mensagem

    $name = "Alexandre";

    if($name === "Cleiton"){
        echo "Olá, Cleiton!";
    }else{
        die("O script parou de ser utilizado"); //se for falso,todo o código abaixo é interrompido e exibe uma mensagem na tela. 
    }

    
    ?>
</body>
</html>