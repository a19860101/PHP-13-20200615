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

