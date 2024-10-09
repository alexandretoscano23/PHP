<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando</title>
</head>
<body>
    <h1>Exercícios de estrutura de controle</h1>
    <hr>
    <br>

    <?php
    //saber se o número é ímpar ou par
    $number = 10;

    if($number % 2 === 0){
        echo "Este número é par!";
    }else{
        echo "Este número é ímpar!";
    }

    echo "<br>";

    //se o aluno foi aprovado ou reprovado

    $note1 = 8;
    $note2 = 7;
    $note3 = 8;
    $result = ($note1 + $note2 + $note3) / 3; //média das notas

     $numberForm = number_format($result, 1, ".", ",");//formatar o valor para 1 casa decimal.Não ficar um valor muito extenso

    if($result >= 9 && $result <= 10){
        echo "Aprovado com uma ótima média. ${numberForm}";
    }elseif($result >= 7 && $result < 9){
        echo "Aprovado com uma boa média. ${numberForm}";
    }else{
        echo "Reprovado. ${numberForm}";
    }

    echo "<br>";

    //Maior número

    $num1 = 50;
    $num2 = 30;
    $num3 = 80;

    if($num1 > $num2 && $num1 > $num3){
        echo "O maior número é : ${num1}";
    }elseif($num2 > $num1 && $num2 > $num3){
        echo "O maior número é : ${num2}";
    }else{
        echo "O maior número é : ${num3}";
    }

    echo "<br>";

    //Qual o mês

    $month = 6;

    switch($month){
        case 1.4:
            echo "Janeiro";
            break;
        case 2:
            echo "Fevereiro";
            break;
        case 3:
            echo "Março";
            break;
        case 4:
            echo "Abril";
            break;
        case 5:
            echo "Maio";
            break;
        case 6:
            echo "Junho";
            break;
        case 7:
            echo "Julho";
            break;
        case 8:
            echo "Agosto";
            break;
        case 9:
            echo "Setembro";
            break;
        case 10:
            echo "Outubro";
            break;
        case 11:
            echo "Novembro";
            break;
        case 12:
            echo "Dezembro";
            break;
        case $month > 12 || $month < 1 :
            echo "Dado Inválido";
            break;            
    }

    echo "<br>";

    //Classificação Etária 

    $age = 1;

    if($age >= 0 && $age <= 11){
        echo "Criança";
    }elseif($age >= 12 && $age <= 17){
        echo "Adolescente";
    }elseif($age >= 18 && $age <= 24){
        echo "Jovem-Adulto";
    }elseif($age >= 25 && $age <= 60){
        echo "Adulto";
    }elseif($age > 60 && $age <= 100){
        echo "Idoso";
    }else{
        echo "Dado Inválido";
    }

    echo "<br>";  
    
    ?>
</body>
</html>