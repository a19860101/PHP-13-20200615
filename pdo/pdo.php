<?php
    $db_host = "localhost";
    $db_user = "admin";
    $db_pw = "admin";
    $db_name = "php0624";
    $db_charset = "utf8mb4";

    // $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
    // $pdo = new PDO($dsn,$db_user,$db_pw);

    try {
        $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";
        $pdo = new PDO($dsn,$db_user,$db_pw);   
        echo "連線成功";
    }catch(PDOException $e){
        echo $e->getMessage();
    }