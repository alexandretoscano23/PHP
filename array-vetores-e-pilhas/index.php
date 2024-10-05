<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array,Vetor e Pilha</title>
</head>
<body>
    <h1>Estudando sobre Array,Vetor e Pilha</h1>
    <hr>
    <br>
    <?php
        //Array
        $array = [1, 2, 3, 4]; //o index sempre começa em 0 (o index 0 é o 1).
        echo "<pre>";
        var_dump($array);

        $arrayIndex = [
            "Alexandre",
            "Micon",
            "Ryan"
        ];

        $arrayIndex[] = "André"; //adiciona um novo valor ao array sem ter que reescrever a array 
        $arrayIndex[] = "Marcos";

        var_dump($arrayIndex);

        echo "<br>";

        //Array Associativo
        $arrayAssoc = [
            "name" => "Alexandre",
            "last_name" => "Toscano",
            "age" => 25,
            "height" => 1.80
        ];
        $arrayAssoc["weight"] = 80.5;
        $arrayAssoc["Dados do Usuário"] = "Alexandre ";
        echo "<pre>";
        var_dump($arrayAssoc);

        $acDc = [
            "band" => "AC/DC",
            "vocal" => "Brian Jhonson",
            "guitar" => "Angus Young",
            "bass" => "Cliff Williams",
            "drums" => "Phill Rudd"
        ];

        echo "<pre>";
        var_dump("O vocalista da banda AC/DC é {$acDc["vocal"]}. O guitarrista é o {$acDc["guitar"]}"); //pega o valor da array (vocal) por acessar um elemento específico com os colchetes

        echo "<br>";

        $pearl = [
            "band" => "Pearl Jam",
            "vocal" => "Eddie Vedder",
            "guitar" => "Mike McCready",
            "bass" => "Jeff Ament",
            "drums" => "Jack Irons"
        ];

        $rockBands = [
            "acDc" => $acDc,
            "pearl_jam" => $pearl
        ]; //array dentro de array criada para armazenar os dados das outras arrays

        var_dump($rockBands); //exibe as duas arrays

        foreach ($acDc as $key => $value){ //faz um loop por todos os itens da array
            echo "<p>{$value} is a {$key} of band!</p>"; //value - o valor do elemento atual da array. key - o índice do elemento atual da arrray
        }

        echo "<br>";

        foreach ($pearl as $key => $value){
            echo "<p>{$value} is a {$key} of band!</p>";
        }

        echo "<br>";

        foreach ($rockBands as $rockBands){ //"as" associa o valor do array a uma variável. O segundo rockBands é uma variável criada para o loop receber o valor da array
            $art = "<article><h1>%s</h1><p>%s</p><p>%s</p><p>%s</p></article>";
            vprintf($art, $rockBands); //$rockbands é o valor da array que será exibido
        } //vprintf - exibe uma string formatada
        //cada %s segue a ordem dos valores da array
    ?>
</body>
</html>