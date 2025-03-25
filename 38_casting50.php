<?php
$a=10;
$a=(string) $a; //converting data type into string
var_dump($a); 
echo "<br/>";

$a=(boolean) $a;
var_dump($a);
echo "<br/>";

$b="300"; //string value
$b=(int) $b; //converting into integer
var_dump($b);
echo "<br/>";

$c=2.8;
$c=(int) $c;
var_dump($c);
echo "<br/>";

$d="true";
$d=(int) $d; 
var_dump($d);
echo "<br/>";

$e=10;
$e=(array) $e;
var_dump($e);
echo "<br/>";

$f=20;
$f=(object) $f;
var_dump($f);
echo "<br/>";

$i=[50];
$i=(int) $i; 
var_dump($i);

?>