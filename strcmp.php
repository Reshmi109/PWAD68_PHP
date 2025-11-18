<?php 
$pswd="supersecret";
$pswd2="supersecret2"

if  (strcmp($pswd,$pswd2)==-1)
{
    echo "passwords do not match";
}
else{
    echo "password match";
}


?>