<?php

    $dsn        = 'mysql:host=localhost;dbname=php_pdo';    // DATA SOURCE NAME
    $user       = 'root';                                   // USER
    $password   = '';                                       // PASSWORD

    $con = new PDO($dsn, $user, $password); // CONECTION PDO
