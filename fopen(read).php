<!-- <?php

 $fh=fopen("student.txt","r"); //fh=file handle
  echo fgets($fh); //fgets ak line er data porte

?> -->

<?php

 $fh=fopen("student.txt","r"); //fh=file handle
  

  while(!feof($fh)){
     echo fgets($fh). "<br>";
    
    
  }
   fclose($fh);

?>