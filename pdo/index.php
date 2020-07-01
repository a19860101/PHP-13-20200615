<?php
    try {
        require_once("pdo.php");
        $sql = "SELECT * FROM students";
        #預備陳述式
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $rows = array();
        while($row = $stmt->fetch()){
           $rows[] = $row;
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th {
            border-collapse: collapse;
            border: 1px solid #666;
            padding: 5px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>#</th>
            <th>姓名</th>
            <th>MAIL</th>
            <th>性別</th>
            <th>學歷</th>
            <th>動作</th>
        </tr>
        <?php foreach($rows as $r){ ?>
        <tr>
            <td><?php echo $r["id"];?></td>
            <td><?php echo $r["user"];?></td>
            <td><?php echo $r["mail"];?></td>
            <td><?php echo $r["gender"];?></td>
            <td><?php echo $r["edu"];?></td>
            <td>
                <a href="detail.php?id=<?php echo $r["id"];?>">檢視</a>
                <a href="edit.php?id=<?php echo $r["id"];?>">編輯</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>