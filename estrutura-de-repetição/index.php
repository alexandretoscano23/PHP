<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de Repetição</title>
</head>
<body>
    <h1>Estrutura de Repetição</h1>
    <hr>
    <br>

    <?php
        //while - enquanto

        $looping = 1;   //contador do looping
        $whille = [];

        while($looping <= 5){  //executa enquanto for menor ou igual a 10
            $whille[] = $looping;   //adiciona o valor do looping ao array
            $looping++; //incrementa o valor de looping a 1
        }

        echo "<pre>";

        var_dump($whille);

        echo "<br>";

        //pulando de dois em dois

        $counter = 1;

        while($counter <= 10){
            echo $counter . "<br/>";
            $counter += 2; //contador = contador + 2
        }

        echo "<br>";

//------------------------------------------------------------------------------------------------------------------------------

        //for - enquanto for

        //repetir uma mensagem 10 vezes

        for($msg = 1; $msg <= 10; $msg++){
            echo "<p style='color:red;background-color:lightgray;text-align:center;margin:2px;padding:2px'>Olá mundo</p>";
        }

        echo "<br>";

//------------------------------------------------------------------------------------------------------------------------------

        //continue

        for($e = 1; $e <= 10; $e++){
            if($e % 2 === 0){ //se o resto da divisãopor 2 for igual a 0
                continue; //pula para a próxima iteração,ignorando qualquer código que venha depois do continue
            }
            if($e > 9){
                break;
            }
            echo "<p>pulou + 2 ::{$e}</p>";
        }

        echo "<br>";


    ?>
</body>
</html>