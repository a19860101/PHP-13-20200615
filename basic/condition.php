<?php
#判斷式

$x = "x";

if($x > 0){
    echo "條件成立";
}

if($x > 0){
    echo "條件成立";
}else{
    echo "條件不成立";
}

if($x > 0){
    echo "正數";
}elseif($x < 0){
    echo "負數";
}else{
    echo "error";
}
echo "<br>";
# switch
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
    default:
        echo "error";
}
echo "<br>";

switch(true){
    case $x > 0:
        echo "正數";
        break;
    case $x < 0:
        echo "負數";
        break;
    case $x === 0:
        echo 0;
        break;
    default:
        echo "error";
}