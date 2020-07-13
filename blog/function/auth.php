<?php
    function auth($user,$pw){
        session_start();
        try {
            global $pdo;
            // $user = $_POST["user"];
            // $pw = $_POST["pw"];
            if($user=="" || $pw == ""){
                header("location:index.php");
            }
            $sql = "SELECT * FROM members WHERE user = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$user]);
            $row = $stmt->fetch();
            if($pw == $row["pw"]){
                $_SESSION["USER"] = $user;
                $_SESSION["LV"] = $row["level"];
                echo "<script>alert('登入成功');</script>";
            }else{
                echo "登入失敗";
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    