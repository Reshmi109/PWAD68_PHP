<?php

class Fruit{
    public $name;
    public $color;

    function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;

    }

    function info(){
        echo "Name : " . $this->name . "Color :" .$this->color;
    }
    
}


//child class

class Grape extends Fruit{
    function  message(){
        echo "I am a function inside Grave class";
    }
}

$obj1=new Fruit("Apple","Green");
$obj1->info();
echo "<br>";

$obj2=new Grape("Orange","Yellow");
$obj2->info();
echo "<br>";
$obj2->message();
?>