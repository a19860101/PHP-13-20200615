<?php
     include("pdo.php");
     include("function/post.php");
     $title = $_POST["title"];
    $content = $_POST["content"];
    $update_at = $now;
    $id = $_POST["id"];
    update($title,$content,$update_at,$id);
    header("location:index.php");
