<!-- Q. Find out largest value among five numbers . -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <?php 

    if(isset($_REQUEST["click"])){
        $num=$_REQUEST["num"];
        $num_arr=explode(",", "$num");
        $large=$num_arr[0];
        $min=$num_arr[0];

        foreach($num_arr as $n){
            if($n>$large){
                $large=$n;
            }
            if($n<$min){
                $min=$n;
            }

        }
        echo "The largest number is : " .$large. "<br>";
        echo "The minimum number is : " .$min;
    }


?>

<form action="">
    <input type="text" name="num" placeholder="Enter any 5 numbers"> <br> <br>
    <input type="submit" name="click" value="click">

</form>
 </body>
 </html>