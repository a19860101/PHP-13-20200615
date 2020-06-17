<?php
    $x = ["banana","apple","dog","egg","cat","fork"];
    $drinks = ["紅茶"=>20,"奶茶"=>30,"綠茶"=>20,"珍珠奶茶"=>40];
    $z = 10;

    // echo count($drinks);

    // sort($x);
    // rsort($x);
    // shuffle($x);

    foreach($x as $data){
        echo $data;
        echo "<br>";
    }

    // ksort($drinks);
    // krsort($drinks); 
    // asort($drinks);
    // arsort($drinks);
    foreach($drinks as $key => $val){
        echo $key .":". $val;
        echo "<br>";
    }

    # in_array("text",$a) 判斷text是否在$a陣列內

    // var_dump(in_array("ppp",$x));
    if(in_array("apple",$x)){
        echo "apple存在";
    }else{
        echo "apple不存在";
    }

    # is_array($a) 判斷$a是否為陣列
    // var_dump(is_array($z));
    if(is_array($z)){
        echo "是陣列";
    }else{
        echo "不是陣列";
    }
    echo "<br>";

    #compact

    $name = "John";
    $email = "john@gmail.com";
    $gender = "male";
    $age = 18;

    // $users = [$name,$email,$gender,$1ge];
    $users = compact("name","email","gender","age");
    // var_dump($users);
    foreach($users as $key => $val){
        echo $key." : ". $val;
        echo "<br>";
    }

    # implode() 陣列轉字串
    $x_string = implode("__",$x);
    echo $x_string;
    echo "<br>";

    # explode() 字串轉陣列
    $string = "投球__失憶多__洪一中__推測__是重訓";
    $string_array = explode("__",$string);
    var_dump($string_array);