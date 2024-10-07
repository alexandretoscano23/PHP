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
        //while

        $looping = 1;   //contador do looping
        $whille = [];

        while($looping <= 5){  //executa enquanto for menor ou igual a 10
            $whille[] = $looping;   //adiciona o valor do looping ao array
            $looping++; //incrementa o valor de looping a 1
        }
        echo "<pre>";
        var_dump($whille);

        echo "<br>";

        //for
        for($i = 1; $i <=5; $i++){ //inicializa o contador, condição de parada e incremento
            echo "<p>{$i}</p> <br>";

        }

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
        
        //foreach - faz um loop por cada elemento
        $array = [1,2,3];
        foreach($array as $key => $value){ //para cada elemento da array atribui a chave e o valor
            echo "<p>{$key} => {$value}</p>";
        }
    ?>
</body>
</html>