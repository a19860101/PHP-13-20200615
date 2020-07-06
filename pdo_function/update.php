<?php
    require_once("pdo.php");
    require_once("function.php");
    $user = $_POST["user"];
    $mail = $_POST["mail"];
    $gender = $_POST["gender"];
    $edu = $_POST["edu"];
    $skill = implode(",",$_POST["skill"]);
    $comment = $_POST["comment"];
    $id = $_POST["id"];
    update($user,$mail,$gender,$edu,$skill,$comment,$id);
    header("location:index.php");
    