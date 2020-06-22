<?php
    var_dump($_FILES);

    $name = $_FILES["img"]["name"];
    $type = $_FILES["img"]["type"];
    $tmp_name = $_FILES["img"]["tmp_name"];
    $error = $_FILES["img"]["error"];
    $size = $_FILES["img"]["size"];
    $target = "images/{$name}";
    if($error == 0){
        if(move_uploaded_file($tmp_name,$target)){
            echo "上傳成功";
            header("Refresh:3;url=file.php");
        }
    }