<?php
    require_once("conn.php");
    $user = $_POST["user"];
    $mail = $_POST["mail"];
    $gender = $_POST["gender"];
    $edu = $_POST["edu"];
    $skill = implode(",",$_POST["skill"]);
    $comment = $_POST["comment"];

    echo $user,$mail,$gender,$edu,$skill,$comment;