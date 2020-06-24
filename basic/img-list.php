<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
    <a href="file.php">上傳圖片</a>
    </nav>
    <div>
        <?php 
            $imgs = glob("images/*");
            // var_dump($imgs);
            $img_num = count($imgs);
            // echo $img_num;
            if($img_num == 0){
                echo "目前尚無圖片";
            }else{
                echo "共有{$img_num}張圖片";
            }
            foreach($imgs as $img){
                // echo $img;
                // echo "<br>";
                // echo "<img src='{$img}' width='200'>";
                ?>
        <div>
            <img src="<?php echo $img?>" width="200">
            <a href="?del=<?php echo $img;?>">刪除</a>
        </div>
        <?php }?>
    </div>

    <?php
        if(isset($_GET["del"])){
            unlink($_GET["del"]);
            header("location:img-list.php");
        }
    ?>
</body>
</html>