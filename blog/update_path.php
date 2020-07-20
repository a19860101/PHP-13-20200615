<?php
    try{
        include('pdo.php');

        unlink("images/".$_GET["path"]);

        $path = "no-pic.png";
        $id = $_GET["id"];
        $sql = "UPDATE posts SET path = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$path,$id]);

        header("location:edit_post.php?id={$id}");
    }catch(PDOException $e){
        echo $e->getMessage();
    }
