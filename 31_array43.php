<?php
$Users=array("pritha","peter","bruce","lucy","jhon"); //array declaration
$users=["pritha","peter","bruce","lucy","jhon","adam","natasha","rohit"]; //another way of array declaration

echo $users[0];// to print array you have to give index no.
echo "<br/>";
echo $users[1]; //to pring single user at a time;
echo "<br/>";
echo $users[2];
echo "<br/>";
echo count($users);
echo "<br/>";

//Better usages
foreach ($users as $user) { // for print an array's all element
    echo "<h2 style='color:green'>$user</h2>";
}
echo "<br/>";
echo "<br/>";


// Alternative using
for ($i = 0; $i < count($users); $i++) {
    echo "<h1 style='color:green'>" . $users[$i] . "</h1>";
}


?>