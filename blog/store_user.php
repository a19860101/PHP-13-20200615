<?php
    include("pdo.php");
    include("function/user.php");

    storeUser($_POST["user"],$_POST["pw"],$now);
    echo "<script>alert('申請成功，請重新登入!')</script>";
    header("Refresh:1;url=index.php");