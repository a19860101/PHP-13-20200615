<?php
    include("pdo.php");
    include("function/post.php");
    delete($_POST["id"]);
    header("location:index.php");