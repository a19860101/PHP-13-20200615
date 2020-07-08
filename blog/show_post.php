<?php
    include("pdo.php");
    include("function/post.php");
    $row = show($_GET["id"]);
?>
<?php include("template/header.php");?>
<?php include("template/nav.php");?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 my-5">
            <h2><?php echo $row["title"];?></h2>
            <div>
                作者:<?php echo $row["m_id"];?>
                分類:<?php echo $row["c_id"];?>
                
            </div>
            <div class="my-4">
                <?php echo $row["content"];?>
            </div>
            <div>
                <a href="#" class="btn btn-info" onclick="history.back()">回上頁</a>
            </div>
            <div>
                建立時間:<?php echo $row["create_at"];?>
            <div>
            </div>
                最後更新時間:<?php echo $row["create_at"];?>
            </div>
        </div>
    </div>
</div>
<?php include("template/footer.php");?>