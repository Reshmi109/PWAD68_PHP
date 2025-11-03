<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>File Upload Using PHP Procedural Coding</h3>

    <?php
  if(isset($_POST['upload'])){
   // echo "<pre>";

    //print_r($_FILES);
   $filename= $_FILES['myfile']['name'];
   $destination="files/" . $filename;
    // echo "<br>";
    // echo $_FILES['myfile']['size'];
    // echo "<br>";
    // echo $_FILES['myfile']['tmp_name'];
    // echo "<br>";
    $tempfile=$_FILES['myfile']['tmp_name'];
    move_uploaded_file($tempfile,$destination);
  }

    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile"><br> <br>
        <input type="submit" value="UPLOAD" name="upload">

    </form>
</body>
</html>