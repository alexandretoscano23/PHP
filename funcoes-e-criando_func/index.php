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

       $addedTime = date('d/m/Y - H:i:s', time() + (60 * 10)); //time retorna o tempo atual em segundos. 60 segundos * 10 = 10 minutos. Adiciona 10 minutos ao tempo atual

       echo $addedTime;

//------------------------------------------------------------------------------------------------------------------------------

       //incluir arquivos 

       //include ('testando-o-include/include.html'); //inclui o arquivo file.php

       echo "<br>";

//------------------------------------------------------------------------------------------------------------------------------

       //funções para strings

       //pegar apenas uma parte desta string

       $content = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt blanditiis inventore odio velit unde iure aliquam enim eveniet placeat id. Facilis exercitationem reiciendis odit maiores labore, excepturi perspiciatis sed laboriosam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, odit, dignissimos reiciendis voluptate omnis laborum minus cum deserunt distinctio similique tempora in officia harum a quisquam accusamus soluta! A, dolorem.";

       echo substr($content, 0, 21); //substr -> retorna uma parte da string. 0 - início da string / 20 quantidade de caracteres a serem retornados

       echo "<br>";

       $name = "Alexandre Toscano Diniz";

       $names = explode(' ',$name); //explode - divide uma string em um array. O primeiro parâmetro é o separador. Se não for passado, a string é dividida em caracteres

       echo "<pre/>";

       print_r($names); //print_r - exibe o conteúdo de um array

       echo "<br>";

       $nomes = implode(' ',$names); //implode - concatenar elementos de um array em uma única string.

       echo $nomes;

       echo "<br>";

//------------------------------------------------------------------------------------------------------------------------------

       $cont = "<h1>Alexandre</h1>";

       echo strip_tags($cont); //serve para remover todo código html

       echo "<br>";

       echo htmlentities('<div>conteúdo da div</div>'); //exibe os códigos html
    ?>
</body>
</html>