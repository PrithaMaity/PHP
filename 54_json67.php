<?php
$user=["name"=>"Pritha ", "email "=>"prithatest@gmail.com", "address "=>"Shyampur, Howrah"]; //array
$userJson=json_encode($user); //convert array to json
// print_r($user);
echo $userJson; //now you can do echo directly
echo "<br/><br/>";

$data='{"name":"Pritha","email":"prithatest@gmail.com","address":"Shyampur, Howrah"}'; //json
echo $data;
echo "<br/><br/>";

//convert json to array
$dataArray=json_decode($data,true); 
print_r($dataArray); //print array
echo "<br/><br/>";

//convert json to object
$dataArray=json_decode($data,); 
print_r($dataArray); //print object

// Another way to convert json to object
$dataObject = json_decode($data); 
print_r($dataObject); // Print the object



?>