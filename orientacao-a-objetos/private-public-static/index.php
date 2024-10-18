<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    include('exemplo.class.php');

    //instância de objeto
    $exemple = new exemple();

    //$exemple -> name = 'Olá'; //erro pois é privada, apenas na class que pode acessar

    $exemple -> name2 = 'Olá';

    echo $exemple -> name2;
    
    echo '<br>';

    $exemple2 = new exemple();
    $exemple2 -> name2 = 'Tchau'; 

    echo $exemple2 -> name2; 
    $exemple2 -> name2;
   
    //cada variável tem o mesmo objeto mas são instâncias diferentes. Mesmo nome mas os valores são diferentes

    echo '<br>';

    echo exemple::$name3;//para acessar uma variável estática, usa o :: ao invés de ->. Não pode atribuir valores individuais. Vai ser sempre uma coisa só. Sem criar variáveis.

    echo '<br>';
    
    echo exemple::user();//acessar a fuinção estática

    echo '<br>';

    $exemple -> varPrivate('Alexandre Toscano Diniz'); //passa o valor para o parâmetro da função criada
    echo $exemple -> getName();

    //criando um objeto com o mesmo nome e instâncias diferentes. - com function

    echo '<br>';

    $exemple2 -> varPrivate('Pedro Gomes Alves');
    echo $exemple2 -> getName();

    //mesmo tendo o mesmo nome, suas instâncias são diferentes. Cada um tem seu valor
    ?>
</body>
</html>