<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensional</title>
</head>
<body>
    <h1>Estudando Array Multidimensional</h1>
    <hr>
    <br>
    <?php
    
    //Array Multidimensional - Arrays dentro de Arrays

    $arr = [
        "first_user" => [
            "name" => "Alexandre",
            "age" => 25,
            "email" => "toscanodnizalexandre32@gmail.com"
        ],

        "second_user" => [
            "name" => "Antônio",
            "age" => 30,
            "email" => "antoniogabriel12@gmail.com"
        ],
        
        "third_user" => [
            "name" => "Fernanda",
            "age" => 20,
            "email" => "fernandagabriela19@gmail.com"
        ]
    ];

    echo "<pre>";

    //print_r($arr['first_user']['name']); //mostra o nome do primeiro usuário
    
    ?>
</body>
</html>