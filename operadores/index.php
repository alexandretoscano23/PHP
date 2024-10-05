<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <h1>Estudando Operadores</h1>
    <hr>
    <br>

    <?php
        //De Atribuição
        // += forma simplificada de atribuição. $varA = varA + num
        $operatorA = 5;
        $operators = [
            "a += 5" => ($operatorA += 5),
            "a -= 5" => ($operatorA -= 5), //diminui 5 de $operatorA
            "a *= 5" => ($operatorA *= 5), //multiplica 5 de $operatorA
            "a /= 5" => ($operatorA /= 5), //divide por 5
            "a %= 5" => ($operatorA %= 5) //resto da divisão por 5
        ];
        echo "<pre>";
        var_dump($operators);
        echo "<br>";

        //incremento e decremento
        $incrementA = 5;
        $incrementB = 5;
        $increment = [
            "pos-incremento" => $incrementA++, //a próxima vez que chamar a variável, ela será incrementada (recebe +1)
            "resultado-incremento" => $incrementA, //retornar o valor incrementado sem precisar colocar a variável novamente no var_dump
            "pre-incremento" => ++$incrementA, //incrementa a variável antes de chamar

            "pos-decremento" => $incrementB--, //a próxima vez que chamar a variável, ela será decrementada (diminui 1).
            "resultado-decremento" => $incrementB, //retornar o valor decrtementado sem precisar colocar a variável novamente no var_dump
            "pre-decremento" => --$incrementB //decrementa a variável antes de chamar
        ];
        echo "<pre>";
        var_dump($increment);
        echo "<br>";

        //De Comparação
        $relatedA = 5;
        $relatedB = 5;
        $relatedC = 10;
        $related = [
            "a == b" => ($relatedA == $relatedB), //verifica se os valores são iguais, independente do tipo
            "a === b" => ($relatedA === $relatedB), //verifica se os valores são iguais e do mesmo tipo
            "a != b" => ($relatedA != $relatedB), //verifica se os valores são diferentes, independente do tipo.
            "a !== b" => ($relatedA !== $relatedB), //verifica se os valores são diferentes juntamente com o tipo
            "a > c" => ($relatedA > $relatedC), //verifica se a é maior que c
            "a < c" => ($relatedA < $relatedC), //verifica se a é menor que c
            "a >= b" => ($relatedA >= $relatedB), //verifica se a é maior ou igual a b
            "a <= b" => ($relatedA <= $relatedB) //verifica se a é menor ou igual a b
        ];
        echo "<pre>";
        var_dump($related);

        //Operadores Lógicos
        $logicA = true;
        $logicB = false;
        $logic = [
            "a && b" => ($logicA && $logicB), //verifica se a "e" b existem
            "a || b" => ($logicA || $logicB), //verifica se a "ou" b existem
            "!a" => (!$logicA), //verifica se a não existe
            "!b" => (!$logicB) //verifica se b não existe
         ];
        echo "<pre>";
        var_dump($logic);

        //Operadores Aritiméticos
        $calcA = 10;
        $calcB = 20;
        $calc = [
            "a + b" => ($calcA + $calcB), //soma
            "a - b" => ($calcA - $calcB), //subtração
            "a * b" => ($calcA * $calcB), //multiplicação
            "a / b" => ($calcA / $calcB), //divisão
            "a % b" => ($calcA % $calcB) //resto da divisão
        ];
        echo "<pre>";
        var_dump($calc);
    ?>
</body>
</html>