<?php
$users=["Rabin","Rahul","Raktim","Runi","Ruhi","Rabi","Rakesh","Rani"];

foreach($users as $name){

    if($name=="Rabi"){
        continue; // loop will be skip the name
    }
    echo "<h3 style='color:blue'>$name</h3>";

    if($name=="Ruhi"){ 
        break; //loop will be stop after print Ruhi
    }
    echo $name;
    echo "<br/>";
}
// Another syntax
foreach($users as $name):
    echo "<h3 style='color:DeepSkyBlue'>$name</h3>";
    // echo "<br/>";
endforeach

?>


