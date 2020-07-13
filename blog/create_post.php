<?php
    include("pdo.php");
    include("function/cate.php");
    $rows = showAllCate();
?>
<?php include("template/header.php");?>
<?php include("template/nav.php");?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <form action="store_post.php" method="post">
                <div class="form-group">
                    <label for="title">文章標題</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content">文章內文</label>
                    <textarea name="content" id="content" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="c_id">文章分類</label>
                    <select name="c_id" id="c_id" class="form-control">
                    <?php foreach($rows as $row){ ?>
                        <option value="<?php echo $row["id"];?>"><?php echo $row["title"];?></option>
                    <?php } ?>
                    </select>
                </div>
                <input type="submit" value="新增文章" class="btn btn-primary">
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