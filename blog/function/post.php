<?php
    function showAll($order="DESC"){
        try {
            global $pdo;
            $sql = "SELECT * FROM posts ORDER BY id {$order}";
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
    function show($id){
        try{
            global $pdo;
            $sql = "SELECT * FROM posts WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);
            $row = $stmt->fetch();
            return $row;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function store($title,$content,$m_id,$c_id,$create_at,$update_at){
        try {
            global $pdo;            
            $sql = "INSERT INTO posts(title,content,m_id,c_id,create_at,update_at)VALUES(?,?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$title,$content,$m_id,$c_id,$create_at,$update_at]);
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
