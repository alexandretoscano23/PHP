<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treinando</title>
</head>
<body>
    <h1>Exercitando sobre Arrays</h1>
    <hr>
    <br>
    <?php
        //array - lista de dados
        $array = [1, 2, 3, 4];
        echo "<pre>";
        var_dump($array);

        //selecionar algum item da array
        $arrayIndex = [
            "Alexandre",
            "Cleber",
            "Micon"
        ];
        echo "<pre>";
        var_dump($arrayIndex [1]); //seleciona o index 1 da array(segundo item da array)
        
        //adicionar um novo item na array sem ter que reescreve-la
        $user1 = [
            "name" => "Antonio",  //a chave "name" recebe o valor "Alexandre"
            "last_name" => "Gabriel",
            "age" => 45,
            "height" => 1.60
        ];
        $user1["weight"] = 100.4; //adiciona um novo item na array

        echo "<pre>";
        var_dump($user1);

        //Dar boas-vindas ao usuário e mostrar seus dados

        $userData = [
            "name" => "Gabriel",
            "last_name" => "Araújo",
            "age" => 29,
            "height" => 1.74,
            "weight" => 56.70
        ];

        echo "<h1>Bem-Vindo, {$userData["name"]} {$userData["last_name"]} !</h1> <p>Você tem <b>{$userData["age"]}</b> anos, mede <b>{$userData["height"]}</b> e pesa <b>{$userData["weight"]}</b> kg.</p>";
    
        echo "<br>";

        //loop por cada dado da array

        $loopData = [
            "band" => "Charlie Brown Jr",
            "vocal" => "Chorão",
            "guitar" => "Thiago",
            "bass" => "Champignon",
            "drums" => "Renato"
        ];

        foreach ($loopData as $key => $value){
            echo "<p>{$value} is a {$key}!</p>";
        }

    ?> 
</body>
</html>