<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloaures e Generators</title>
</head>
<body>
    <h1>Estudando Closures e Generators</h1>
    <hr>
    <br>
    <?php

    //closures - podem acessar variáveis do escopo externo onde foram definidas 

    //listando os usuários e quantos anos ele tem de acordo com a data de nascimento
    $myAge = function($year){
        $age = date('Y') - $year; //y retorna o ano atual. Subtrai o ano atual pela data de nascimento
        return "<h3>Você tem {$age} anos!</h3>";
    };

    echo $myAge(1990);
    echo $myAge(1972);
    echo $myAge(2000);
    echo $myAge(2006);

    //formatação de números
    echo "<br>";

//------------------------------------------------------------------------------------------------------------------------------

    $priceBr = function($price){
        return number_format($price, 2, ",", "."); //formata o número com 2 casas decimais e separa de milhar por vírgula e decimal por ponto
    };

    echo "<p>O preço é de R$ {$priceBr(4000)}</p>";

    echo "<br>";

    $myCart = []; //representa o carrinho de compras
    $myCart["totalPrice"] = 0; //para armazenar o preço total no carrinho de compras
    $cardAdd = function($item, $quantity, $price) use (&$myCart){ //permite que a função acesse e modiique a variável $myCart
        $myCart[$item] = $quantity * $price; //caucular o preço do item
        $myCart["totalPrice"] += $myCart[$item]; //somar o preço do item de acordo com a quantidade

    };
    echo"<pre>";

    $cardAdd("notebook", 2, 1900);
    $cardAdd("mouse", 1, 80);

    var_dump($myCart);

    echo "<br>";

//------------------------------------------------------------------------------------------------------------------------------

    //generator - permite criar iteradores sem a nescessidade de construir um array completo na memória.

    $iterator = 10;


    function generatorDate(){
        for($day = 1; $day <= $days; $day++){
            yield date('d/m/Y',strtotime("+{$day} days"));
        }
    }
    foreach(generatorDate($iterator) as $date){
        echo "<p>Data: {$date}</p>";
    }

    ?>
</body>
</html>