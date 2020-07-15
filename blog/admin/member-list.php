<?php
    include("../pdo.php");
    include("../function/user.php");
    $users = showAllUser("ASC");
?>
<?php include("template/header.php"); ?>
<?php include("template/nav.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>帳號</th>
                    <th>申請時間</th>
                    <th>權限</th>
                    <th>動作</th>
                </tr>
                <?php foreach($users as $user){ ?>
                <tr>
                    <td><?php echo $user["id"];?></td>
                    <td><?php echo $user["user"];?></td>
                    <td><?php echo $user["create_at"];?></td>
                    <td><?php echo $user["level"]==1?"一般會員":"管理員";?></td>
                    <td>
                        <form action="switchLevel.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $user["id"];?>">
                            <input type="hidden" name="level" value="<?php echo $user["level"];?>">
                            <?php if($user["level"] == 0){ ?>
                            <input type="submit" value="切換權限" class="btn btn-danger">
                            <?php }else{ ?>
                            <input type="submit" value="切換權限" class="btn btn-success">
                            <?php } ?>
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
<?php include("template/footer.php"); ?>