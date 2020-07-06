<?php
    session_start();
    try {
        require_once("pdo.php");
        $user = $_POST["user"];
        $pw = $_POST["pw"];
        if($user=="" || $pw == ""){
            header("location:index.php");
        }
        $sql = "SELECT * FROM members WHERE user = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user]);
        $row = $stmt->fetch();
        if($pw == $row["pw"]){
            echo "登入成功";
            $_SESSION["USER"] = $user;
            $_SESSION["LV"] = $row["level"];
            echo "會員:{$_SESSION["USER"]},權限:{$_SESSION["LV"]}";
        }else{
            echo "登入失敗";
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }