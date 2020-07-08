<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if(!$_SESSION){ ?>
    <div>訪客你好</div>
    <form action="auth.php" method="post">
        <div>
            帳號
            <input type="text" name="user">
        </div>
        <div>
            密碼
            <input type="password" name="pw">
        </div>
        <input type="submit" value="登入">
    </form>
    <nav>
        <a href="create.php">申請會員</a>
    </nav>
<?php }else{ ?>
    <?php echo  $_SESSION["USER"]."你好";?>
    <a href="logout.php">登出</a>
<?php } ?>
</body>
</html>