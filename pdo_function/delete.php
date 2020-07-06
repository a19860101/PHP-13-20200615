<?php
    require_once("pdo.php");
    require_once("function.php");
    delete($_POST["id"]);
    header("location:index.php");