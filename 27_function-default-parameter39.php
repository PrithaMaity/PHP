<?php
function fruit($name, $color="red"){ //default parameter -> color=red
    echo "this is $name and it's color is $color";
}

fruit("apple","green");
echo "<br/>";

function displayUser($name, $color="skyBlue"){ //you can pass default parameter for all parameter
    echo "<h1 style='color:$color'> $name<h1>";
}

displayUser("Pritha maity"); // you can't set default parameter without write first parameter, because is's always applicable from last to first
echo "<br/>";

displayUser("blue"); //it will be shown as first parameter -> blue(in skyBlue color)
?>