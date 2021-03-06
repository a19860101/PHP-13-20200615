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
                作者:<?php echo $row["user"];?>
                分類:<?php echo $row["c_title"];?>
                
            </div>
            <div>
                <img src="images/<?php echo $row["path"];?>" class="w-100">
            </div>
            <div class="my-4">
                <?php echo $row["content"];?>
            </div>
            <div>
                <a href="#" class="btn btn-info" onclick="history.back()">回上頁</a>
                
                <?php if($_SESSION && $row["m_id"]==$_SESSION["ID"]){ ?>
                <a href="edit_post.php?id=<?php echo $row["id"];?>" class="btn btn-success">編輯</a>
                <form action="delete_post.php" method="post" class="d-inline">
                    <input type="hidden" value="<?php echo $row["id"];?>" name="id">
                    <input type="hidden" value="<?php echo $row["path"];?>" name="path">
                    <input type="submit" value="刪除" class="btn btn-danger" onclick="return confirm('確認刪除？')">
                </form>
                <?php }?>

            </div>
            <div>
                建立時間:<?php echo $row["create_at"];?>
            <div>
            </div>
                最後更新時間:<?php echo $row["update_at"];?>
            </div>
        </div>
    </div>
</div>
<?php include("template/footer.php");?>