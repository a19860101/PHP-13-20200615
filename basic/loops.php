<?php
    #loops迴圈
    
    #for
    for($i=0;$i<10;$i++){
        echo $i;
    }
    echo "<br>";
    
    #while
    $x = 10;
    while($x < 10){
        echo $x;
        $x++;
    }
    echo "<br>";

    #do...while
    $y = 10;
    do{
        echo $y;
        $y++;
    }
    while($y < 10);
    #*foreach