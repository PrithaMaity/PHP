<?php
$x=20;
echo "before condition <br/>";

if($x==20){ //condition
    goto jump;  // use jump statement to skip any line (ex: line 10)

}
$name="pritha<br/>";
echo $name; //skip that line


jump: //jumped here
echo "statement is jumped on line no. 14";


for($i=0; $i<=10; $i++){
    echo "$i <br/>";
    if($i==5){ //condition
        goto outsideLoop; // use goto statement to break the loop

    }
}

outsideLoop:
echo "Line break";
?>