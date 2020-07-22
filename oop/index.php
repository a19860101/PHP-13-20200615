<?php
    class Human {
        //屬性
        public $gender;
        public $skin;
        public $eye;
        //方法
        function walk(){
            echo "walk";
        }
        function run(){
            echo "run";
        }
        function jump(){
            echo "jump";
        }
    }
    //建立實體
    $john = new Human;
    $john->gender = "男";
    $john->skin ="yellow";
    $john->eye = "blue";
    $john->run();

    echo $john->gender;
    echo $john->skin;
    echo $john->eye;
    
    $may = new Human;
    $may->gender = "女";
    $may->skin ="white";
    $may->eye = "brown";
    echo $may->gender;
    echo $may->skin;
    echo $may->eye;
    $may->walk();
