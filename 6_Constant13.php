<?php
const data = 'Pritha Maity'; //for constant value write 'const' at the time of declare variable
// const data ='Bruce';  // It will be shows error because once constant variable is declared it can't be change
echo data;
ECHO "<br/>";

const name= "peter"; //don't use $sign before variable name, otherwise declaration is same as normal variable

define( "CITY", "Uluberia"); //define constant value in another way
// define('city','Howrah');
echo CITY;

const __ =990; // it also can be a variable name
echo __;
?>