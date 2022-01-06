<?php

    $dsn        = 'mysql:host=localhost;dbname=php_pdo';    // DATA SOURCE NAME
    $user       = 'root';                                   // USER
    $password   = '';                                       // PASSWORD

    try {
        $con = new PDO($dsn, $user, $password); // CONECTION PDO
    } catch (PDOException $ex) {
        echo 'Erro: ' . $ex->getCode() . ' Mensagem: ' . $ex->getMessage(); // MENSAGEM DE ERRO 
    }
