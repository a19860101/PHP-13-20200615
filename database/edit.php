<?php
    require_once("conn.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM students WHERE id = {$id}";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello 編輯學員資料</h1>
    <form action="update.php" method="post">
        <div>
            姓名
            <input type="text" name="user" value="<?php echo $row["user"];?>">
        </div>
        <div>
            Mail
            <input type="text" name="mail" value="<?php echo $row["mail"];?>">
        </div>
        <div>
            性別
            <!-- <input type="radio" name="gender" value="男" <?php #if($row["gender"]=="男"){echo "checked";}?>>男 -->
            <!-- <input type="radio" name="gender" value="女" <?php #if($row["gender"]=="女"){echo "checked";}?>>女 -->
            <!-- <input type="radio" name="gender" value="不透漏" <?php #if($row["gender"]=="不透漏"){echo "checked";}?>>不透漏 -->
            <input type="radio" name="gender" value="男" <?php echo $row["gender"]=="男"?"checked":"";  ?>>男
            <input type="radio" name="gender" value="女" <?php echo $row["gender"]=="女"?"checked":""; ?>>女
            <input type="radio" name="gender" value="不透漏" <?php echo $row["gender"]=="不透漏"?"checked":""; ?>>不透漏
        </div>
        <div>
            教育程度
            <select name="edu">
                <option value="國小"        <?php echo $row["edu"]=="國小"?"selected":"";?>>國小</option>
                <option value="國中"        <?php echo $row["edu"]=="國中"?"selected":"";?>>國中</option>
                <option value="高中職"      <?php echo $row["edu"]=="高中職"?"selected":"";?>>高中職</option>
                <option value="大專院校"    <?php echo $row["edu"]=="大專院校"?"selected":"";?>>大專院校</option>
                <option value="研究所以上"  <?php echo $row["edu"]=="研究所以上"?"selected":"";?>>研究所以上</option>
            </select>
        </div>
        <div>
            專長
            <?php 
                $skills = explode(",",$row["skill"]);
            ?>
            <input type="checkbox" name="skill[]" value="平面設計" <?php if(in_array("平面設計",$skills)){echo "checked";}?>>平面設計
            <input type="checkbox" name="skill[]" value="網頁設計" <?php if(in_array("網頁設計",$skills)){echo "checked";}?>>網頁設計
            <input type="checkbox" name="skill[]" value="影片剪輯" <?php echo in_array("影片剪輯",$skills)?"checked":"";?>>影片剪輯
        </div>
        <div>
            備註
            <textarea name="comment" cols="30" rows="10"><?php echo $row["comment"];?></textarea>
        </div>
        <input type="submit" value="儲存">
    </form>
</body>
</html>