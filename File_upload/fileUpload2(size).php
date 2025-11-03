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
   
   $filename= $_FILES['myfile']['name'];
   $destination="files/" . $filename;
    
    $tempfile=$_FILES['myfile']['tmp_name'];
        $Filesize=$_FILES['myfile']['size']; //Byte

       // $maxSize=1024; //kilobyte aikhane
         //$maxSize=1048576; //1MB
          $maxSize=548576; //0.5MB

         if($Filesize>$maxSize){
            echo "File is too large";

         }
         else{
             move_uploaded_file($tempfile,$destination);
             echo "<h2>Uploaded Successfully</h2>";
         }

   
  }

    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile"><br> <br>
        <input type="submit" value="UPLOAD" name="upload">

    </form>
</body>
</html>