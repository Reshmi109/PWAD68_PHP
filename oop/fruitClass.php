<?php 
class Fruit{
    public $name;   //public keyword class er bahir theke access kora jai
    public $color;
    
    
}

//var_dump(Fruit);//object na korle class ea vitor ki ase ta dekha jai na
 $fruitobj=new Fruit;
// var_dump($fruitobj);

$fruitobj->name="Mango";
$fruitobj->color="Yellow";
 var_dump($fruitobj);
 echo "<br>";
 
 $fruitobj2=new Fruit;
 $fruitobj2->name="Jackfruit";
 $fruitobj2->color="Red";
 var_dump($fruitobj2);




?>