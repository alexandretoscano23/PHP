<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas e Criando Funções</title>
</head>
<body>
    <h1>Estudando funções nativas e Criando funções </h1>
    <hr>
    <br>

    <?php

        //criando
    
        //função - é um bloco de código que pode ser chamado e executado em qualquer parte do código

        function sayHello($word){ //dentro dos parênteses,pode ser passado parâmetros.
            $word = "olá mundo"; //Parâmetros são valores(variáveis) que podem ser passados para a função e utilizar dentro dela.
            echo $word;
        }

       echo sayHello('$word'); //o parâmetro é passado dentro dos parênteses
//------------------------------------------------------------------------------------------------------------------------------

       //func. podem retornar valores

       function real(){
            return true; //return - retorna qualquer valor
       }

       function returnString(){
            return "Paulo";
       }

       $valid = real(); //a variável recebe o valor retornado pela função

       $name = returnString();

       echo "<br>";

       echo $valid;

       echo "<br>";

       echo $name;

//------------------------------------------------------------------------------------------------------------------------------

       //Funções Nativas

       //date - função que retorna a data atual

       date_default_timezone_set('America/Sao_Paulo'); //define o fuso horário com o do Brasil
       $year = date('d/m/Y - H:i:s'); //d - dia / m - mês / Y - ano. H - hora / i - minuto / s - segundo

       echo "<br>";

       echo $year;

       echo "<br>";

       $addedTime = date('d/m/Y - H:i:s', time() + (60 * 10)); //time retorna o tempoatual em segundos. 60 segundos * 10 = 10 minutos. Adiciona 10 minutos ao tempo atual

       echo $addedTime;

//------------------------------------------------------------------------------------------------------------------------------

       //incluir arquivos 

       include ('testando-o-include/include.html'); //inclui o arquivo file.php
    ?>
</body>
</html>