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
    function store($title,$content,$m_id,$c_id,$create_at,$update_at,$path){
        try {
            global $pdo;            
            $sql = "INSERT INTO posts(title,content,m_id,c_id,create_at,update_at,path)VALUES(?,?,?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$title,$content,$m_id,$c_id,$create_at,$update_at,$path]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function update($title,$content,$update_at,$path,$id){
        try{
            global $pdo;
            $sql = "UPDATE posts SET title=?,content=?,update_at=?,path=? WHERE id=?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$title,$content,$update_at,$path,$id]);
            
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
                imgResize($target,$type,$name);
                return $name;
                // echo "上傳成功";
                // header("Refresh:1;url=index.php");
            }
        }
    }
    function imgResize($target,$type,$name){
        switch($type){
            case "image/jpeg":
                $canvas = imagecreatefromjpeg($target);
                break;
            case "image/png":
                $canvas = imagecreatefrompng($target);
                break;
            case "image/gif":
                $canvas = imagecreatefromgif($target);
                break;
        }
        $canvas_w = imagesx($canvas);
        $canvas_h = imagesy($canvas);
        $new_w = 600;
        $new_h = $canvas_h / $canvas_w * 600;
        $new_canvas = imagecreatetruecolor($new_w,$new_h);
        imagecopyresampled($new_canvas,$canvas,0,0,0,0,$new_w,$new_h,$canvas_w,$canvas_h);
    
        imagejpeg($new_canvas,"thumbs/{$name}");
        imagepng($new_canvas,"thumbs/{$name}");
        imagegif($new_canvas,"thumbs/{$name}");
    
    
    }
