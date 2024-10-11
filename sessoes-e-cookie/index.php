<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seções e Cookie</title>
</head>
<body>
    <h1>Estudando Seções e Cook</h1>
    <hr>
    <br>

    <?php
    
    //seção - é um espaço de armazenamento temporário no servidor, que pode ser utilizado para armazenar informações do usuário.

    session_start(); //gerenciar as sessões.Dar início
    session_destroy(); //destruir a sessão

    $_SESSION['name'] = "Alexandre";

   //cookie - utilizado para armazenar as informações do usuário.

   setcookie('name', 'Alexandre', time() + (60*60*24 ), '/'); //tempo de expiração é de 24h. Name é o nome do cookie e Alexandre é o valor. O / é para dizer que o cookie é válido para todo o site e não apenas para a página atual.
    
   echo $_COOKIE['name']; //pegar o valor do cookie criado
    
    ?>
</body>
</html>