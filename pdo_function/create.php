<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello 新增學員資料</h1>
    <form action="store.php" method="post">
        <div>
            姓名
            <input type="text" name="user">
        </div>
        <div>
            Mail
            <input type="text" name="mail">
        </div>
        <div>
            性別
            <input type="radio" name="gender" value="男">男
            <input type="radio" name="gender" value="女">女
            <input type="radio" name="gender" value="不透漏">不透漏
        </div>
        <div>
            教育程度
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
            <input type="checkbox" name="skill[]" value="影片剪輯">影片剪輯
        </div>
        <div>
            備註
            <textarea name="comment" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="新增">
        <input type="button" value="取消" onclick="history.back()">

    </form>
</body>
</html>