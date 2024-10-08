<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenação</title>
</head>
<body>
    <h1>Estudando sobre Concatenação</h1>
    <hr>
    <br>

    <?php
    
    //. - concatenar texto com variáveis, com outros textos ou os três

    $name = "Alexandre";
    $lastName = "Toscano"; 
    $age = 18;

    echo "Olá, meu nome é ". $name .", meu sobrenome é ". $lastName ." e tenho". $age ." anos.";
    
    //pode também colocar a variável no próprio texto com {$var}. os colchetes servem apenas para diferenciar 
    echo "<br/>";
    echo "Olá, meu nome é {$name}, meu sobrenome é {$lastName} e tenho {$age} anos.";
    
    ?>
</body>
</html>