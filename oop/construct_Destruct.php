 <?php

class Fruit {
    public $name;
    public $color;

    //construc auto call kore

    function __construct($name){
       echo "Hello" .  $name . "<br>";
    }
    function __destruct()
    {
        echo "Bye Bye...";
    }


}
new Fruit("Reshmi");
?>

