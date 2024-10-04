<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comandos de Saída</title>
</head>
<body>
    <h1>Estudando Comandos de Saída</h1>
    <hr>
    <br>
    <?php
    //para mostrar variáveis ou strings

    echo "<p>Olá Mundo!</p>"; // printa algo na tela

    //para exibir arrays
    //dados do usuário
    $array = [
        "nome" => "Alexandre",
        "idade" => 25,
        "profissão" => "Desenvolvedor"

    ];

    print_r($array);

    //para dar saída em uma variável formatada
    //tamplate de um artigo 
    $article = "<article><h1>%s</h1><p>%s</p></article>"; //%s entradas de valores para que sejam substituídas
    $title = "Título";
    $text = "algum texto";

    printf($article, $title, $texto); //serão substituidos os %s pela ordem que as variáveis são colocadas no printf 

    //debugar 
    var_dump($array); //mostra o tipo de dado e o valor da variável. Mostra o tamanho de strings e arrays
    ?>
</body>
</html>