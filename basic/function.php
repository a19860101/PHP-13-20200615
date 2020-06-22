<?php
    function test(){
        $x = "Hello";
        echo $x;
    }
    function test2($x){
        echo $x;
    }
    function test3($x,$y){
        echo $x*$y;
    }
    function test4($x=0){
        echo $x;
    }
    function hello(){
        $x = 100;
        $y = 200;
        return $x+$y;
    }
    // test();
    // test2(100);
    // test3(12,3);
    // test4(456);
    // echo hello();
    $h = hello();
    echo $h;

