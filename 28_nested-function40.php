<?php

test();
function test(){
    echo "test function called \n";
    echo "<br/>";

    function local(){
        echo "function apple called \n";
    }
}

// test(); // to call inner function you have to call main function first otherwise it will be not work
local(); //until you will call the inner function it will be not executed
?>