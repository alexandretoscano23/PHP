<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de Controle</title>
</head>
<body>
    <h1>Estudando Estruturas de Controle</h1>
    <hr>
    <br>

    <?php

        //condicionais

        $condition1 = "Alexandre";
        $condition2 = "Alexandre";

        if($condition1 === $condition2 ){
            echo '<div style="width:300px;height:300px;background:red;"></div>' ;
        }else{
            echo "error";
        }

        echo "<br/>";

        $teste = true;

        if($teste){ //se o teste for verdadeiro executa determinado bloco de código
            echo "O teste é verdadeiro"; //bloco de código
        } else{ //se não for verdadeiro executa outro bloco de código
            echo "O teste é falso"; //bloco de código
        }

        echo "<br>";

        $minimumAge = 18;
        $maximumAge = 50;

        if($minimumAge === 18 || $maximumAge === 50){
            echo "Você pode entrar";
        } else{
            echo "Entrada proibida";
        }

        echo "<br>";

        //Saber se,a depender danota do aluno, ele foi aprovado ou reprovado.

        $note = 7;

        if($note >= 9 && $note <= 10){
            echo "Parabéns, você tirou um A. (Reprovado)";
        } elseif($note >= 7){ //se não for a condição de cima, executa outro tipo de bloco de código
            echo "Você tirou um B. (Aprovado)";
        } else{
            echo "Você tirou um D (Reprovado)";
        } 
        echo "<br>";

        //controle dentro de controle
        $time = 4;

        if($time >= 5 || $time <= 23){
            if($time < 7 && $time >= 4 ){
                echo "Bom dia!";
            } elseif($time >= 12 && $time <= 17){
                echo "Boa tarde!";
            } elseif($time === 23){
                echo "Boa noite!";
            } else{
                echo "Boa madrugada!";
            }
        }

        echo "<br>";

        //isset() - verifica se a variável foi definida
        $trueorFalse = "";

        if(isset($trueorFalse)){
            echo "A variável foi definida";
        }else{
            echo "A variável não foi definida";
        }

        echo "<br>";

        //empty() - verifica se a variável está vazia
        //! - operador de negação que muda o valor booleano de uma expressão (true para false e vice-versa)
        $rock = "AC/DC";

        if(!empty($rock)){ //o empty verifica se não existe ou se está vazio (usa o operador de negação para inverter o valor e tornar a expressão verdadeira (existe e tem valor))
            echo "Existe e está tocando {$rock}";
        }else{
            echo "Não existe ou não está tocando";
        }

        echo "<br>";

        //switch - executa diferentes blocos de código com base no valor da expressão. 
        $payment = "canceled";

        switch($payment){
            case "aproved": //caso o valor for aprovado executa o bloco de código
                echo "Pagamento aprovado";
                break; //finaliza o bloco de código
            case "canceled":
                echo "Pagamento Cancelado";
                break;
            case "past_due":
            case "pending":
                echo "Pagamento atrasado ou cancelado";
                break;
            case "Aprovado":
            case "completed":
                echo "Pagamento Concluído";
                break;
            default: //caso nãoseja nenhum dos valores acime
                echo "Erro ao processar o pagamento";
                break;
                
        };
    ?>
</body>
</html>