<?php
    $db_host = "localhost";
    $db_user = "admin";
    $db_pw = "admin";
    $db_name = "php0624";
    define("DB_HOST","localhost");
    define("DB_USER","admin");
    define("DB_PW","admin");
    define("DB_NAME","php0624");

    // $conn = mysqli_connect($db_host,$db_user,$db_pw,$db_name);
    // $conn = mysqli_connect("localhost","admin","admin","php0624");
    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PW,DB_NAME)or die("資料庫連線錯誤");

    mysqli_query($conn,"SET NAMES utf8mb4");    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>