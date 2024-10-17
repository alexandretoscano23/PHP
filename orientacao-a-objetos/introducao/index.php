<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orientação a Objetos</title>
</head>
<body>
    <h1>Estudando Orientação a objetos</h1>
    <hr>
    <br>

    <?php
        //objeto pessoa

        //private - privado. Só pode ser acessado dentro da classe.
        class peopple {
            private $nome = 'Alexandre';
            private $idade = 30;
            private $peso = '70kg';

            private function crescer(){
                echo 'Estou crescendo';
            }

            private function comer(){
                echo 'Estou comendo';
            }
        }

        //instanciar - criar o objeto

        $peopple = new peopple(); //novo objeto criado

        //para chamar o método - função

        //$peopple -> crescer(); // -> - acessa o método. Vai dar erro pois o método é privado e não vai ser exibido
       
//_________________________________________________________________________________________        

        //public - público. Pode ser acessado de qualquer lugar

        class peopple2 {
            public $nome = 'Alexandre';
            public $idade = 30;
            public $peso = '70kg';

            public function crescer(){
                echo 'Estou crescendo';
            }

            public function comer(){
                echo 'Estou comendo';
            }
        }

        $peopple2 = new peopple2();

        $peopple2 -> crescer();
        echo '<br>';
        $peopple2 -> comer();
    ?>
</body>
</html>