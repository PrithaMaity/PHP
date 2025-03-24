<?php
$users=[
    [1, "Pritha", "howrah", "prithamaity56@gmail.com"],
    [2, "Peter", "delhi", "peter44@gmil.com"],
    [3, "Natasha", "kolkata", "natasha32@gmail.com"]
];

echo "<pre>"; //pre is a html tag
print_r($users);
echo "<pre>"; // <pre> tag helps in formatting the output for better readability.

for($i=0; $i < count($users); $i++){
    // print_r($users[$i]);
    for($j = 0; $j < count($users[$i]); $j++){
    echo "<h2 style = 'color:forestgreen'>" . $users[$i][$j] . "</h2>";
    // echo "<br/>";
    }
}
?>