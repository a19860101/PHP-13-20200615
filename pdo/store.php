<?php
    try {
        require_once("pdo.php");
        $user = $_POST["user"];
        $mail = $_POST["mail"];
        $gender = $_POST["gender"];
        $edu = $_POST["edu"];
        $skill = implode(",",$_POST["skill"]);
        $comment = $_POST["comment"];
        $create_at = date("Y-m-d H:i:s");
        $sql = "INSERT INTO students(user,mail,gender,edu,skill,comment,create_at)VALUES(?,?,?,?,?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user,$mail,$gender,$edu,$skill,$comment,$create_at]);
        header("location:index.php");
    }catch(PDOException $e){
        echo $e->getMessage();
    }