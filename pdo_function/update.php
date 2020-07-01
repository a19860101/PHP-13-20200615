<?php
    try{
        require_once("pdo.php");
        $user = $_POST["user"];
        $mail = $_POST["mail"];
        $gender = $_POST["gender"];
        $edu = $_POST["edu"];
        $skill = implode(",",$_POST["skill"]);
        $comment = $_POST["comment"];
        $id = $_POST["id"];
        $sql = "UPDATE students SET user=?,mail=?,gender=?,edu=?,skill=?,comment=? WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user,$mail,$gender,$edu,$skill,$comment,$id]);
        header("location:index.php");
    }catch(PDOException $e){
        echo $e->getMessage();
    }