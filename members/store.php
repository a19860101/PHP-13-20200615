<?php
    try {
        require_once("pdo.php");
        $user = $_POST["user"];
        $pw = $_POST["pw"];
        $create_at = date("Y-m-d H:i:s");

        $sql_check = "SELECT * FROM members WHERE user = ?";
        $stmt_check = $pdo->prepare($sql_check);
        $stmt_check->execute([$user]);

        // $row_check = $stmt_check->fetch();
        // if($row_check["user"] == $user){
        //     echo "帳號重複，請重新申請";
        // }else{
        //     echo "帳號可使用";
        // }
        $row_num = $stmt_check->rowCount();
        echo $row_num;
        if($row_num > 0){
            header("Refresh:3;url=create.php");
            echo "帳號重複，請重新申請";
        }else{
            $sql = "INSERT INTO members(user,pw,create_at)VALUES(?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$user,$pw,$create_at]);
            header("Refresh:5;url=index.php");
            echo "申請成功，請重新登入";
        }



        
        
    }catch(PDOException $e){
        echo $e->getMessage();
    }