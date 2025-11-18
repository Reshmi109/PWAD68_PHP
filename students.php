<?php include_once("db_config2.php");  ?>

<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
$sql="SELECT * FROM students";
$result=$db->query($sql);  //sql server ea newa
$row=$result->fetch_assoc(); // sql server theke data tule anar jonno fetch korte hobe

 echo $row['employeeID'];
 echo $row['first_name'];

?>
<body>
    
</body>
</html>