<?php
    try {
        require_once("pdo.php");
        $user = $_POST["user"];
        $pw = $_POST["pw"];
        $create_at = date("Y-m-d H:i:s");
        $sql = "INSERT INTO members(user,pw,create_at)VALUES(?,?,?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user,$pw,$create_at]);
        header("Refresh:5;url=index.php");
        echo "申請成功，請重新登入";
    }catch(PDOException $e){
        echo $e->getMessage();
    }