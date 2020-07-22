<?php
    include("pdo.php");
    include("function/post.php");
    $rows = showAll();
?>
<?php include("template/header.php");?>
<?php include("template/nav.php");?>
<div class="container">
    <div class="row justify-content-center">
        <?php foreach($rows as $row){ ?>
        <div class="col-10 my-3 border p-5">
            <img src="thumbs/<?php echo $row["path"];?>" class="w-100">
            <h2 class="my-3"><?php echo $row["title"];?></h2>
            <span>分類:<?php echo $row["c_title"];?></span>
            <br>
           
            <div>
                <?php echo mb_substr(strip_tags($row["content"]),0,150,"utf-8");?>...
            </div>
            <div class="text-right my-3">
                <a href="show_post.php?id=<?php echo $row["id"];?>" class="btn btn-info">閱讀更多</a>
            </div>
            <span>作者:<?php echo $row["user"];?></span>
            <div>
                最後更新時間:<?php echo $row["update_at"];?>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include("template/footer.php");?>