# PHP基礎

## 變數 variable
### 規則
1. 首字不可為數字
2. 大小寫有別
3. 符號只可用底線 
### 資料型別 data type

1. 字串 string
2. 整數 int
3. 浮點數 float
4. 布林 boolean

## 常數 constant variable
```php
define("常數名稱","值");
```
## 運算子 operator
### 算術運算子
```php
$x = 100;
$y = 50;

echo $x + $y;//150
echo $x - $y;//50
echo $x * $y;//5000
echo $x / $y;//2
echo $x % $y;//餘數0
```
***
### 比較運算子
```php
$x = 100;
$y = "100";

var_dump($x > $y);  //bool(false)
var_dump($x < $y);  //bool(false)
var_dump($x >= $y); //bool(true)
var_dump($x <= $y); //bool(true)
var_dump($x == $y); //bool(true)
var_dump($x === $y);//bool(false)
var_dump($x != $y); //bool(false)
var_dump($x <> $y); //bool(false)
var_dump($x !== $y);//bool(true)
```
***
### 賦值運算子
```php
echo $x = $y;
echo $x += $y; //$x = $x + $y     
echo $x -= $y; //$x = $x - $y     
echo $x *= $y; //$x = $x * $y     
echo $x /= $y; //$x = $x / $y     
echo $x %= $y; //$x = $x % $y    
```
***
###  邏輯運算子
* && - AND
* || - OR
* ! - NOT
* XOR
```php
$x = 100;
$y = 30;
var_dump($x > 0 && $y < 0); //false
var_dump($x > 0 || $y < 0); //true
var_dump(!isset($x));       //false
var_dump($x > 0 xor $y > 0); //false
//其中一個為真，但不能兩個都為真
```
***
### 字串運算子
```php
$s = "John";
echo "hello ".$s;
echo "hello $s";
echo 'hello '.$s;
echo "hello {$s}";
```

## 判斷式 condition

### if,else,elseif
```php
$x = 2;
if($x > 0){
    echo "success";
}
//success

if($x < 0){
    echo "success 2";
}else{
    echo "error"; 
}
//error

if($x > 0){
    echo "success 3";
}elseif($x < 0){
    echo "success 4";
}else{
    echo "error 2";
}
//success 3
```
### switch

```php
$x = 2;
switch($x){
    case 0:
        echo 0;
        break;
    case 1:
        echo 1;
        break;
    case 2:
        echo 2;
        break;
    case 3:
        echo 3;
        break;
    default:
        echo "error";
}
// 2

//比對範圍
switch(true){
    case $x > 0:
        echo "正整數";
        break;
    case $x < 0:
        echo "負整數";
        break;
    default:
        echo "error";
}
//正整數
```
## 迴圈 loop
### for
```php
for($i=0;$i<10;$i++){
    echo $i;
}
//0123456789
```
### while
```php
 $x = 0;
while($x < 10){
    $x++;
    echo $x;
}
//12345678910
```

### do...while
```php
$y = 0;
do {
    $y++;
    echo $y;
}
while($y < 0)
//1
```

## 陣列 Array
### 定義陣列
```php
# 第一種方法
$a = array();
$a[0] = "HTML";
$a[1] = "CSS";
$a[2] = "JAVASCRIPT";

# 第二種方法
$a = array("HTML","CSS","JAVASCRIPT");

# 第三種方法
$a = ["HTML","CSS","JAVASCRIPT"];
```

### 帶有鍵值的陣列
```php
$drinks = ["紅茶"=>20,"綠茶"=>20,"奶茶"=>30,"珍珠奶茶"=>40];
$letters = ["A"=>"Apple","B"=>"Banana","C"=>"Cat"];
```

### 迭代陣列
```php
//for迴圈
for($i=0;$i<count($a);$i++){
    echo $a[$i];
}
//foreach迴圈
foreach($a as $item){
    echo $item;
}
foreach($drinks as $key => $value){
    echo $key.":".$value;
}
foreach($letters as $letter => $word){
    echo $letter." for ".$word;
}
```

### 排序陣列

* sort()
* rsort()
* shuffle()
* ksort()
* krsort()
* asort()
* arsort()

### 陣列方法
#### in_array()
```php
$datas = ["HTML","CSS","JAVASCRIPT","PHP","MYSQL"];
var_dump(in_array("HTML",$datas));
//bool(true)
var_dump(in_array("123",$datas));
//bool(false)
```
#### is_array()
```php
$datas = ["HTML","CSS","JAVASCRIPT","PHP","MYSQL"];
$x = 0;
var_dump(is_array($datas));
//bool(true)
var_dump(is_array($x));
//bool(false)
```


#### compact()
```php
$user = "john";
$mail = "john@gmail.com";
$age = "23";
$gender = "male";

// $user_info = array();
// array_push($user_info,$user,$mail,$age,$gender);

// var_dump($user_info);
// echo $user_info[1];  

$user_info = compact("user","mail","age","gender");
var_dump($user_info);

echo $user_info["user"];
echo $user_info["mail"];
echo $user_info["age"];
echo $user_info["gender"];
```
#### implode()
陣列轉字串
```php
$a = ["HTML","CSS","JAVASCRIPT"];
$a_str = implode(",",$a);
// HTML,CSS,JAVASCRIPT
$a_str_2 = implode("__",$a);
// HTML__CSS__JAVASCRIPT
```
## 字串 String
### 字串方法
#### substr(),mb_substr()
擷取部分字串
```php
$str = "統一獅隊今晚在台南棒球場1329人的見證下，潘武雄在八局下代打轟出的右外野兩分砲，達成隊史第1萬4000分打點的里程碑，連第1萬4001分打點也一起進帳。"
echo substr($str,0,9);
# substr(字串,起始位置,長度)
# substr的三個字元長度為一個繁體中文字，在繁體中文中不建議使用。

echo mb_substr($str,0,10,"utf8");
# mb_substr(字串,起始位置,長度,編碼)
```

