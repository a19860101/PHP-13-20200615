<?php
    require_once("conn.php");
    $user = $_POST["user"];
    $mail = $_POST["mail"];
    $gender = $_POST["gender"];
    $edu = $_POST["edu"];
    $skill = implode(",",$_POST["skill"]);
    $comment = $_POST["comment"];
    $id = $_POST["id"];
    
    $sql = "UPDATE students 
            SET 
                user    = '$user',
                mail    = '$mail',
                gender  = '$gender',
                edu     = '$edu',
                skill   = '$skill',
                comment = '$comment'
            WHERE id = {$id}";
            
    mysqli_query($conn,$sql);
    header("location:index.php");