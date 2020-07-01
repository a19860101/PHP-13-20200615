<?php
    try{
        require_once("pdo.php");
        $id = $_GET["id"];
        $sql = "SELECT * FROM students WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
        $row = $stmt->fetch();
    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學員資料</title>
</head>
<body>
    <h1>hello 學員資料</h1>
    <ul>
        <li>姓名:<?php echo $row["user"];?></li>
        <li>Mail:<?php echo $row["mail"];?></li>
        <li>性別:<?php echo $row["gender"];?></li>
        <li>學歷:<?php echo $row["edu"];?></li>
        <li>專長:<?php echo $row["skill"];?></li>
        <li>備註:<?php echo $row["comment"];?></li>
        <li>建立時間:<?php echo $row["create_at"];?></li>
    </ul>
    <form action="delete.php" method="post">
        <input type="hidden" value="<?php echo $row["id"];?>" name="id">
        <input type="submit" value="刪除" onclick="return confirm('確認刪除？')">
        <input type="button" value="回上頁" onclick="history.back()">

    </form>
</body>
</html>