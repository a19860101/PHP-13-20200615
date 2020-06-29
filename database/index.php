<?php
    require_once("conn.php");
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn,$sql);
    // var_dump($result);
    // $row = mysqli_fetch_assoc($result);
    // $row = mysqli_fetch_row($result);
    // $row = mysqli_fetch_array($result);
    // var_dump($row);
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
<h1>hello 學員資料</h1>
<nav>
    <a href="create.php">新增學員資料</a>
</nav>
<table>
    <tr>
        <th>#</th>
        <th>姓名</th>
        <th>MAIL</th>
        <th>性別</th>
        <th>學歷</th>
        <th>動作</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)){ ?> 
    <tr>
        <td><?php echo $row["id"];?></td>
        <td><?php echo $row["user"];?></td>
        <td><?php echo $row["mail"];?></td>
        <td><?php echo $row["gender"];?></td>
        <td><?php echo $row["edu"];?></td>
        <td>
            <a href="detail.php?id=<?php echo $row["id"];?>">檢視</a>
        </td>
    </tr>
    <?php } ?>
</table>





<?php
    // while($row = mysqli_fetch_assoc($result)){
    //     echo "<tr>";
    //     echo "<td>".$row["id"]."</td>";
    //     echo "<td>".$row["user"]."</td>";
    //     echo "<td>".$row["mail"]."</td>";
    //     echo "<td>".$row["gender"]."</td>";
    //     echo "<td>".$row["edu"]."</td>";
    //     echo "</tr>";
    // }
?>
    <!-- </table> -->
</body>
</html>