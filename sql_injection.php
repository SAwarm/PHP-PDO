<?php

    if(!empty($_POST['usuario']) && !empty($_POST['senha'])) {
        $dsn        = 'mysql:host=localhost;dbname=php_pdo';    // DATA SOURCE NAME
        $user       = 'root';                                   // USER
        $password   = '';                                       // PASSWORD

        try {
            $con = new PDO($dsn, $user, $password); // CONECTION PDO

            $query = "SELECT * FROM tb_usuarios where ";
            $query .= " email= '{$_POST['usuario']}}' ";
            $query .= " AND senha = '{$_POST['senha']}'";

            $stmt = $conexao->query($query);
            $user = $stmt->fetch();

            print_r($user);

        } catch (Exception $ex) {
            echo 'Erro: ' . $ex->getCode() . ' Mensagem: ' . $ex->getMessage(); // MENSAGEM DE ERRO 
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="sql_injection.php">
        <input type="text" placeholder="usuário">
        <input type="password" placeholder="senha">

        <button type="submit">Enviar</button>
    </form>
</body>

</html>