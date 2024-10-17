<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include('exemplo.class.php'); //incluindo outro arquivo php

    //instância de objeto
    $ex = new ex();
    
    $ex -> var1 = 'Olá';//erro pois é privada e não pode ser acessada
    $ex -> var2 = 'Olá';//irá mostrar normalmente

    echo $ex -> var2;
    
   
    ?>
</body>
</html>