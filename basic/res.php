<?php
    // var_dump($_POST);
    $user = $_POST["user"];
    $mail = $_POST["mail"];
    $gender = $_POST["gender"];
    $edu = $_POST["edu"];

    $skills = implode("__",$_POST["skill"]);
    $comment = $_POST["commen"];

    // echo $skills;
    // echo $skills;
    // var_dump($skills);
    // foreach($skills as $skill){
    //     echo $skill;
    // }

    // echo $_GET["user"];
    // echo "<br>";
    // echo $_GET["mail"];