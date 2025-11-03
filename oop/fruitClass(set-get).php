<?php 
class Fruit{
    private $name;   //private er khetre same class ea access kora jai
    private $color;
    
//setter function (public Function)
    function set_name($name){
        $this->name= $name;

    }
    function set_color($color){
        $this->color= $color;

    }

    function get_name_color(){
     echo"Name : ". $this->name . "<br>" . "Color:" . $this->color;
      
    }
    
}

$obj1=new Fruit;
$obj1->set_name("Banana");
$obj1->set_color("Green");
// var_dump($obj1); //var_dump use kora hoi test korar jonno
$obj1->get_name_color();






?>