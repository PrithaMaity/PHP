<?php
$name="Pritha maity "; // string declaration 
$str1="Tony";
$str2= "10"; // if you write a numaric value in a coat then it will be a string 
$str= "I am from shyampur, Howrah"; //you can take a long string

echo "my name is " .$name; // if you put . it will be connect your string
echo "<br/>";

echo 'my friend is ' .$str1;  //It will be also work with in single coat
echo "<br/>";

echo "Hello my name is $name"; // It also connect string, but it will be not work with in single coat
echo "<br/>";

echo 'My name is '.$name.$str; //concatinate two string
echo "<br/>";

$var= "How are you";
$var1=" Where are you from";

echo $var .$var1; // another way to concatinate string
echo "<br/>";

$var.=$var1; // $var1's value is concatinate into $var
echo $var; // now $var = How are you Where are you from
?>