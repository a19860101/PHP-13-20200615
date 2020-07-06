<?php    
    require_once("pdo.php");
    require_once("function.php");
    $user = $_POST["user"];
    $mail = $_POST["mail"];
    $gender = $_POST["gender"];
    $edu = $_POST["edu"];
    $skill = implode(",",$_POST["skill"]);
    $comment = $_POST["comment"];
    $create_at = date("Y-m-d H:i:s");
    store($user,$mail,$gender,$edu,$skill,$comment,$create_at);
    header("location:index.php");