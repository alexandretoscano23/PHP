<?php
    include('pratica.php');

    $userData = new userData();

    $userData->userName('Alexandre Toscano Diniz');
    $userData->userEmail('alexandre32@gmail.com');
    $userData->userPassword('1234567');

    echo $userData->getUserData();


?>