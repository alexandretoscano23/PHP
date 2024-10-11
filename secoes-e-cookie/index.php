<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seções e Cook</title>
</head>
<body>
    <h1>Estudando Seções e Cook</h1>
    <hr>
    <br>

    <?php
    
    //seção - é um espaço de armazenamento temporário no servidor, que pode ser utilizado para armazenar informações do usuário.

    session_start(); //gerenciar as sessões.Dar início
    session_destroy();//

    $_SESSION['name'] = "Alexandre";

   
    
    
    ?>
</body>
</html>