<?php

    session_start();  
    if(isset($_SESSION['name'])){
        echo $_SESSION['name']; //pegar o valor da sessão criada no primeiro index
    }
    

?>