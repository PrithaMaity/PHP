<?php

// make a table
        $users=[
            [1, "Pritha maity", "prithamaity56@gmail.com"],
            [2, "Rakesh sharma", "rakesh123@gmail.com"],
            [3, "Rohit jain", "rohit123@gmail.com"],
            [4, "Bhaskar roy", "bhaskar123@gmail.com"],
            [5, "Mukesh  sen", "mukesh123@gmail.com"]
        ];
echo "<table border=2>";
        for($i=0; $i<count($users); $i++){
            echo "<tr>";
            for($j=0; $j<count($users[$i]); $j++){
                echo "<td>";
                echo $users[$i][$j];
                echo "</td>";
                // echo "<br/>";

            }
            echo "</tr>";
        }
echo "</table>";

?>
    