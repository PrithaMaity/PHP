<?php
function sum($a,$b){ // parameterize function
    echo $a+ $b;
    echo "<br/>";

}

sum(20,50); //pass the value to calculate
echo "<br/>";

sum(200,300);

function userData($name, $color){ //pass the parameter
    echo "<h1 style='color:$color' >$name <h1/>";
}

userData("pritha","green"); //pass the value to parameter

userData("peter","blue");

userData("happy","orange");
?>