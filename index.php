<?php

    $dsn        = 'mysql:host=localhost;dbname=php_pdo';    // DATA SOURCE NAME
    $user       = 'root';                                   // USER
    $password   = '';                                       // PASSWORD

    try {
        $con = new PDO($dsn, $user, $password); // CONECTION PDO

        /*$query = '
            CREATE TABLE IF NOT EXISTS tb_usuarios
            (
                id int not null primary key auto_increment,
                nome varchar(50) not null,
                email varchar(100) not null,
                senha varchar(32) not null
            )
        ';

        $con->exec($query);*/

        /*$query = '
            INSERT INTO tb_usuarios
            (
                nome,
                email,
                senha
            )
            VALUES
            (
                "Jonas",
                "jonas@gmail.com",
                "password"
            )
        ';*/

        $query = 'SELECT * FROM tb_usuarios';
        
        $stmt = $con->query($query);

        foreach($con->query($query) as $key => $value) {
            print_r($value);
            echo '<hr>';
        }
        //$list = $stmt->fetchAll(PDO::FETCH_ASSOC); // fetch, FETCH_OBJ

        // echo '<pre>';
        // print_r($list);
        // echo '</pre>';

        /*foreach ($list as $key => $value) {
            print_r($value['nome']);
            echo '<hr>';
        }*/

    } catch (PDOException $ex) {
        echo 'Erro: ' . $ex->getCode() . ' Mensagem: ' . $ex->getMessage(); // MENSAGEM DE ERRO 
    }
