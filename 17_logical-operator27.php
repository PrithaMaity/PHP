<?php
$a=10;
$b=20;
$c=50;
// and operator
if($a==10 && $b== 20) //if both condition will be true then code will be executed
{   echo"True ";
}
echo "<br/>";
// Another syntax
if($a== 10 and $b== 20 and $c==30) { // 'and' and '&&' are same 
    echo "And operator";
}
echo "<br/>";

//OR operator
$d=40;
if($c==50 || $d==30) { //if one condition will be true then code will be executed
    echo "OR operator";
}
echo "<br/>";

//xor operator
$x=29;
$y=38;
if($x== 29|| $y== 30) { // one condition must be false and one true
    echo "condition is true";
}
echo "<br/>";

//not operator
$p=100;
if($p!= 99) { // condition should not be equal to the value
     echo "Condition true"; }
?>