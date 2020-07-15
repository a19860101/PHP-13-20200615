<?php
    function showAllUser($order="DESC"){
        try {
            global $pdo;
            // $sql = "SELECT * FROM posts ORDER BY id {$order}";
            $sql = "SELECT * FROM members ORDER BY id {$order}";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $rows = array();
            while($row = $stmt->fetch()){
               $rows[] = $row;
            }
            return $rows;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function showUser($id){
        try{
            global $pdo;
            $sql = "SELECT posts.*,categories.title AS c_title FROM posts 
                    LEFT JOIN categories
                    ON posts.c_id = categories.id
                    WHERE posts.id = ?
                ";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);
            $row = $stmt->fetch();
            return $row;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function storeUser($user,$pw,$create_at){
        try {
            global $pdo;            
            $sql = "INSERT INTO members(user,pw,create_at)VALUES(?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$user,$pw,$create_at]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function update($title,$content,$update_at,$id){
        try{
            global $pdo;
            $sql = "UPDATE posts SET title=?,content=?,update_at=? WHERE id=?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$title,$content,$update_at,$id]);
            
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function delete($id){
        try{
            global $pdo;
            $sql = "DELETE FROM posts WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function switchLevel($id,$level){
        try {
            global $pdo;
            if($level == 0){
                $level = 1;
            }else{
                $level = 0;
            }
            $sql = "UPDATE members SET level=? WHERE id=?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$level,$id]);
            
        }catch(PDOException $e){
            echo $e->getMessage();
        }

    }
