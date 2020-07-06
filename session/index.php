<?php
    session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // var_dump($_SESSION);
        if(!$_SESSION){
        echo "訪客你好";
    ?>
    <form action="res.php" method="post">
        <input type="text" name="user">
        <input type="submit" value="登入">
    </form>
    <?php 
        }else{ 
        echo $_SESSION["USER"]."你好";
    ?>
    <a href="logout.php">登出</a>
    <?php } ?>
</body>
</html>