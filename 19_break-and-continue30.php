<?php

for ($i = 0; $i <= 10; $i++) {
    echo $i;
    echo"<br/>";
    if ($i== 5) { //if you want to stop loop at anywhere use 'break'
        break;
    }
}
echo "<br/>";
echo "<br/>";

for ($j=0; $j<=10; $j++) {
    if($j==8 || $j== 2) { //if you want to skip anything use 'continue'
        continue; // if you write 'continue' without any condition, then every time it will be skip and nothing will be print
    }
    echo $j; // always write 'continue' before print otherwise nothing will be skip
    echo "<br/>";
    
}


?>