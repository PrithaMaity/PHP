<?php
function test(){
    echo "test function is called";
    echo "<br/>";
}

$test="test"; // first store it in a variable like this then call that variable
$test(); //variable function, test function called

function main($a){ //pass parameter
    echo "main function called";
    echo "<br/>";
    $a(); // call the function 

}

main($test); // callback function 

?>