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
            foreach($imgs as $img){
                // echo $img;
                // echo "<br>";
                echo "<img src='{$img}' width='200'>";
            }
        ?>
    </div>
</body>
</html>