<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudando Tipos de Dados</title>
</head>
<body>
    <h1>Estudando Tipos de Dados</h1>
    <hr>
    <br>
    <?php

        echo 5; //int - inteiro
        echo "<br>"; //quebra de linha
        echo -5; //int - inteiro
        echo "<br>"; //quebra de linha
        echo 5.5; //float - ponto flutuante
        echo "<br>";
        echo -3.2; //float - ponto flutuante
        echo "<br>"; 
        echo "Olá Mundo"; //string - (dentro de "")
        echo "<br>";
        echo "5"; //string - (dentro de "")
        echo "<br>";
        echo true; //boolean - true ou false  

        //verificar qual o tipo de dado

        $inteiro = 5;
        $flutuante = 5.5;
        $boole = true;
        $str = "Olá Mundo";

        echo"$inteiro é do tipo " . gettype($inteiro); //gettype() é uma função que retorna o tipo do dado selecionado.
    ?>
</body>
</html>