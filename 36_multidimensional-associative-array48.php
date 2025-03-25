<?php
$students=[
    ["name"=> "pritha","dept"=>"CSE","course"=>"b.tech"],
    ["name"=>"sumant","dept"=>"ME","course"=>"b.tech"],
    ["name"=>"suhana","dept"=>"EE","course"=>"b.tech"],
    ["name"=>"anant","dept"=>"ECE","course"=>"b.tech"],
    ["name"=>"ansu","dept"=>"CSE","course"=>"b.tech"]

];
echo "<table border=1>";
foreach($students as $student){
    echo "<tr>";
    foreach($student as $key=> $details){
        echo "<td>";
        echo "$key-> $details";
        echo "<br/>";
        echo "</td>";

    }
    echo "</tr>";
}
echo "</table>";

?>