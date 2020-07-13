<?php
    include("pdo.php");
    include("function/auth.php");
    auth($_POST["user"],$_POST["pw"]);
    header("Refresh:1;url=index.php");