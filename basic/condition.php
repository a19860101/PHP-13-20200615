<?php
#判斷式

$x = "asdf";

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
