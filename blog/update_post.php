<?php
     include("pdo.php");
     include("function/post.php");
     $title = $_POST["title"];
    $content = $_POST["content"];
    $update_at = $now;
    $id = $_POST["id"];

    if($_FILES["img"]["name"]){
          //圖片經過刪除再上船->$path =uploadImg($_FILES["img"]);
          $path =uploadImg($_FILES["img"]);
          // echo 1;
     }elseif(!$_FILES["img"]["name"] && $_POST["img"]){
          //圖片存在不做任何動作
          $path = $_POST["img"];

     }elseif(!$_FILES["img"]["name"]){
          //圖片刪除->$path = "no-pic.png"
          // echo 3;
          $path = "no-pic.png";
     }
    update($title,$content,$update_at,$path,$id);
    header("location:index.php");

     