<?php
    class Human {
        //屬性 ->預設值,需共用的值
        public $gender = "male";
        public $skin = "black";
        public $eye;
        private $hair = "black";
        // public,protected,private
        //方法
        function walk(){
            echo "walk";
        }
        function run(){
            echo $this->skin;
        }
        function jump($color){
            if($color == "black"){
                echo "High";
            }
        }
    }
    //建立實體
    $john = new Human;
    // $john->jump("white");
    // echo $john->hair;
    class SuperHuman extends Human{
        function fly(){
            echo $this->hair;
        }
    }
    $ben = new SuperHuman;
    // echo $ben->skin;
    // $ben->run();
    // echo $ben->hair;
    // $ben->fly();

    class HyperHuman extends SuperHuman {

    }
    $kk = new HyperHuman;
    // echo $kk->gender;
    /* 
        public: class內或實體皆可使用
        private: 只有在自己的class內可使用
        protected: 只能在class內使用，包含繼承
    
    */

    class Test {
        function __construct(){
            echo "HELLO　PHP";
        }
        //建構子
        public $title = "PHP";

        static function go($title){
            return $title;
        }
    }

    $x = new Test;
    $y = new Test;
    $z = new Test;
    // echo $x->go();
    echo Test::go("HELLO");

