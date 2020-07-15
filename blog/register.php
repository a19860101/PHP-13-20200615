<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="" method="post">
                <div class="form-group">
                    <label for="user">帳號</label>
                    <input type="text" name="user" id="user" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pw">密碼</label>
                    <input type="text" name="pw" id="pw" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" value="申請">
            </form>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>