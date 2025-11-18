<?php 
$host="localhost";
$user="root";
$password="";
$db="pwad68";

$conn=new mysqli($host,$user,$password,$db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$conn->close();
?>