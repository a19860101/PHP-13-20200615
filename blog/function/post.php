<?php
    function showAll(){
        try {
            global $pdo;
            $sql = "SELECT * FROM posts";
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
    function update($user,$mail,$gender,$edu,$skill,$comment,$id){
        try{
            global $pdo;
            $sql = "UPDATE students SET user=?,mail=?,gender=?,edu=?,skill=?,comment=? WHERE id=?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$user,$mail,$gender,$edu,$skill,$comment,$id]);
            
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function delete($id){
        try{
            // require_once("pdo.php");
            // $id = $_GET["id"];
            global $pdo;
            $sql = "DELETE FROM students WHERE id = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$id]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
