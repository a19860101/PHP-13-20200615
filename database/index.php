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
</head>
<body>
<h1>hello php</h1>
<?php
    while($row = mysqli_fetch_assoc($result)){
        echo $row["user"];
        echo $row["mail"];
        echo $row["gender"];
        echo $row["edu"];
        echo "<hr>";
    }
?>
</body>
</html>