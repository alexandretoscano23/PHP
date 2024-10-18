<?php
//arquivo para conter a class de exemplo

    //public funciona em qualquer lugar,private so conseguimos acessar dentro da class
    class exemple{

        private $name;
        public $name2;

        public static $name3 = 'estático';

        public static function user(){
            echo 'Função estática';
        }

        public function varPrivate($nameUser){ //cria uma função para passar um valor para a variável privada "name"
            $this -> name = $nameUser; //o name ao lado do this é para referenciar a variável name da class. A segunda foi criada como parâmetro da função

            //this "este" - referência algo
            //this name = $name2 -> seria como : "este nome é igual a nome2"
        }

        public function getName(){
            return $this -> name;
        }
    }

    

?>