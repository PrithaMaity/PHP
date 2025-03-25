<?php

// include("./1_hello-world7.php"); //include file by given file path

for($i=0; $i<3; $i++){
    // include("./1_hello-world7.php"); //include file by using loop as many times you want
 
}
echo "<br/>";
echo "<br/>";

for($i=0; $i<10; $i++){
    // include_once("./1_hello-world7.php"); //include file only one time 
 
}

    require("./1_hello-world7.php"); //also include file

for($i=0; $i<10; $i++){
    // require_once("./1_hello-world7.php"); //include file only one time 
 
}
?>


