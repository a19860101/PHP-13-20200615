<?php
    require_once("conn.php");
    $user = $_POST["user"];
    $mail = $_POST["mail"];
    $gender = $_POST["gender"];
    $edu = $_POST["edu"];
    $skill = implode(",",$_POST["skill"]);
    $comment = $_POST["comment"];

    // echo $user,$mail,$gender,$edu,$skill,$comment;
    $sql = "INSERT INTO students (user,mail,gender,edu,skill,comment,create_at)
            VALUES('$user','$mail','$gender','$edu','$skill','$comment',NOW())";
    mysqli_query($conn,$sql);
    header("location:index.php");