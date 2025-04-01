<?php
$a="10";
const data="40";
echo "<pre>";
print_r($GLOBALS); // show all super global variable on your file
// global variables are predefined
echo "<pre>";

print_r($_SERVER); //show all the details about these file's server 
echo "<br/>";
echo "<br/>";
echo "<br/>";
print_r($_SERVER['REQUEST_URI']); //for see a specific details about this file's server you can write this way
echo "<br/>";
echo "<br/>";
print_r($_REQUEST); // when you sent data from any $GET or $POST request data or from php file then you can see that by '$REQUEST' super global variable

?>