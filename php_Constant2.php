<?php

class goodByClass{
    const MYMSG = "We are learning PHP OOP <br>";
        const MYMSG2 = "We are about constant using in oop";

    
    function Info(){
         echo self ::MYMSG2;
    }
} //end of the class

 echo goodByClass ::MYMSG;
$obj1= new goodByClass;
$obj1->Info();


?>