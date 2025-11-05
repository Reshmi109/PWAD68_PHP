<!-- <?php

 $fh=fopen("student.txt","r"); //fh=file handle
  echo fgets($fh); //fgets ak line er data porte

?> -->

<?php

 $fh=fopen("student1.txt","w"); //fh=file handle
  

//   while(!feof($fh)){
//      echo fgets($fh). "<br>";
    
    
//   }
fwrite($fh,"Hello world Reshmi");
   fclose($fh);

?>