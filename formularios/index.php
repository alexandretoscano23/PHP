<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>
    <h1>Trabalhando com Formulários</h1>
    <hr>
    <br>

    <!-- <form action="" method="post"> <!--method - método de envio de dados do formulário. Post - envia os dados para o servidor de forma oculta->
        <input type="text" name="name" id="name">
        <input type="text" name="email" id="email">
        <input type="submit" name="action" value="enviar">
    </form> -->

    <form action="" method="post">

        <!-- exemplo 1 -->
        <!-- <select name="name" id="name">
            <option value="alexandre">alexandre</option>
            <option value="paulo">paulo</option>
        </select>
        <input type="submit" name="action" value="enviar">  -->

        <!-- exemplo 2 -->
        <!-- <input type="checkbox" name="select[]" id="select" value="10"> 
        <input type="checkbox" name="select[]" id="select" value="20">
        <input type="checkbox" name="select[]" id="select" value="30">
        <input type="checkbox" name="select[]" id="select" value="40">
        <input type="submit" name="action" value="enviar">  -->

        <!-- [] - faz o select se tornar um array, permitindo selecionar mais de um valor-->
    </form>

    <?php
        // exemplo 1 com get
        // $_GET - variável global que recebe os valores passados pelo formulário

        // if(isset($_GET['action'])){ //verifica se o índice action existe.
        //     $name = $_GET['name']; //recebe o valor do input name
        //     $email = $_GET['email']; //recebe o valor do input email

        //     echo $name;
        //     echo "<br>";
        //     echo $email;
        // }

        // exemplo 1 com post
        //Post - método de envio de dados do formulário. Porém, nãoé visívelna url

        // if(isset($_POST['action'])){
        //     $name = $_POST['name'];
        //     $email = $_POST['email'];

        //     echo $name;
        //     echo "<br>";   
        //     echo $email;
        // }

        //get - utilizado para buscas simples e curtas, quando a segurança não é uma preocupação, pois os dados são visíveis na url.

        //post - para enviar dados mais sensíveis, como senhas, enviar grande velume de dados e precisa de mais segurança. Não mostrando os dados na url.

        //exemplo 2
        // if(isset($_POST['action'])){
        //     echo $_POST['name'];
            
        // }

    ?>
</body>
</html>