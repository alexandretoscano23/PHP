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
        //operadores

        $multi = 10 * 2; //20
        $sum = 10 + 2; //12
        $divi = 10 / 2; //5
        $sub = 10 - 2; //8
        $rest = 10 % 2; //resto da divisão

        echo $multi;

        echo "<br/>";
        
//------------------------------------------------------------------------------------------------------------------------------

        //resto

        $numberRest = 10 % 5; //o resto da divisão de 10 e 5 é 0

        echo $numberRest;

        echo "<br/>";
//------------------------------------------------------------------------------------------------------------------------------

        //operadores com preferência * e / > + e - (Exceto se estiverem entre parênteses)

        $num1 = 15;
        $num2 = 20;
        $result = 15 * 20 + 5 / (2 + 3); //primeiro os parênteses, dpois a divisão,multiplicação e soma

        echo $result;

//------------------------------------------------------------------------------------------------------------------------------

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

        print_r($operators);

        echo "<br>";

//------------------------------------------------------------------------------------------------------------------------------

        //incremento e decremento

        $incrementA = 5;
        $incrementB = 5;
        $increment = [
            "pos-incremento" => $incrementA++, //a próxima vez que chamar a variável, ela será incrementada (recebe +1)
            "resultado-incremento" => $incrementA, //retornar o valor incrementado sem precisar colocar a variável novamente no print_r
            "pre-incremento" => ++$incrementA, //incrementa a variável antes de chamar

            "pos-decremento" => $incrementB--, //a próxima vez que chamar a variável, ela será decrementada (diminui 1).
            "resultado-decremento" => $incrementB, //retornar o valor decrtementado sem precisar colocar a variável novamente no var_dump
            "pre-decremento" => --$incrementB //decrementa a variável antes de chamar
        ];

        echo "<pre>";

        print_r($increment);

        echo "<br>";

//------------------------------------------------------------------------------------------------------------------------------

        //De Comparação

        //um = quer dizer que estamos atribuindo um valor

        $name1 = 1; //var name recebe o valor "1"
        $name2 = "1";

        //== verifica se os valores são iguais, indepentente do tipo (string ou number)

        if($name1 == $name2){
            echo "São Iguais"; //vai dar verdadeiro porque o valor é igual
        }

        echo "<br>";

//------------------------------------------------------------------------------------------------------------------------------

        //=== verifica se os valores são iguais e do mesmo tipo

        if($name1 === $name2){
            echo "São iguais"; //vai dar falso porque o valor é igual, mas o tipo é diferente(str e number)
        }else{
            echo "São diferentes";
        }

        echo "<br>";

//------------------------------------------------------------------------------------------------------------------------------  

        //!= verifica se os valores são diferentes, independente do tipo

        if($name1 != $name2){
            echo "São diferentes"; //vai dar falso porque o valor é igual
        }else{
            echo "São iguais";
        }

        echo "<br>";

//------------------------------------------------------------------------------------------------------------------------------  

        //!== verifica se os valores são diferentes e de tipos diferentes

        if($name1 !== $name2){
            echo "tipos diferentes";//vai dar verdadeiro porque os tipos são diferentes
        }else{
            echo "tipos iguais";
        }

        echo "<br>";

//------------------------------------------------------------------------------------------------------------------------------        

        $relatedA = 5;
        $relatedB = 5;
        $relatedC = 10;
        $related = [
            "a == b" => ($relatedA == $relatedB), 
            "a === b" => ($relatedA === $relatedB), //verifica se os valores são iguais e do mesmo tipo
            "a != b" => ($relatedA != $relatedB), //verifica se os valores são diferentes, independente do tipo.
            "a !== b" => ($relatedA !== $relatedB), //verifica se os valores são diferentes juntamente com o tipo
            "a > c" => ($relatedA > $relatedC), //verifica se a é maior que c
            "a < c" => ($relatedA < $relatedC), //verifica se a é menor que c
            "a >= b" => ($relatedA >= $relatedB), //verifica se a é maior ou igual a b
            "a <= b" => ($relatedA <= $relatedB) //verifica se a é menor ou igual a b
        ];
        echo "<pre>";

        print_r($related);

//------------------------------------------------------------------------------------------------------------------------------

        // < menor que

        $number1 = 10;
        $number2 = 20;

        if($number1 < $number2){
            echo "O número 1 é menor que o número 2";
        }else{
            echo "O número 1 é maior que o número 2";
        }

        echo "<br>";

//------------------------------------------------------------------------------------------------------------------------------

        // > maior que

        if($number1 > $number2){
            echo "O número 1 é maior que o número 2";
        }else{
            echo "O número 2 é maior";
        }

        echo "<br>";

//------------------------------------------------------------------------------------------------------------------------------

        // <= menor ou igual

        if($number1 <= $number2){
            echo "o número 1 é menor ou igual a 2";
        }else{
            echo "O número 1 é maior que o número 2";
        }

        echo "<br>";

//------------------------------------------------------------------------------------------------------------------------------
        // >= maior ou igual

        if($number1 >= $number2){
            echo "O número 1 é maior ou igual a 2";
        }else{
            echo "O número 1 é menor que o número 2";
        }    

//------------------------------------------------------------------------------------------------------------------------------

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

        print_r($logic);

//------------------------------------------------------------------------------------------------------------------------------

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

        print_r($calc);
    ?>
</body>
</html>