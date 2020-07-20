<?php
    include("pdo.php");
    include("function/post.php");

    if($_POST["path"] != "no-pic.png"){
        unlink("images/".$_POST["path"]);
    }

    delete($_POST["id"]);
    header("location:index.php");