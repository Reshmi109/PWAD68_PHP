

<?php

 $fh=fopen("student1.txt","a"); 
  

   while(!feof($fh)){
    echo fgets($fh). "<br>";
    
    
  }
fwrite($fh,"Hello world Reshmi,How are you ");
   fclose($fh); //file close

?>