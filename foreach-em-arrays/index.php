<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ForEach em Arrays</title>
</head>
<body>
    <h1>Estudando ForEach em Arrays</h1>
    <hr>
    <br>

    <?php
        //foreach - para cada item do array, faça algo

        $arr = [
            "nome 1 -" => "Alexandre",
            "nome 2 -" => "Claudio",
            "nome 3 -" => "João",
            "nome 4 -" => "Maria",
            "nome 5 -" => "Ana"
        ];

        foreach($arr as $key => $value){ //key é o índice do array (nome1,nome2...) e value é o valor do índice (Alexandre,Claudio...). A "=>" serve para associar o índice ao valor(nome1 recebe o valor de "Alexandre")
             echo "<p>${key} ${value}<p/>";
         };

        $totalValues = count($arr); //mostra(conta) quantos valores tem dentro do array.

        echo $totalValues;
    
    ?>
</body>
</html>