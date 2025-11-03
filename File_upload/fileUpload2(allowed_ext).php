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
          $maxSize=576; //0.5MB
          echo $ext=strtolower(pathinfo($filename,PATHINFO_EXTENSION));
          $allowedTypes=["jpg","jpeg","png"];
          $errors=[];

         if($Filesize>$maxSize){
          $errors[]= "<h1>File is too large</h1>";

         }
         if(!in_array($ext,$allowedTypes)){
             $errors[]= "<h1>jpg,png and jpeg is allowed</h1>";

         }

         if(count($errors)>0){
            foreach($errors as $error){
                echo $error . "<br>";
            }

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