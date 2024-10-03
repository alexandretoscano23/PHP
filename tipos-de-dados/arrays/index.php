<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de dado Array</title>
</head>
<body>
    <h1>Estudando o Tipo de Dado Array</h1>
    <hr>
    <br>
    <?php
        $numeros = [1, 2, 3, 4, 5]; //lista de valores
        $nomes = ["Maria", "João", "José", "Ana"]; //lista de strings

        print_r($numeros); //imprime uma array
        echo "<br>";
        echo $numeros[0]; //imprime o primeiro elemento da array

        echo "<br>";
        print_r($nomes); //imprimir a array nomes
        echo "<br>";
        echo $nomes[2]; //imprime o tereiro elemento

        echo "<hr>";
        echo "<br>";

        //Array Associativo
        $pessoa1 = ['nome' => 'Maria', 'idade' => 25, 'Cidade' => 'São Paulo']; //seta serve para associar um valor a uma chave
        print_r($pessoa1);
        echo "<br>";
        echo $pessoa1['nome']; //imprime o valor da chave nome
    ?>
</body>
</html>