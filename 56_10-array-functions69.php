<?php
$users=["Ramesh", "Suresh", "Priya", "Prakash", "Raktim"];
$detail=["name"=>"pritha", "gender"=>"female", "dept"=>"CSE"];
echo is_array($users); //if it is array it will return 1 otherwise return 0
echo "<br/><br/>";

// another way to check array
$name="pritha";
if(is_array($name)){
    echo "This is an array";
}else{
    echo "This is not an array";
}
echo "<br/><br/>";

// count array's element
echo count($users);
echo "<br/><br/>";

// Remove array's element
unset($users[1]); // put element number
print_r($users);
echo "<br/><br/>";

// Add array's element from last
array_push($users,"Rajendra");
print_r($users);
echo "<br/><br/>";

// remove array's element from last
array_pop($users);
print_r($users);
echo "<br/><br/>";

// To see array's key
print_r(array_keys($detail));
echo "<br/><br/>";

// convert array to string
echo implode($users);
echo "<br/><br/>";

// convert string to array
$str="Hello how are you pritha";
echo $str;
echo "<br/><br/>";
print_r(explode( " ", $str)); // it will break when found space
echo "<br/><br/>";
print_r(explode( "o", $str)); // it will break when found o
echo "<br/><br/>";
$str1="Hello, how are you, pritha";
echo $str1;
print_r(explode( ",", $str1)); // it will break when found comma(,)
echo "<br/><br/>";


// Merge two array
print_r(array_merge($users, $detail));
echo "<br/><br/>";

// or
$data=array_merge($detail, $users);
print_r($data);
echo "<br/><br/>";

// To remove duplicate element
$employee=["jhon","peter","bruce","lucy","jhon","bruce","natasha","bruce"]; 
print_r(array_unique($employee));

?>