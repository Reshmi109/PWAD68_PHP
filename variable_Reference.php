<?php
$value1="Hello world";
$value2=$value1;
echo $value1;
echo "<br>";
echo $value2;
?>
<hr>
<?php
$value1="Hello world";
$value2=$value1;
$value2="PHP Class";
echo $value1;
echo "<br>";
echo $value2;
?>
<hr>
<?php
$value1="Hello world";
$value2= & $value1;
$value2="PHP Class";
echo $value1;
echo "<br>";
echo $value2;
echo "<br>";

echo $value1;
echo "<br>";
?>
<hr>