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
            <h2><?php echo $row["title"];?></h2>
            <div>
                <?php echo $row["content"];?>
            </div>
            <div>
                最後更新時間:<?php echo $row["update_at"];?>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include("template/footer.php");?>