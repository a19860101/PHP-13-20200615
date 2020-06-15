<?php
# 運算子
# 算數運算子
$x = 68;
$y = 30;

echo $x + $y;
echo "<br>";
echo $x - $y;
echo "<br>";
echo $x * $y;
echo "<br>";
echo $x / $y;
echo "<br>";
echo $x % $y;
echo "<br>";

#比較運算子
var_dump($x > $y);
var_dump($x >= $y);
var_dump($x < $y);
var_dump($x <= $y);
var_dump($x == $y);
var_dump($x === $y);#資料與資料型別皆須相等
var_dump($x != $y);
var_dump($x <> $y);

echo "<br>";
$a = 100;
$b = "100";
var_dump($a == $b);
var_dump($a === $b);
echo "<br>";
#賦值運算子 指定運算子

/*
echo $x = $y;
echo $x += $y; #$x = $x + $y
echo $x -= $y; #$x = $x - $y
echo $x *= $y; #$x = $x * $y
echo $x /= $y; #$x = $x / $y
echo $x %= $y; #$x = $x % $y
*/

#邏輯運算子
/*
    &&  AND
    ||  OR
    XOR
    
    !   NOT
*/
var_dump($x > 0 && $y > 0);
echo "<br>";
var_dump($x > 0 && $y < 0);
echo "<br>";
var_dump($x > 0 || $y < 0);
echo "<br>";
var_dump($x > 0 || $y > 0);
echo "<br>";
var_dump($x > 0 xor $y > 0);
echo "<br>";
var_dump($x > 0 xor $y < 0);
echo "<br>";
var_dump($x < 0 xor $y < 0);
echo "<br>";

var_dump(!isset($x));
echo "<br>";
#判斷變數不存在

#字串運算子

echo "今日參訪人數共10人";
echo "<br>";
echo "今日參訪人數共".$x."人";
echo "<br>";
echo "今日參訪人數共{$y}人";
echo "<br>";
echo $x.$y;