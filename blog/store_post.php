<?php
    session_start();
    include("pdo.php");
    include("function/post.php");
    $title = $_POST["title"];
    $content = $_POST["content"];
    $m_id = $_SESSION["ID"];
    $c_id = $_POST["c_id"];
    $create_at = $now;
    $update_at = $now;
    $path = ""; 
    store($title,$content,$m_id,$c_id,$create_at,$update_at,$path);
    header("Location:index.php");