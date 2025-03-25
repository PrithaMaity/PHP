<?php

$name="priya";//global variable and local variable name can be same
$var ="global variable"; //global variable
$fruit="mango";

function getName($fruit){ //global variable can be access as a parameter

    $name="pritha"; //local variable 
    echo "local variable is :$name"; //local variable, can not be accessable outside of the function
    echo "<br/>";

    echo $fruit;
    echo "<br/>";

    global $var; //global variable can be access inside the function like this
    echo $var;
    echo "<br/>";

    global $name;
    $name="Peter"; //global variable name can be change inside the function
    echo $name;
}
echo $name; 
echo "<br/>";

getName($fruit);
echo "<br/>";

echo $name; //global variable
echo "<br/>";
echo "<br/>";
echo "<br/>";


//2nd function
$car= "Hyundai";
function test(){
    $car="Audi"; //local variable inside test()
    echo $car; // outputs "Audi

    function innerTest(){
        global $car; //if you call global variable then the variable outside of the main function will be execute not the outsides nested function's variable
        echo $car; //outputs "Hyundai"
        echo "<br/>";

    }
    
}

test();
echo "<br/>";

innerTest(); //until you call the inner function it will not be executed
echo "<br/>";

?>