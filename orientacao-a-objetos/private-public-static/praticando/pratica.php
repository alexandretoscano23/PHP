<?php
    class userData{
        private $name;
        private $email;
        private $password;

        public function userName($name){
            $this->name = $name;
        }

        public function userEmail($email){
            $this->email = $email;
        }

        public function userPassWord($password){
            $this->password = $password;
        }

        public function getUserData(){
            return 'Nome:' . $this->name . '<br>' . 'Email:' . $this->email . '<br>' . 'Senha:' . $this->password;
            
        }

    }

?>