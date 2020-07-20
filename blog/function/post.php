<?php
    function showAll($order="DESC"){
        try {
            global $pdo;
            // $sql = "SELECT * FROM posts ORDER BY id {$order}";
            $sql = "
                SELECT posts.* , members.user ,categories.title AS c_title FROM posts 
                LEFT JOIN categories
                ON posts.c_id = categories.id
                LEFT JOIN members
                ON posts.m_id = members.id
                ORDER BY id {$order}
            ";
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
    function showAllWithCate($c_id,$order="DESC"){
        try {
            global $pdo;
            $sql = "
                SELECT posts.* , members.user ,categories.title AS c_title FROM posts 
                LEFT JOIN categories
                ON posts.c_id = categories.id
                LEFT JOIN members
                ON posts.m_id = members.id
                WHERE c_id = ?
                ORDER BY id {$order}
            ";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$c_id]);
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
            $sql = "SELECT posts.*,members.user,categories.title AS c_title FROM posts 
                    LEFT JOIN categories
                    ON posts.c_id = categories.id
                    LEFT JOIN members
                    ON posts.m_id = members.id
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
    function uploadImg($file){
        $type = $file["type"];
        switch($type){
            case "image/jpeg":
                $name =  md5(uniqid()).".jpg";
                break;
            case "image/png":
                $name =  md5(uniqid()).".png";
                break;
            case "image/gif":
                $name =  md5(uniqid()).".gif";
                break;
            default:
                // echo "檔案格式錯誤";
                echo "<script>alert('檔案格式錯誤')</script>";
                header("Refresh:1;url=index.php");
                return;
        }
        $tmp_name = $file["tmp_name"];
        $error = $file["error"];
        $size = $file["size"];
        $target = "images/{$name}";
        if($error == 0){
            if(move_uploaded_file($tmp_name,$target)){
                echo "上傳成功";
                header("Refresh:1;url=index.php");
            }
        }
    }
