<!-- Q-1: Write a program in PHP which will validate a login registration system using form
# User name must be between 4 to 8 digit
# must be '@'symbol -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Enter your username" required> <br> <br>
        <input type="submit" value="validate">
    </form>

    <?php

   if($_SERVER["REQUEST_METHOD"] == "POST"){
    $user= $_POST["username"];
    
    if(strlen($user)<4 || strlen($user)>8){
        echo "user name must be 4 to 8 charcters";

    }
    else if(strpos($user, "@")===false){
        echo "User name must be contain @ symbol";

    }
    else{
        echo "Your username is Valid";

    }



   }
   




?>
    
</body>
</html>
