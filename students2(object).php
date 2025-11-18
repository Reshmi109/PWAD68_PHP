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
//$row=$result->fetch_array(); 
// sql server theke data tule anar jonno fetch korte hobea

while($row1=$result->fetch_object()){
    echo $row1->employeeID;
    echo $row1->first_name;
    echo $row1->last_name;
    echo "<hr>";
}


?>
<body>
    
</body>
</html>