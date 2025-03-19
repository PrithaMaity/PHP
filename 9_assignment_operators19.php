<?php

$num1=10;
$num2= 15;

$num1=$num2; // assign $num2 in $num1
echo $num1; //$num1=15
echo "</br>";

//Assingment operator with addition, subtraction, multiplication, divition, modulus and exponential
$num1=$num1+$num2; // add $num1 and $num2 and assign in $num1
echo $num1; //$num1=30
echo "</br>";
// OR
$num1+= $num2; // add $num1 and $num2 and assign in $num1
echo $num1; // $num1=45
echo "</br>";

$num1-= $num2; // sub $num1 and $num2 and assign in $num1
echo $num1; //$num1=30
echo "</br>";
//OR
$num1=$num1-$num2; // sub $num1 and $num2 and assign in $num1
echo $num1; //$num1=15
echo "</br>";

$num1=$num1*$num2; // multiply $num1 and $num2 and assign in $num1
echo $num1; //$num1=225
echo "</br>";
//OR
$num1*=$num2; // multiply $num1 and $num2 and assign in $num1
echo $num1; //$num1=3375
echo "</br>";

$num1=$num1/$num2; // devide $num1 and $num2 and assign in $num1
echo $num1; //$num1= 225
echo "</br>"; 
// //OR
$num1/=$num2; // devide $num1 and $num2 and assign in $num1
echo $num1; //$num1=15
echo "</br>";

$a=30;
$b=20;
$num1=$num1%$num2; // modulus $num1 and $num2 and assign in $num1
echo $num1; //$num1=0
echo "</br>";
// //OR
$a%=$b; // modulus $num1 and $num2 and assign in $num1
echo $a; //$a=10
echo "</br>";

$c=2;
$d=3;

$c=$c**$d; // exponential $num1 and $num2 and assign in $num1
echo $c; //$c=8
echo "</br>";
//OR
$c**=$d; // exponential $num1 and $num2 and assign in $num1
echo $c; //$c= 512
echo "</br>";

?>