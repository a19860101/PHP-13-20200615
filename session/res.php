<?php
    session_start();
    $_SESSION["USER"] = $_POST["user"];
    // echo $_SESSION["USER"];
    header("location:index.php");