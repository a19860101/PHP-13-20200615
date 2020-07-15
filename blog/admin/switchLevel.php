<?php
    include("../pdo.php");
    include("../function/user.php");
    switchLevel($_POST["id"],$_POST["level"]);
    header("Location:member-list.php");