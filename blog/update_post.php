<?php
     include("pdo.php");
     include("function/post.php");
     $title = $_POST["title"];
    $content = $_POST["content"];
    $update_at = $now;
    $id = $_POST["id"];

     if($_FILES["img"]["name"] == ""){
          $path = "no-pic.png";
     }else{
          $path = uploadImg($_FILES["img"]);
     }
    update($title,$content,$update_at,$path,$id);
    header("location:index.php");
