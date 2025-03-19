<?php
$a=10;
$b= 10;
$c="10";
$d= 11;
var_dump($a==$b); // equal to
echo "</br>";
var_dump($a==$c); // equal to
echo "</br>";
var_dump($a===$b); // equal to
echo "</br>";
var_dump($a===$c); // identical (data type match)
echo "</br>";
var_dump($a!=$d); // not equal
echo "</br>";
var_dump($a<>$c); // not equal
echo "</br>";
var_dump($a>$d); // greater than
echo "</br>";
var_dump($a<$d); // less than
echo "</br>";
var_dump($a>=$c); // greater than equal to
echo "</br>";
var_dump($a<=$d); //less than equal to
echo "</br>";
var_dump($a<=>$d); // spaceship (return 'int(1)' if a is greater, return 'int(0)' is a and b is equal, return 'int(-1)' if b is greater)

?>