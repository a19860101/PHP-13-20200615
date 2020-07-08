<?php
    include("pdo.php");
    include("function/post.php");
    $title = $_POST["title"];
    $content = $_POST["content"];
    $m_id = 1;
    $c_id = 1;
    $create_at = $now;
    $update_at = $now;

    store($title,$content,$m_id,$c_id,$create_at,$update_at);
    header("Location:index.php");