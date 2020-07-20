<?php 
    include("pdo.php");
    include("function/post.php");
    $row = show($_GET["id"]);
?>
<?php include("template/header.php");?>
<?php include("template/nav.php");?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <form action="update_post.php" method="post">
                <div class="form-group">
                    <label for="title">文章標題</label>
                    <input type="text" name="title" id="title" class="form-control" value="<?php echo $row["title"];?>">
                </div>
                <div>
                    <?php if($row["path"] == "no-pic.png"){ ?>
                    <input type="file" name="img">
                    <?php }else{ ?>
                    <img src="images/<?php echo $row["path"];?>" width="150">
                    <a href="#" class="btn btn-danger btn-sm">刪除</a>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <label for="content">文章內文</label>
                    <textarea name="content" id="content" class="form-control" cols="30" rows="10"><?php echo $row["content"];?></textarea>
                </div>
                <div class="form-group">
                    <label for="c_id">文章分類</label>
                    <select name="c_id" id="c_id" class="form-control">
                    <?php foreach($cates as $cate){ ?>
                        <option value="<?php echo $cate["id"];?>" 
                        <?php echo $cate["id"]===$row["c_id"] ? "selected":"" ?>
                        ><?php echo $cate["title"];?></option>
                    <?php } ?>
                    </select>
                </div>
                <input type="hidden" value="<?php echo $row["id"];?>" name="id">
                <input type="submit" value="儲存" class="btn btn-primary">
                <input type="button" value="取消" class="btn btn-danger" onclick="history.back()">
            </form>
        </div>
    </div>
</div>
<?php include("template/footer.php");?>
<script src="https://cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>