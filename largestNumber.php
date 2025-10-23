<?php
$a=10;
$b=1001;
$c=11;$d=5;$e=2000;
if($a>$b && $a>$c && $a>$d && $a>$e){
    echo $a . " is largest number" ;

}
 else if($b>$a && $b>$c && $b>$d && $b>$e){
    echo $b . " is largest number" ;

}
else if($c>$a && $c>$b && $b>$d && $b>$e){
    echo $c . " is largest number";

}
else if($d>$a && $d>$b && $d>$c && $b>$e){
    echo $d . " is largest number";

}
else{
    echo $e . " is largest number";
}
?>