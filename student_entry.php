<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>New Student Entry</h3>
    <?php 
    if(isset($_POST['submit'])):
        extract($_POST);

        $sql="insert into students values(null,'$fname','$lname','$dob','$notes')";
        include_once("db_config2.php");
        $db->query($sql);

        if($db->affected_rows){
            echo "Inserted";
        }
    endif;

    ?>
    <form action="" method="post">
        <input type="text" name="fname" placeholder="Enter first name"> <br> <br>
        <input type="text" name="lname" placeholder="Enter last name"> <br> <br>
        <input type="date" name="dob" placeholder="Enter date "> <br> <br>
        <textarea name="notes"></textarea> <br> <br>
        <input type="submit" name="submit" value="SUBMIT"> <br>
        <a href="students3(table).php">Student List</a>
    </form>
</body>
</html>