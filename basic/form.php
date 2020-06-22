<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Post</h1>
    <form action="res.php" method="post">
        <div>
            使用者
            <input type="text" name="user">
        </div>
        <div>
            MAIL
            <input type="text" name="mail">
        </div>
        <div>
            性別
            <input type="radio" name="gender" value="男">男
            <input type="radio" name="gender" value="女">女
        </div>
        <div>
            學歷
            <select name="edu">
                <option value="國小">國小</option>
                <option value="國中">國中</option>
                <option value="高中職">高中職</option>
                <option value="大專院校">大專院校</option>
                <option value="研究所以上">研究所以上</option>
            </select>
        </div>
        <div>
            專長
            <input type="checkbox" name="skill[]" value="平面設計">平面設計
            <input type="checkbox" name="skill[]" value="網頁設計">網頁設計
            <input type="checkbox" name="skill[]" value="3d設計">3d設計
        </div>
        <input type="submit" value="送出">
    </form>
    <!-- <h1>Get</h1>
    <form action="res.php" method="get">
        <input type="text" name="user">
        <input type="text" name="mail">
        <input type="submit" value="送出">
    </form> -->
</body>
</html>