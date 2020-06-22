<?php
    // var_dump($_FILES);

    // $name = $_FILES["img"]["name"];
    
    $type = $_FILES["img"]["type"];
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
            header("Refresh:1;url=file.php");
            return;
    }
    $tmp_name = $_FILES["img"]["tmp_name"];
    $error = $_FILES["img"]["error"];
    $size = $_FILES["img"]["size"];
    $target = "images/{$name}";
    if($error == 0){
        if(move_uploaded_file($tmp_name,$target)){
            echo "上傳成功";
            header("Refresh:1;url=file.php");
        }
    }