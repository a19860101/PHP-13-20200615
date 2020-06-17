<?php
#array 陣列

// $x = array();
// $x[0] = "apple";
// $x[1] = "banana";
// $x[2] = "cat";

// $x = array("apple","banana","cat");

// $x = ["apple","banana","cat","dog","egg","fork"];
// var_dump($x);
// echo $x[0];
// echo $x[1];
// echo $x[2];

// echo count($x);
// echo "<br>";

// for($i=0;$i<count($x);$i++){
//     echo $x[$i];
//     echo "<br>";
// }

// foreach($x as $data){
//     echo $data;
//     echo "<br>";
// }

$drinks = ["紅茶"=>20,"綠茶"=>20,"奶茶"=>30,"珍珠奶茶"=>40];
$letters = ["A"=>"Apple","B"=>"Banana","C"=>"Cat"];
// var_dump($drinks);
// var_dump($letters);
// echo $letters["A"];
// echo $letters["B"];
// echo $letters["C"];

// foreach($drinks as $key => $value){
//     echo $key.":".$value;
//     echo "<br>";
// }
foreach($letters as $letter => $word){
    echo $letter." for ".$word;
    echo "<br>";
}