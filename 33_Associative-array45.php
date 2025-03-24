<?php
$userDetails = [
    "name" => "Pritha maity",
    "mobile no." => 95467865,
    "email" => "prithamaity56@gmail.com",
    "city" => "Howrah",
    "state" => "WB"
];

echo $userDetails["name"];
echo "<br/>";
echo "<br/>";
echo "<br/>";

echo $userDetails["email"];
echo "<br/>";
echo "<br/>";


foreach($userDetails as $key => $data){ //$key is not mandatory to given
    // echo $data; // if you print only $key then keys will be print
    echo $data;
    echo "<br/>";

}
echo "<br/>";

//Another usages

foreach($userDetails as $key => $data):
    echo $key." : ".$data;
    echo "<br/>";

endforeach
?>