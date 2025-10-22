<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $x = 10; //Integer
    $name = "Reshmi"; //String
    $_age = 15;
    $_10Age = 20;
    $fullName ="Fatema";
    $z = null; //Null value
    $success = TRUE;

    $commission = 15.4; //Float,Double
    $fruit=["Mango", "Orange","Banana"];
    class person 
{
 public $name = "Fatema";
}
$person = new person;

    var_dump($x); //var_dump can describe the variabl
    var_dump($name);
    echo "<pre>";
    var_dump($fruit);
    var_dump($success);
    var_dump($person);


    ?>
</body>
</html>