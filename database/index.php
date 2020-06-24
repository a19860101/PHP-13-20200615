<?php
    require_once("conn.php");
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn,"SELECT * FROM students");
    $row = mysqli_fetch_assoc($result);

    // $row = mysqli_fetch_row($result);
    // $row = mysqli_fetch_array($result);
    echo $row["user"];
    echo "<br>";
    echo $row["mail"];
    echo "<br>";
    echo $row["gender"];
    echo "<br>";
    echo $row["edu"];
    echo "<br>";
    echo $row["create_at"];
    echo "<br>";
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
</body>
</html>