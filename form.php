<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // //$_GET $_POST $_REQUEST (Supper Global Array)
    // echo "<pre>";
    // print_r($_GET); //Array Describe Best
    // echo "</pre>";
//    $fullname = $_GET['fullname'];
//    $email = $_GET['email'];
//    $phone = $_GET['phone'];
  if(isset($_GET['submit'])) //isset build in function
  {
    $fullname = $_GET['fullname'];
   $email = $_GET['email'];
   $phone = $_GET['phone'];

   echo " Fullname : " . $fullname. "<br>";
   echo " Email : " . $email. "<br>";
   echo " phone : " . $phone. "<br>";

  }
    ?>
    <h3>Registration Form</h3>
    <form action="" method="get">
        Name :
        <input type="text" name="fullname" placeholder="Enter your fullname"> <br> <br>
        Email :
        <input type="email" name="email" placeholder="Enter your email"> <br> <br>
        Phone :
        <input type="text" name="phone" placeholder="Enter your number"> <br> <br>
        <input type="submit" name="submit" value="SUBMIT">
        


    </form>
</body>

</html>