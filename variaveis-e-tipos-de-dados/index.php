<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Tipos de dados</title>
</head>
<body>
    <h1>Estudando Variáveis e Tipos de Dados</h1>
    <hr>
    <br>

    <?php

    $userFirstName = "Alexandre";
    $userLastName = "Toscano";
    $userAge = 25;

    echo "<p> O usuário {$userFirstName} {$userLastName} tem {$userAge} anos de idade.</p>";

    // //variável variável
    // $company = "EstudoWeb";
    // $$company = "PHP"; //recebe a chave do valor da variável anterior. Então $EstudWeb = "PHP"

    // echo "<h3>{$company} {$EstudoWeb}</h3>";
    
//------------------------------------------------------------------------------------------------------------------------------

    //referenciar a variável

    $calcA = 10;
    $calcB = 20;
    $calcB = &$calcA; //referencia a variável $calcA para $calcB. Se $calcA mudar, $calcB também muda e vice-versa 
    // $calcA = 30; //as duas variáveis mudam 
    var_dump([
        "a" => $calcA,
        "b" => $calcB
    ]);

   echo "<br>"; //quebra de linha

//------------------------------------------------------------------------------------------------------------------------------

    //Tipos de dados

    //boolean (bool) -> retorna true ou false

    $true = true;
    $false = false;

    $Bestage = ($userAge > 25);

    var_dump($Bestage ); //retorna true

    echo "<br>";

//------------------------------------------------------------------------------------------------------------------------------

    $a = 0; // int -> número inteiro
    $b = 0.0; //float -> ponto flutuante
    $c = ""; //string -> dado entre ""
    $d = []; //array -> lista de valores
    $e = null; //null -> vazio

    var_dump($a, $b, $c, $d, $e); 

    echo "<br>";

//------------------------------------------------------------------------------------------------------------------------------

    //callBack

    $code = "<article><h1>Um call_user_function</h1></article>";
    $codeClear = call_user_func("strip_tags",$code); //retira as tags html
    var_dump($code, $codeClear);

    echo "<br>";

//------------------------------------------------------------------------------------------------------------------------------

    //função anônima
    $codeMore = function($code){
        var_dump($code);
    };
    $codeMore("Função anônima");
    ?>
</body>
</html>