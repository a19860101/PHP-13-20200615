<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="store.php" method="post">
        帳號
        <input type="text" name="user">
        密碼
        <input type="password" name="pw">
        <input type="submit" value="申請">
    </form>
    <?php
        if($_GET){
            switch($_GET["error"]){
                case "account_repeat":
                    echo "帳號重複，請重新申請";
                break;
            }
        }
    ?>
</body>
</html>