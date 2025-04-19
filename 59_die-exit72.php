<?php
$a=10;
$b=20;
echo $a-$b;
echo "<br/><br/>";
// return is also use for stop the execution of the code
return; 
echo $a+$b;
echo "<br/><br/>";
// exit; //you can use it as a function or also without function 
// exit("Two messages are passed"); //you can also pass messages from here

echo $a*$b;
echo "<br/><br/>";
// die; //you can use it as a function or also without function 
// die("3 messages are printed"); //you can also pass messages from here
echo $a/$b;
echo "<br/><br/>";
echo test();
function test(){
    return 300;
}





?>